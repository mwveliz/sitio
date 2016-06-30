<?php

/* :fosgroup:index.html.twig */
class __TwigTemplate_3dc1d9617e35fc951dc19b827be71cee6763b887e5bddbb38cfbeadde30b6530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fosgroup:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_001caec8779caaf29095bff75053a78657d493fc489c8438c065cc35fcc805da = $this->env->getExtension("native_profiler");
        $__internal_001caec8779caaf29095bff75053a78657d493fc489c8438c065cc35fcc805da->enter($__internal_001caec8779caaf29095bff75053a78657d493fc489c8438c065cc35fcc805da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fosgroup:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001caec8779caaf29095bff75053a78657d493fc489c8438c065cc35fcc805da->leave($__internal_001caec8779caaf29095bff75053a78657d493fc489c8438c065cc35fcc805da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a048617526dd2bc950c41119753bec42bca1ce40442ec6aa2e9a5c3c22e18b7e = $this->env->getExtension("native_profiler");
        $__internal_a048617526dd2bc950c41119753bec42bca1ce40442ec6aa2e9a5c3c22e18b7e->enter($__internal_a048617526dd2bc950c41119753bec42bca1ce40442ec6aa2e9a5c3c22e18b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>FosGroup list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Roles</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fosGroups"]) ? $context["fosGroups"] : $this->getContext($context, "fosGroups")));
        foreach ($context['_seq'] as $context["_key"] => $context["fosGroup"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosgroup_show", array("id" => $this->getAttribute($context["fosGroup"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosGroup"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["fosGroup"], "roles", array())) {
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["fosGroup"], "roles", array()), ", "), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosGroup"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosgroup_show", array("id" => $this->getAttribute($context["fosGroup"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosgroup_edit", array("id" => $this->getAttribute($context["fosGroup"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fosGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fosgroup_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a048617526dd2bc950c41119753bec42bca1ce40442ec6aa2e9a5c3c22e18b7e->leave($__internal_a048617526dd2bc950c41119753bec42bca1ce40442ec6aa2e9a5c3c22e18b7e_prof);

    }

    public function getTemplateName()
    {
        return ":fosgroup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>FosGroup list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Roles</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for fosGroup in fosGroups %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('fosgroup_show', { 'id': fosGroup.id }) }}">{{ fosGroup.name }}</a></td>*/
/*                 <td>{% if fosGroup.roles %}{{ fosGroup.roles|join(', ') }}{% endif %}</td>*/
/*                 <td>{{ fosGroup.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('fosgroup_show', { 'id': fosGroup.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('fosgroup_edit', { 'id': fosGroup.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('fosgroup_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
