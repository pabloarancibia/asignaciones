<?php

namespace PA\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use PA\UserBundle\Entity\User;
use PA\UserBundle\Form\UserType;

class UserController extends Controller
{
    public function indexAction(Request $request)
    {
         
         //$em = $this->getDoctrine()->getManager();
         //$users = $em->getRepository('PAUserBundle:User')->findAll();
         
         /*
         $res = 'Lista de usuarios: <br />';
         
         foreach($users as $user)
         {
             $res.= 'Usuario: ' . $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br />';
         }
         
         return new Response($res);
         
         $searchQuery = $request->get('query');
         print_r($searchQuery);
         exit;
         */
         $searchQuery = $request->get('query');
         //compruebo q no este vacio el campo search 
         if(!empty($searchQuery))
            {
              $finder = $this->container->get('fos_elastica.finder.app.user');
              //tomo del ej de la pagina
              $users = $finder->createPaginatorAdapter($searchQuery);
            }
         else
            {
         $em = $this->getDoctrine()->getManager();
         $dql= "SELECT u FROM PAUserBundle:User u ORDER BY u.id DESC";
         $users = $em->createQuery($dql);
            }
            
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
             $users,
             $request->query->getInt('page',1),//numero de pagina
             5//limite por pagina
             
             );
         
         
         $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'pa_user_delete');
         
         return $this->render('PAUserBundle:User:index.html.twig', array ('pagination'=>$pagination, 'delete_form_ajax' => $deleteFormAjax->createView()));
         
    }
    
    public function addAction()
    {
        //renderizamos 
        $user = new User();
        $form = $this -> createCreateForm($user);
        
        return $this->render ('PAUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('pa_user_create'),
            'method' => 'POST'
            )); 
            
        return $form;
    }
    
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);
        //hasta aca tenemos estamos teniendo el formulario y procesandolo con el obj request
        
        //validacion del formulario
        if($form->isValid())
        {
            //obtenemos el password ingresado en el formulario:
            $password = $form->get('password')->getData();
            
            //definimos constraint,con la regla de validacion no vacío,
            $passwordConstraint = new Assert\NotBlank();
            
            //utilizamos la regla anterior para validar el campo password que acabamos de obtener
            $errorList = $this->get('validator')->validate($password, $passwordConstraint);
            
            //verificamos si no hubo ningun error
            if(count($errorList)==0)
            {
                //traigo el encoder para codificar el password
                $encoder = $this->container->get('security.password_encoder');
                //condifico el pass
                $encoded = $encoder->encodePassword($user, $password);
                //almacenamos el password ya encriptado
                $user->setPassword($encoded);
                
                //accedo al getDoctrine  y dentro de este al getManager para posteriormente utilizar el metodo persist
                $em = $this->getDoctrine()->getManager();
                //denntro de persist mandamos el objeto user
                $em->persist($user);
                // flush se encarga de guardar los registros en la base de datos
                $em->flush();
                
                // añadimos un msje que indique lo siguiente, primero creamos una variable traducible para despues mostrar la variable
                $successMessage = $this->get('translator')->trans('the user has been created...');
                //mostramos el msj desde la variable
                $this->addFlash('mensaje', $successMessage);
                // $this->addFlash('mensaje', 'the user has been created...');
            
                //hacemos el return con el metodo para indicar una ruta
                return $this->redirectToRoute('pa_user_index');
            }
            else
            {
                //colocamos el error en errorMessage
                $errorMessage = new FormError($errorList[0]->getMessage());
                //recuperamos el campo password y le agregamos el error con el mensaje
                $form->get('password')->addError($errorMessage);
            }
        }
        
        //si hay algun error
        return $this->render('PAUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }
    
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PAUserBundle:User')->find($id);
        
        
        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException) ;
        }
        
        $form = $this->createEditForm($user);
        
        return $this->render('PAUserBundle:User:edit.html.twig',array('user' => $user, 'form' => $form->createView()));
    }
    
    private function createEditForm(User $entity)
    {
        
        $form = $this->createForm(new UserType(), $entity, array('action' => $this->generateUrl('pa_user_update', array('id' => $entity->getId())), 'method' => 'PUT'));
       
       return $form;
    }
    
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PAUserBundle:User')->find($id);
         if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException) ;
        }
        
        //metodo p elaborar nuestro formulario con los datos del user correspondiente
        $form = $this->createEditForm($user);
        //procesamos el formulario con el obj request
        $form->handleRequest($request);
        
        //validamos el contenido del formulario
        //ifsubmitted verifica si el form se envio correctamente
        //isValid verifica si los datos q estamos enviando son correctos
        if($form->isSubmitted()&&$form->isValid())
        {
            //recuperamos password
            $password = $form->get('password')->getData();
            
            //validamos q pass no este vacio
            if(!empty($password))
            {
                //estoy trayendo desde encoder el password_encoder
                $encoder = $this->container->get('security.password_encoder');
                //ahora con encoder hago la encriptacion utilizando encodePassword
                $encoded = $encoder->encodePassword($user,$password);
                //finalmente la variable encriptada la asigno a user
                $user->setPassword($encoded);
            }else{//si el usuario no quiere cambiar el password
                $recoverPass = $this->recoverPass($id);
                
                //asignamos el pass que recuperamos en recoverPass (symfony lo hace como un arreglo)
                $user->setPassword($recoverPass[0]['password']);
            }
            
            if($form->get('role')->getData()=='ROLE_ADMIN')
            {
                $user->setIsActive(1);
            }
            
            //utilizamos flush para q guarde los datos que cambiamos
            $em->flush();
            
            $successMessage = $this->get('translator')->trans('the user has been modified...');
            //mostramos el msj desde la variable
            $this->addFlash('mensaje', $successMessage);
            
            return $this->redirectToRoute('pa_user_edit', array('id' => $user->getId()));
            
        }
        
        //si no se proceso el form
        return $this->render('PAUserBundle:User:edit.html.twig', array('user'=>$user, 'form'=>$form->createView()));
        
    }
    
    private function recoverPass($id)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT u.password
            FROM PAUserBundle:User u
            WHERE u.id = :id'
            )->setParameter('id', $id);
            
        //recupero el resultado de mi consulta
        $currentPass = $query->getResult();
        
        return $currentPass;
    }
    
    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('PAUserBundle:User');
        
        //$user = $repository->find($id);
        
        $user = $repository->findOneById($id);
        
        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException) ;
        }
        
        $deleteForm = $this->createCustomForm($user->getId(),'DELETE', 'pa_user_delete');
        
        return $this->render('PAUserBundle:User:view.html.twig', array('user'=>$user, 'delete_form'=>$deleteForm->createView()));
        
    }
    
    private function createDeleteForm($user)
    {
        //llamamos a builder para hacer el form
        return $this->createFormBuilder()
        //en generateUrl la ruta q vmos a procesar, le pasamos el id
        ->setAction($this->generateUrl('pa_user_delete',array('id'=>$user->getId())))
        //definimos el metodo en q va a trabajar nuestro formulario
        ->setMethod('DELETE')
        //aplicamos el formulario
        ->getForm();
        
    }
    
    public function deleteAction (Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PAUserBundle:User')->find($id);
        
        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException) ;
        }
        
        //realizar conteo de cantidad de registros (para ajax)
        $allusers = $em->getRepository('PAUserBundle:User')->findAll();
        $countUsers = count($allusers);
        
        //$form = $this->createDeleteForm($user);
        $form = $this->createCustomForm($user->getId(),'DELETE', 'pa_user_delete');
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            if($request->isXMLHttpRequest())
            {
                $res = $this->deleteUser($user->getRole(),$em, $user);
                
                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'], 'countUsers' => $countUsers )),
                        200,
                        array('Content-Type' => 'application/json')
                    );
            }
            
            // $em->remove($user);
            // $em->flush();
            
            // $successMessage = $this->get('translator')->trans('the user has been deleted...');
            
            $res = $this->deleteUser($user->getRole(),$em,$user);
            
            //mostramos msj segun lo q recibimos de deleteUser
            $this->addFlash($res['alert'], $res['message']);
            
            //mostramos el msj desde la variable
            //$this->addFlash('mensaje', $successMessage);
            
            return $this->redirectToRoute('pa_user_index');
        }
        
    }
    
    private function deleteUser($role, $em, $user)
    {
        if($role == 'ROLE_USER')
        {
            $em->remove($user);
            $em->flush();
            $message = $this->get('translator')->trans('the user has been deleted...');
            $removed = 1;
            $alert = 'mensaje';
        }
        elseif($role == 'ROLE_ADMIN')
        {
            $message = $this->get('translator')->trans('must be an administrator');
            $removed = 0;
            $alert = 'error';
        }
        
        return array('removed'=>$removed, 'message'=>$message, 'alert'=>$alert);
    }
    
    public function articlesAction($page)
    {
         return new response('este es mi articulo: ' . $page);   
    }
    
    private function createCustomForm($id, $method, $route)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, array('id'=> $id)))
            ->setMethod($method)
            ->getForm();
    }
}
