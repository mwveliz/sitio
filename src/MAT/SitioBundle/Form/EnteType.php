<?php

namespace MAT\SitioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        /*->add('descripcion', 'textarea', array(
                 'attr' => array('class' =>  'advanced')
             )) */
             
             ->add('descripcion', 'text', array(
                 'label' =>'Descripcion',    
                 'attr' => array('placeholder' => 'Descripcion', 'class'=> 'form-control input-sm ')
             ))  
			 
            
            ->add('enlace', 'text', array(
                 'label' =>'Enlace',    
                 'attr' => array('placeholder' => 'Descripcion', 'class'=> 'form-control input-sm ')
             )) 
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\SitioBundle\Entity\Ente'
        ));
    }
}
