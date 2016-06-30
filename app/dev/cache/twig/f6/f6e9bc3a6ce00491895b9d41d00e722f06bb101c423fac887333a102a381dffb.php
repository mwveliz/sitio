<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_86057dab1279be613de75b33d1163b67db48a37dd02aa365c968998e54b2e4eb extends Twig_Template
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
        $__internal_8a6c8c2929129b870b44e80e602c399f4a5f021f70a3600283df27a5efa6a733 = $this->env->getExtension("native_profiler");
        $__internal_8a6c8c2929129b870b44e80e602c399f4a5f021f70a3600283df27a5efa6a733->enter($__internal_8a6c8c2929129b870b44e80e602c399f4a5f021f70a3600283df27a5efa6a733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8a6c8c2929129b870b44e80e602c399f4a5f021f70a3600283df27a5efa6a733->leave($__internal_8a6c8c2929129b870b44e80e602c399f4a5f021f70a3600283df27a5efa6a733_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
