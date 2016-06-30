<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0d4c3027723709063a7fe9bb6c8edd9d37e5200f0d247ef84864e69e023a8a36 extends Twig_Template
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
        $__internal_2feef887a0846d0b9e29a9529e6f96629920428d8ce16a2393236d1897b8182c = $this->env->getExtension("native_profiler");
        $__internal_2feef887a0846d0b9e29a9529e6f96629920428d8ce16a2393236d1897b8182c->enter($__internal_2feef887a0846d0b9e29a9529e6f96629920428d8ce16a2393236d1897b8182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2feef887a0846d0b9e29a9529e6f96629920428d8ce16a2393236d1897b8182c->leave($__internal_2feef887a0846d0b9e29a9529e6f96629920428d8ce16a2393236d1897b8182c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
