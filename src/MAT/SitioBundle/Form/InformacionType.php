<?php

namespace MAT\SitioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InformacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('descripcion', 'textarea', array(
                 'attr' => array('class' => 'tinymce','data-theme' => 'advanced')
             )) 
            ->add('fechaHora', 'date', array(
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => array(
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy',
                        'language' => 'es'
                            
                        )))

            ->add('visible','checkbox')
            //->add('idUsuario', 'choice', array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\SitioBundle\Entity\Informacion'
        ));
    }
}
