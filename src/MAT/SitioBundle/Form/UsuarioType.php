<?php

namespace MAT\SitioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni')
            ->add('nacionalidad')
            ->add('nombre')
            ->add('apellido')
            ->add('telefono')
            ->add('telefonoSecundario')
            ->add('username')
            ->add('usernameCanonical')
            ->add('email')
            ->add('emailCanonical')
            ->add('enabled')
            ->add('salt')
            ->add('password')
            ->add('lastLogin', 'datetime')
            ->add('locked')
            ->add('expired')
            ->add('expiresAt', 'datetime')
            ->add('confirmationToken')
            ->add('passwordRequestedAt', 'datetime')
            ->add('roles')
            ->add('credentialsExpired')
            ->add('credentialsExpireAt', 'datetime')
            ->add('group')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\SitioBundle\Entity\Usuario'
        ));
    }
}
