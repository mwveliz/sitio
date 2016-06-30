<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c74e9d7e61f15a5bc7ee2c49852bebb559a8744f24b6d848194c218cc7b35eff extends Twig_Template
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
        // line 1
        echo "Registrar Grupo
";
        // line 3
        echo "
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("avn_siretrabundle_group");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
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
        return array (  36 => 7,  31 => 5,  25 => 4,  22 => 3,  19 => 1,);
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
