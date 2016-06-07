<?php

namespace MAT\SitioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImagenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
              ->add('descripcion', 'textarea', array(
                 'attr' => array('class' => 'advanced')
             )) 
            ->add('fechaHora', 'date', array(
                         'data' =>  new \DateTime(),
                        'label' => 'Fecha ',
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => array(
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy',
                        'locale' => 'es',
                         
                        )))
                
           
            
			->add('ruta', 'file', array('data_class' => null ))
			
			
			->add('idUsuario','hidden',array(
                  
             ))   
			
			 ->add('visible','checkbox',array(
                'data' => true,
                'required' => false,

                ))        
				
			  ->add('autor', 'text', array(
			  'label' => 'creditos',
              
			  ))
			  ; 
            /*->add('descripcion')
            ->add('fechaHora', 'datetime')
            ->add('visible')
            ->add('ruta')
            ->add('autor')
            ->add('idUsuario')*/
       
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\SitioBundle\Entity\Imagen'
        ));
    }
}
