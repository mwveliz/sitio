<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_491cca80d5085de1eaeb483abcec9767af9aee5f535a5600c799b663eed7a9b3 extends Twig_Template
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
        $__internal_cf688aacd3d7f4bb8cf9c18219c6f5b38d5d7b0b451804a287a0e75a86bd9f33 = $this->env->getExtension("native_profiler");
        $__internal_cf688aacd3d7f4bb8cf9c18219c6f5b38d5d7b0b451804a287a0e75a86bd9f33->enter($__internal_cf688aacd3d7f4bb8cf9c18219c6f5b38d5d7b0b451804a287a0e75a86bd9f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cf688aacd3d7f4bb8cf9c18219c6f5b38d5d7b0b451804a287a0e75a86bd9f33->leave($__internal_cf688aacd3d7f4bb8cf9c18219c6f5b38d5d7b0b451804a287a0e75a86bd9f33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
