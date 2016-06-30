<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_377c0330c3c3dd7b6fca479dd1aa94817296445b6a9e332cc5e70f76df3886a0 extends Twig_Template
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
        $__internal_dbb54702f6b4d820a62a6387e06c329081953c85a4244981d35650b60598f588 = $this->env->getExtension("native_profiler");
        $__internal_dbb54702f6b4d820a62a6387e06c329081953c85a4244981d35650b60598f588->enter($__internal_dbb54702f6b4d820a62a6387e06c329081953c85a4244981d35650b60598f588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dbb54702f6b4d820a62a6387e06c329081953c85a4244981d35650b60598f588->leave($__internal_dbb54702f6b4d820a62a6387e06c329081953c85a4244981d35650b60598f588_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
