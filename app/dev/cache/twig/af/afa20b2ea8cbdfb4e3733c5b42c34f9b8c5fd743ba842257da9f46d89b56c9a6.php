<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_17c40415c067279f88f60d7b09e2179897c3b1f9a2c1a9a582aa855583ceeac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_08635f4185adb4c5b2f4daf0d45402494136001eaa86add5b95509eef7248f2b = $this->env->getExtension("native_profiler");
        $__internal_08635f4185adb4c5b2f4daf0d45402494136001eaa86add5b95509eef7248f2b->enter($__internal_08635f4185adb4c5b2f4daf0d45402494136001eaa86add5b95509eef7248f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08635f4185adb4c5b2f4daf0d45402494136001eaa86add5b95509eef7248f2b->leave($__internal_08635f4185adb4c5b2f4daf0d45402494136001eaa86add5b95509eef7248f2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcb14114e6829ce00ac72296682b1da45addc2c2446bdce1d67c97fb719da347 = $this->env->getExtension("native_profiler");
        $__internal_bcb14114e6829ce00ac72296682b1da45addc2c2446bdce1d67c97fb719da347->enter($__internal_bcb14114e6829ce00ac72296682b1da45addc2c2446bdce1d67c97fb719da347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bcb14114e6829ce00ac72296682b1da45addc2c2446bdce1d67c97fb719da347->leave($__internal_bcb14114e6829ce00ac72296682b1da45addc2c2446bdce1d67c97fb719da347_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
