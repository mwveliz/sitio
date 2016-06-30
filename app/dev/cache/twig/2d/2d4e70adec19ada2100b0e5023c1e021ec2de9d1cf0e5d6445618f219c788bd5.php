<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ff8847f1211097b7f57366ccd6910d5408f38d3d592091c5c1daf5f7232b4b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_062f039ca61fea6215147e5753e2ce88803a7ef24444c5eb13a060b742f0b403 = $this->env->getExtension("native_profiler");
        $__internal_062f039ca61fea6215147e5753e2ce88803a7ef24444c5eb13a060b742f0b403->enter($__internal_062f039ca61fea6215147e5753e2ce88803a7ef24444c5eb13a060b742f0b403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_062f039ca61fea6215147e5753e2ce88803a7ef24444c5eb13a060b742f0b403->leave($__internal_062f039ca61fea6215147e5753e2ce88803a7ef24444c5eb13a060b742f0b403_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23e76d438f2882cd56a4bac1ff2734bc39717c47fdd80fc0c91e78a2d225c91e = $this->env->getExtension("native_profiler");
        $__internal_23e76d438f2882cd56a4bac1ff2734bc39717c47fdd80fc0c91e78a2d225c91e->enter($__internal_23e76d438f2882cd56a4bac1ff2734bc39717c47fdd80fc0c91e78a2d225c91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_23e76d438f2882cd56a4bac1ff2734bc39717c47fdd80fc0c91e78a2d225c91e->leave($__internal_23e76d438f2882cd56a4bac1ff2734bc39717c47fdd80fc0c91e78a2d225c91e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
