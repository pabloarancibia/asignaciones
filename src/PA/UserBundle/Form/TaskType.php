<?php

namespace PA\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class TaskType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            /*agregamos el campo usuario, le decimos que se trata de una entidad
            abrimos un array donde definimos: una clase a la cual nos vamos a referir:
            nuestro bundle y la entidad user que es la que queremos recuperar.
            Un query_builder donde vamos a crear una funcion anonima en el cual 
            vamos a recibir el entity repository (que importamos en namespaces)
            Dentro del query_builder (o de la funcion) vamos a retornar una consulta
            a partir de $er vamos a utilizar el metoro createQueryBuilder y dentro
            de este metodo definimos un alias que va representar los usuarios recuperados.
            Seguido colocamos la sentencia where que forma parte del QueryBuilder
            para filtrar los tipos de usuarios que correspondan al rol user
            colocamos el parametro only y luego seteamos ese parametro como ROL_USER
            Luego usamos la opcion choice_label que va representar el label de la lista de usuarios
            Vamos a la entidad user y creamos un nuevo campo Fullname que es el 
            q vamos a mostrar en este label
            */
            ->add('user','entity',array(
                'class'=>'PAUserBundle:User',
                'query_builder'=> function(EntityRepository $er){
                    return $er->createQueryBuilder('u')
                        ->where('u.role = :only')
                        ->setParameter('only','ROLE_USER');
                },
                'choice_label' => 'getFullName'
                ))
            ->add('save', 'submit', array('label'=>'Save Task'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PA\UserBundle\Entity\Task'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'task';
    }
}
