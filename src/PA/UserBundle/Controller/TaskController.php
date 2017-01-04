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
}
