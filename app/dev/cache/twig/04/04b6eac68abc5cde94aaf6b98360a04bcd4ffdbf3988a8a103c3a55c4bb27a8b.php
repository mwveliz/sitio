<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_cb34440a31fe287b19825d6e426c49a6552c525f3ce81f6af4ecc58e97bbfe41 extends Twig_Template
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
        $__internal_90c2387e4e2dd71df89237146411d825220a53f55fc48f7a9c3db60c1066a8aa = $this->env->getExtension("native_profiler");
        $__internal_90c2387e4e2dd71df89237146411d825220a53f55fc48f7a9c3db60c1066a8aa->enter($__internal_90c2387e4e2dd71df89237146411d825220a53f55fc48f7a9c3db60c1066a8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_90c2387e4e2dd71df89237146411d825220a53f55fc48f7a9c3db60c1066a8aa->leave($__internal_90c2387e4e2dd71df89237146411d825220a53f55fc48f7a9c3db60c1066a8aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
