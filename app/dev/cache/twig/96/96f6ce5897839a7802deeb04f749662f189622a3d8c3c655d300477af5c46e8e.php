<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3d593f0c57e5c86f9f29c59c29e8bd4d1c5833882658bc46780dcd70abaf4a55 extends Twig_Template
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
        $__internal_d887a08443b2af441558fc82c7e32319e7ce76f92376743bfd7beda0b5e07dd1 = $this->env->getExtension("native_profiler");
        $__internal_d887a08443b2af441558fc82c7e32319e7ce76f92376743bfd7beda0b5e07dd1->enter($__internal_d887a08443b2af441558fc82c7e32319e7ce76f92376743bfd7beda0b5e07dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        // line 1
        echo "Registrar Grupo
";
        // line 3
        echo "
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("avn_siretrabundle_group");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_d887a08443b2af441558fc82c7e32319e7ce76f92376743bfd7beda0b5e07dd1->leave($__internal_d887a08443b2af441558fc82c7e32319e7ce76f92376743bfd7beda0b5e07dd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  28 => 4,  25 => 3,  22 => 1,);
    }
}
/* Registrar Grupo*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('avn_siretrabundle_group') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
