<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_72bf0bc9f0671b5a3751d8096052c34e3135b2cb417f49a90ba121a3becf7268 extends Twig_Template
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
        $__internal_dde5cbdfdf319c1efbab4355564adafe8826159808642cfef5c20d3b92b29864 = $this->env->getExtension("native_profiler");
        $__internal_dde5cbdfdf319c1efbab4355564adafe8826159808642cfef5c20d3b92b29864->enter($__internal_dde5cbdfdf319c1efbab4355564adafe8826159808642cfef5c20d3b92b29864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo "Grupo";
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</p>
    <ul>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 7
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["rol"], "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
</div>
";
        
        $__internal_dde5cbdfdf319c1efbab4355564adafe8826159808642cfef5c20d3b92b29864->leave($__internal_dde5cbdfdf319c1efbab4355564adafe8826159808642cfef5c20d3b92b29864_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  37 => 7,  33 => 6,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'Grupo' }}: {{ name }}</p>*/
/*     <ul>*/
/*     {% for rol in roles %}*/
/*         <li>{{ rol }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
