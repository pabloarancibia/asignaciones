<?php

namespace PA\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use PA\UserBundle\Entity\Task;
use PA\UserBundle\Form\TaskType;

class TaskController extends Controller
{
    public function indexAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT t FROM PAUserBundle:Task t ORDER BY t.id DESC";
        $task = $em->createQuery($dql);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $task,
            $request->query->getInt('page',1),
            5
            );
            
        return $this->render('PAUserBundle:Task:index.html.twig', array('pagination'=>$pagination));
    }
    
    public function customAction(Request $request)
    {
        $idUser = $this->get('security.token_storage')->getToken()->getUser()->getId();
        
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT t FROM PAUserBundle:Task t JOIN t.user u WHERE u.id = :idUser ORDER BY t.id DESC";
        
        $tasks = $em->createQuery($dql)->setParameter('idUser' , $idUser);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $tasks,
            $request->query->getInt('page', 1),
            3
        );
        
        $updateForm = $this->createCustomForm(':TASK_ID', 'PUT', 'pa_task_process');
        
        return $this->render('PAUserBundle:Task:custom.html.twig', array('pagination' => $pagination, 'update_form' => $updateForm->createView()));
    }
    
    
    
    public function processAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $task = $em->getRepository('PAUserBundle:Task')->find($id);
        
        if(!$task)
        {
            throw $this->createNotFoundException('Task not found');
        }
        
        $form = $this->createCustomForm($task->getId(), 'PUT', 'pa_task_process');
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            if ($task->getStatus() == 0)
            {
                $task->setStatus(1);
                $em->flush();
                
                if($request->isXMLHttpRequest())//para trabajar las peticiones ajax y mandemos respuesta en json
                {
                    return new Response(
                        json_encode(array('processed' => 1)),
                        200,
                        array('Content-Type' => 'application/json')
                    );
                }
            }
            else//si la tarea ya esta finalizada
            {
                if($request->isXMLHttpRequest())
                {
                    return new Response(
                        json_encode(array('processed' => 0)),
                        200,
                        array('Content-Type' => 'application/json')
                    );
                }            
            }
        }
    }
    
    public function addAction()
    {
    $task = new Task();
    $form = $this->createCreateForm($task);
    
    
    return $this->render('PAUserBundle:Task:add.html.twig', array('form' => $form->createView()));
    }
    private function createCreateForm(Task $entity)
    {
        $form = $this->createForm(new TaskType(), $entity, array(
            'action'=>$this->generateUrl('pa_task_create'),
            'method'=>'POST'
            ));
            
        return $form;
    }
    
     public function createAction(Request $request)
    {
        $task = new Task();
        $form = $this->createCreateForm($task);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            $task->setStatus(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            
            $this->addFlash('mensaje', 'The task has been created.');
            return $this->redirectToRoute('pa_task_index');
        }
        
        return $this->render('PAUserBundle:Task:add.html.twig', array('form'=>$form->createView()));
        //redirect('EMMUserBundle:Task:add.html.twig', array('form' => $form->createView()));
    }
    
    public function viewAction($id)
    {
        $task = $this->getDoctrine()->getRepository('PAUserBundle:Task')->find($id);
    
        if(!$task)
        {
            throw $this->createNotFoundException('La tarea no existe');
        }
        
        $deleteForm = $this->createCustomForm($task->getId(),'DELETE', 'pa_task_delete');
        
        $user = $task->getUser();
        
        return $this->render('PAUserBundle:Task:view.html.twig',array('task'=>$task, 'user'=>$user,'delete_form'=>$deleteForm->createView()));
    }
    
    public function editAction($id)
    {
        //aca tdo lo mismo, recuperamos la tarea con el id
        $em = $this->getDoctrine()->getManager();
        
        $task = $em->getRepository('PAUserBundle:Task')->find($id);
        
         if(!$task)
        {
            throw $this->createNotFoundException('La tarea no existe');
        }
        
        //ahora llamamos al metodo donde creamos el formulario para editar la tarea
        $form = $this->createEditForm($task);
        
        return $this->render('PAUserBundle:Task:edit.html.twig', array('task'=>$task,'form'=>$form->createView()));
        
    }
    
    private function createEditForm($entity)
    {
        $form = $this->createForm(new TaskType(),$entity,array(
            'action' => $this->generateUrl('pa_task_update',array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        
        return $form;
    }
    
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $task = $em->getRepository('PAUserBundle:Task')->find($id);
        
        if(!$task)
        {
            throw $this->createNotFoundException('La tarea no existe');
        }
        
        $form = $this->createEditForm($task);
        $form->handleRequest($request);
        
        if($form->isSubmitted() and $form->isValid())
        {
            $task->setStatus(0);
            $em->flush();
            $this->addFlash('mensaje', 'La tarea ha sido modificada');
            return $this->redirectToRoute('pa_task_edit', array('id' => $task->getId()));
        }
        
        return $this->render('PAUserBundle:Task:edit.html.twig',array('task'=>$task, 'form'=>$form->createView()));
    }
    
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $task = $em->getRepository('PAUserBundle:Task')->find($id);
        
        if(!$task)
        {
            throw $this->createNotFoundException('task not found');
        }
        
        $form = $this->createCustomForm($task->getId(), 'DELETE', 'pa_task_delete');
        $form->handleRequest($request);
        
        if($form->isSubmitted() and $form->isValid())
        {
            $em->remove($task);
            $em->flush();
            
            $this->addFlash('mensaje', 'Tarea Eliminada');
            
            return $this->redirectToRoute('pa_task_index');
        }
    }
    
    private function createCustomForm($id, $method, $route)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl($route, array('id' => $id)))
             ->setMethod($method)
             ->getForm();
        
    }
}