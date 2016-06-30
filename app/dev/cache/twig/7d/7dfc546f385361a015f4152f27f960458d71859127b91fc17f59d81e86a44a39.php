<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_713844c142ca79dcfef05edf1046c02f8a4649b0edcaa61b637580a23fa02ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7314e93e42ab92b8c5c94e7f1c896a9187d934247da4c20d5f4573c87231d505 = $this->env->getExtension("native_profiler");
        $__internal_7314e93e42ab92b8c5c94e7f1c896a9187d934247da4c20d5f4573c87231d505->enter($__internal_7314e93e42ab92b8c5c94e7f1c896a9187d934247da4c20d5f4573c87231d505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7314e93e42ab92b8c5c94e7f1c896a9187d934247da4c20d5f4573c87231d505->leave($__internal_7314e93e42ab92b8c5c94e7f1c896a9187d934247da4c20d5f4573c87231d505_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db6797b5ffc9658ba35089710582760046e3a1702434ebf011d16454d4e7f8f2 = $this->env->getExtension("native_profiler");
        $__internal_db6797b5ffc9658ba35089710582760046e3a1702434ebf011d16454d4e7f8f2->enter($__internal_db6797b5ffc9658ba35089710582760046e3a1702434ebf011d16454d4e7f8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_db6797b5ffc9658ba35089710582760046e3a1702434ebf011d16454d4e7f8f2->leave($__internal_db6797b5ffc9658ba35089710582760046e3a1702434ebf011d16454d4e7f8f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
