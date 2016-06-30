<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ff6be6fcac5292fa8262d10ba2f380634b92f2d01bf5291bcddf68a603039c6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_f02e6b333b8b82a7fd52e44208a2a22c39f7b4865dca8c7ec8fffff38f647417 = $this->env->getExtension("native_profiler");
        $__internal_f02e6b333b8b82a7fd52e44208a2a22c39f7b4865dca8c7ec8fffff38f647417->enter($__internal_f02e6b333b8b82a7fd52e44208a2a22c39f7b4865dca8c7ec8fffff38f647417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f02e6b333b8b82a7fd52e44208a2a22c39f7b4865dca8c7ec8fffff38f647417->leave($__internal_f02e6b333b8b82a7fd52e44208a2a22c39f7b4865dca8c7ec8fffff38f647417_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73d5bea7323f7191072e0e42e2ad5024308a02be52699c8cc4893dc9ed1873af = $this->env->getExtension("native_profiler");
        $__internal_73d5bea7323f7191072e0e42e2ad5024308a02be52699c8cc4893dc9ed1873af->enter($__internal_73d5bea7323f7191072e0e42e2ad5024308a02be52699c8cc4893dc9ed1873af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_73d5bea7323f7191072e0e42e2ad5024308a02be52699c8cc4893dc9ed1873af->leave($__internal_73d5bea7323f7191072e0e42e2ad5024308a02be52699c8cc4893dc9ed1873af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
