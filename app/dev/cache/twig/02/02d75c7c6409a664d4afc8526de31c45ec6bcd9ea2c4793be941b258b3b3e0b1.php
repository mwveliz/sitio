<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ddc24ab026c1977e3af1cf53678cfd38f9fa18696f410215e89d94ad9897a94a extends Twig_Template
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
        $__internal_09f51217429ae5e35d95d7c7a84a5fab6afc14e3310db5dc9858ef251a8166a4 = $this->env->getExtension("native_profiler");
        $__internal_09f51217429ae5e35d95d7c7a84a5fab6afc14e3310db5dc9858ef251a8166a4->enter($__internal_09f51217429ae5e35d95d7c7a84a5fab6afc14e3310db5dc9858ef251a8166a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        // line 1
        echo "Lsitado de Grupos
<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 5
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("name" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>
";
        
        $__internal_09f51217429ae5e35d95d7c7a84a5fab6afc14e3310db5dc9858ef251a8166a4->leave($__internal_09f51217429ae5e35d95d7c7a84a5fab6afc14e3310db5dc9858ef251a8166a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* Lsitado de Grupos*/
/* <div class="fos_user_group_list">*/
/*     <ul>*/
/*     {% for group in groups %}*/
/*         <li><a href="{{ path('group_show', {'name': group.getName()} ) }}">{{ group.getName() }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */