<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a830e208bc7b835ef5d63848fb6225102de150eb5d59efd8029e977ec22c9b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5278bb44dec20a0a05238026510df46210a7bd468a33a0991cb589c49a9bedcc = $this->env->getExtension("native_profiler");
        $__internal_5278bb44dec20a0a05238026510df46210a7bd468a33a0991cb589c49a9bedcc->enter($__internal_5278bb44dec20a0a05238026510df46210a7bd468a33a0991cb589c49a9bedcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5278bb44dec20a0a05238026510df46210a7bd468a33a0991cb589c49a9bedcc->leave($__internal_5278bb44dec20a0a05238026510df46210a7bd468a33a0991cb589c49a9bedcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_782fbd465ccc6157d72d0c2e42fd9baa251c5e8a0011963339820ec0f6faa3f5 = $this->env->getExtension("native_profiler");
        $__internal_782fbd465ccc6157d72d0c2e42fd9baa251c5e8a0011963339820ec0f6faa3f5->enter($__internal_782fbd465ccc6157d72d0c2e42fd9baa251c5e8a0011963339820ec0f6faa3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_782fbd465ccc6157d72d0c2e42fd9baa251c5e8a0011963339820ec0f6faa3f5->leave($__internal_782fbd465ccc6157d72d0c2e42fd9baa251c5e8a0011963339820ec0f6faa3f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
