<?php

namespace MAT\SitioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PosicionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('posNoticia')
            ->add('posNoticiainterna')
            ->add('posDestacado')
            ->add('posVideo')
            ->add('posEstadistica')
            ->add('posEnlace')
            ->add('idNoticia')
            ->add('idNoticiainterna')
            ->add('idDestacado')
            ->add('idVideo')
            ->add('idEstadistica')
            ->add('idEnlace')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\SitioBundle\Entity\Posicion'
        ));
    }
}
