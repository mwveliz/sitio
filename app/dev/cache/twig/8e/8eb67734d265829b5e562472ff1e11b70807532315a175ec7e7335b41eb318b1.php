<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4deb9c4108a99329066b92e3a633b60137a1c3a7a86af351587b1aaec0757ae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50fd42098a81a22aaa50f2f42c70a8f8d4a619e9357319c4d278b156232f2545 = $this->env->getExtension("native_profiler");
        $__internal_50fd42098a81a22aaa50f2f42c70a8f8d4a619e9357319c4d278b156232f2545->enter($__internal_50fd42098a81a22aaa50f2f42c70a8f8d4a619e9357319c4d278b156232f2545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50fd42098a81a22aaa50f2f42c70a8f8d4a619e9357319c4d278b156232f2545->leave($__internal_50fd42098a81a22aaa50f2f42c70a8f8d4a619e9357319c4d278b156232f2545_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_400ce60ce16127e9fd6d7ab8e720b37b54760fe7908e75a9640d2ea474a7858e = $this->env->getExtension("native_profiler");
        $__internal_400ce60ce16127e9fd6d7ab8e720b37b54760fe7908e75a9640d2ea474a7858e->enter($__internal_400ce60ce16127e9fd6d7ab8e720b37b54760fe7908e75a9640d2ea474a7858e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_400ce60ce16127e9fd6d7ab8e720b37b54760fe7908e75a9640d2ea474a7858e->leave($__internal_400ce60ce16127e9fd6d7ab8e720b37b54760fe7908e75a9640d2ea474a7858e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2519cf2f8d933f0a42e140a05ef6e8cccd5cc7226cf54d055e4c3052fd4ea2d4 = $this->env->getExtension("native_profiler");
        $__internal_2519cf2f8d933f0a42e140a05ef6e8cccd5cc7226cf54d055e4c3052fd4ea2d4->enter($__internal_2519cf2f8d933f0a42e140a05ef6e8cccd5cc7226cf54d055e4c3052fd4ea2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2519cf2f8d933f0a42e140a05ef6e8cccd5cc7226cf54d055e4c3052fd4ea2d4->leave($__internal_2519cf2f8d933f0a42e140a05ef6e8cccd5cc7226cf54d055e4c3052fd4ea2d4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ead985319fb415fe8db94eff81f32f883f2a737d2e370a92d6b337e0d789ef93 = $this->env->getExtension("native_profiler");
        $__internal_ead985319fb415fe8db94eff81f32f883f2a737d2e370a92d6b337e0d789ef93->enter($__internal_ead985319fb415fe8db94eff81f32f883f2a737d2e370a92d6b337e0d789ef93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ead985319fb415fe8db94eff81f32f883f2a737d2e370a92d6b337e0d789ef93->leave($__internal_ead985319fb415fe8db94eff81f32f883f2a737d2e370a92d6b337e0d789ef93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
