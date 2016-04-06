<?php

namespace MAT\SitioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BannerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rutaBanner', 'file' , array( 'data_class' => null ))
            ->add('rutaFooter', 'file' , array( 'data_class' => null ))
            ->add('rutaLogo', 'file' , array( 'data_class' => null ))
            ->add('rutaSplash', 'file' , array( 'data_class' => null ))
            ->add('fechaHora', 'datetime')
            ->add('visibleSplash')
            ->add('idUsuario')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\SitioBundle\Entity\Banner'
        ));
    }
}
