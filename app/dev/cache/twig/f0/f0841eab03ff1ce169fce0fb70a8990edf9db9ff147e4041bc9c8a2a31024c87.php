<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bcdc77426cc98ea3006b352c30063a4550f4a4b1d0bce74b6efd056fe82cbf7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1756c86558ebe3495c57609d16ab91977b3fd6010270dde06fdfac9becb8bdf7 = $this->env->getExtension("native_profiler");
        $__internal_1756c86558ebe3495c57609d16ab91977b3fd6010270dde06fdfac9becb8bdf7->enter($__internal_1756c86558ebe3495c57609d16ab91977b3fd6010270dde06fdfac9becb8bdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1756c86558ebe3495c57609d16ab91977b3fd6010270dde06fdfac9becb8bdf7->leave($__internal_1756c86558ebe3495c57609d16ab91977b3fd6010270dde06fdfac9becb8bdf7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_426125b0ca9101c6826e9db58bbde203447c152eed721c2fcbd00e04b30b2a62 = $this->env->getExtension("native_profiler");
        $__internal_426125b0ca9101c6826e9db58bbde203447c152eed721c2fcbd00e04b30b2a62->enter($__internal_426125b0ca9101c6826e9db58bbde203447c152eed721c2fcbd00e04b30b2a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_426125b0ca9101c6826e9db58bbde203447c152eed721c2fcbd00e04b30b2a62->leave($__internal_426125b0ca9101c6826e9db58bbde203447c152eed721c2fcbd00e04b30b2a62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
