<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9feb6252a900a39b59de2899335ee8e7de02cbc937dc23b9df8f6287594c8a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_30e39071200065d51eda13e5a36894928030e9e7cd2ff1d87d4b671081d8293e = $this->env->getExtension("native_profiler");
        $__internal_30e39071200065d51eda13e5a36894928030e9e7cd2ff1d87d4b671081d8293e->enter($__internal_30e39071200065d51eda13e5a36894928030e9e7cd2ff1d87d4b671081d8293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e39071200065d51eda13e5a36894928030e9e7cd2ff1d87d4b671081d8293e->leave($__internal_30e39071200065d51eda13e5a36894928030e9e7cd2ff1d87d4b671081d8293e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1989f45cef73d541ec02f4508703235abeea552eda8805c21e8ce941dca664fc = $this->env->getExtension("native_profiler");
        $__internal_1989f45cef73d541ec02f4508703235abeea552eda8805c21e8ce941dca664fc->enter($__internal_1989f45cef73d541ec02f4508703235abeea552eda8805c21e8ce941dca664fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1989f45cef73d541ec02f4508703235abeea552eda8805c21e8ce941dca664fc->leave($__internal_1989f45cef73d541ec02f4508703235abeea552eda8805c21e8ce941dca664fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
