<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6ccde7331d151fa5dd03dd54ca3f553c20d15a81467f3e74e169dd0466922e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be3f511536bf61aa8db23245d243a1813f69af5b06808ac4cfd9cc1a60489617 = $this->env->getExtension("native_profiler");
        $__internal_be3f511536bf61aa8db23245d243a1813f69af5b06808ac4cfd9cc1a60489617->enter($__internal_be3f511536bf61aa8db23245d243a1813f69af5b06808ac4cfd9cc1a60489617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be3f511536bf61aa8db23245d243a1813f69af5b06808ac4cfd9cc1a60489617->leave($__internal_be3f511536bf61aa8db23245d243a1813f69af5b06808ac4cfd9cc1a60489617_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
