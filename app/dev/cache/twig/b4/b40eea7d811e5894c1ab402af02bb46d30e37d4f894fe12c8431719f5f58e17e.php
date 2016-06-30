<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_afd60e4457ab06e77dad541b42c01cc1947542080d613a2823a97e4a22e070ba extends Twig_Template
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
        $__internal_047765d7bdcbb1f6881b8ecc98ee53b955b4cb4a92ab2abdaf0e7bafcfb21364 = $this->env->getExtension("native_profiler");
        $__internal_047765d7bdcbb1f6881b8ecc98ee53b955b4cb4a92ab2abdaf0e7bafcfb21364->enter($__internal_047765d7bdcbb1f6881b8ecc98ee53b955b4cb4a92ab2abdaf0e7bafcfb21364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_047765d7bdcbb1f6881b8ecc98ee53b955b4cb4a92ab2abdaf0e7bafcfb21364->leave($__internal_047765d7bdcbb1f6881b8ecc98ee53b955b4cb4a92ab2abdaf0e7bafcfb21364_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
