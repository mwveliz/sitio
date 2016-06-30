<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_21209aff05f1440abf69f10b1bef393e392a646050fb65c8a8a3be182f0952af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d612455fcd7454df2379847a26c17963b8aed6fde1d08c187ad9d822e7bc9601 = $this->env->getExtension("native_profiler");
        $__internal_d612455fcd7454df2379847a26c17963b8aed6fde1d08c187ad9d822e7bc9601->enter($__internal_d612455fcd7454df2379847a26c17963b8aed6fde1d08c187ad9d822e7bc9601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d612455fcd7454df2379847a26c17963b8aed6fde1d08c187ad9d822e7bc9601->leave($__internal_d612455fcd7454df2379847a26c17963b8aed6fde1d08c187ad9d822e7bc9601_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f87ff7a103e06e4d2ce42fd5eaf5026e52ca20a1f505ef12a98546cc5b54a3e7 = $this->env->getExtension("native_profiler");
        $__internal_f87ff7a103e06e4d2ce42fd5eaf5026e52ca20a1f505ef12a98546cc5b54a3e7->enter($__internal_f87ff7a103e06e4d2ce42fd5eaf5026e52ca20a1f505ef12a98546cc5b54a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f87ff7a103e06e4d2ce42fd5eaf5026e52ca20a1f505ef12a98546cc5b54a3e7->leave($__internal_f87ff7a103e06e4d2ce42fd5eaf5026e52ca20a1f505ef12a98546cc5b54a3e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
