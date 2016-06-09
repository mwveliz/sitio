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
             
             ->add('descripcion', 'textarea', array(
                 'label' =>'Descripcion',    
                 'attr' => array('placeholder' => 'Descripcion', 'class'=> 'form-control input-sm ')
             ))  
			 
            
            ->add('enlace', 'text', array(
                 'label' =>'Enlace',    
                 'attr' => array('placeholder' => 'Enlace tipo http:// que lleva al sitio web del ente', 'class'=> 'form-control input-md ')
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
