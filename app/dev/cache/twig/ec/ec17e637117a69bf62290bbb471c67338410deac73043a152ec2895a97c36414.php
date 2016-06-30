<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0df2e9ec1ca60156ab4124a995399e70031c6c4d612b68e0ad5dc2d7781a2230 extends Twig_Template
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
        $__internal_0cfe46c14e82cd343357480e02b7f709c2b6f3ea403029831f80dc4014f03c90 = $this->env->getExtension("native_profiler");
        $__internal_0cfe46c14e82cd343357480e02b7f709c2b6f3ea403029831f80dc4014f03c90->enter($__internal_0cfe46c14e82cd343357480e02b7f709c2b6f3ea403029831f80dc4014f03c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0cfe46c14e82cd343357480e02b7f709c2b6f3ea403029831f80dc4014f03c90->leave($__internal_0cfe46c14e82cd343357480e02b7f709c2b6f3ea403029831f80dc4014f03c90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
