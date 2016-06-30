<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5277ba4155d68703cca99496b74fed43409da39107042345fabe702a28618a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_44f6a9828684a6a9c330c4b79fbd68feb3e0b9cc8a31b3dd9284df005f34e44a = $this->env->getExtension("native_profiler");
        $__internal_44f6a9828684a6a9c330c4b79fbd68feb3e0b9cc8a31b3dd9284df005f34e44a->enter($__internal_44f6a9828684a6a9c330c4b79fbd68feb3e0b9cc8a31b3dd9284df005f34e44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f6a9828684a6a9c330c4b79fbd68feb3e0b9cc8a31b3dd9284df005f34e44a->leave($__internal_44f6a9828684a6a9c330c4b79fbd68feb3e0b9cc8a31b3dd9284df005f34e44a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4081f703fcf3598a3a1bc9badf7d67617886152ebd841401288f81a40a1fa9fb = $this->env->getExtension("native_profiler");
        $__internal_4081f703fcf3598a3a1bc9badf7d67617886152ebd841401288f81a40a1fa9fb->enter($__internal_4081f703fcf3598a3a1bc9badf7d67617886152ebd841401288f81a40a1fa9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4081f703fcf3598a3a1bc9badf7d67617886152ebd841401288f81a40a1fa9fb->leave($__internal_4081f703fcf3598a3a1bc9badf7d67617886152ebd841401288f81a40a1fa9fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
