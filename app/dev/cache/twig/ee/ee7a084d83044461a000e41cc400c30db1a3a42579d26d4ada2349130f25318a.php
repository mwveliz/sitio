<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7a8038abc1ce1f7881fb5f442549f08345403bc330160a7495a8de3ac34e26f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5733e679006d5ab66f4c0f36be4517a1ded95e44c5756604a704a325d8015d = $this->env->getExtension("native_profiler");
        $__internal_8d5733e679006d5ab66f4c0f36be4517a1ded95e44c5756604a704a325d8015d->enter($__internal_8d5733e679006d5ab66f4c0f36be4517a1ded95e44c5756604a704a325d8015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d5733e679006d5ab66f4c0f36be4517a1ded95e44c5756604a704a325d8015d->leave($__internal_8d5733e679006d5ab66f4c0f36be4517a1ded95e44c5756604a704a325d8015d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d7bddd50ad0c1b795c690862d36cdcb74505058b7eb08a78cac34413f5234bb = $this->env->getExtension("native_profiler");
        $__internal_6d7bddd50ad0c1b795c690862d36cdcb74505058b7eb08a78cac34413f5234bb->enter($__internal_6d7bddd50ad0c1b795c690862d36cdcb74505058b7eb08a78cac34413f5234bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_6d7bddd50ad0c1b795c690862d36cdcb74505058b7eb08a78cac34413f5234bb->leave($__internal_6d7bddd50ad0c1b795c690862d36cdcb74505058b7eb08a78cac34413f5234bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
