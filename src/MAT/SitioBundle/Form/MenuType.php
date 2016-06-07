<?php

namespace MAT\SitioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             
               ->add('descripcion', 'textarea', array(
                 'label' =>'Descripcion',    
                 'attr' => array('placeholder' => 'Descripcion', 'class'=> 'form-control input-sm ')
             ))  
			  ->add('posicion', 'text', array(
                 'label' =>'Descripcion',    
                 'attr' => array('placeholder' => 'Posición', 'class'=> 'form-control input-sm ')
             ))  
			 
            ->add('enlace', 'text', array(
                 'label' =>'Enlace',    
                 'attr' => array('placeholder' => 'Enlace', 'class'=> 'form-control input-sm ')
             )) 
			
             ->add('visible','checkbox',array(
                 'data' => true,
                 'required' => false,
                 
                ))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\SitioBundle\Entity\Menu'
        ));
    }
}
