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
                 'attr' => array('class' =>  'advanced')
             )) 
            ->add('posicion')
			
             ->add('visible','checkbox',array(
                 'data' => true,
                ))
            ->add('enlace')
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
