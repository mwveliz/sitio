<?php

/* :posicion:old_index.html.twig */
class __TwigTemplate_887715a9f8d13d6a390e9aa190840a9ce8f40e81f00aa85a0ee5404aa0a23442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":posicion:old_index.html.twig", 1);
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
        $__internal_6de101f0cd60dd0dd985daa485e46c245ce5b7da08412b582fcb81e0b33f9d17 = $this->env->getExtension("native_profiler");
        $__internal_6de101f0cd60dd0dd985daa485e46c245ce5b7da08412b582fcb81e0b33f9d17->enter($__internal_6de101f0cd60dd0dd985daa485e46c245ce5b7da08412b582fcb81e0b33f9d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":posicion:old_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de101f0cd60dd0dd985daa485e46c245ce5b7da08412b582fcb81e0b33f9d17->leave($__internal_6de101f0cd60dd0dd985daa485e46c245ce5b7da08412b582fcb81e0b33f9d17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_595d14db1a41fc83fb69a2899b7d92e3c22bd244e170d08f6afdedefbb553d03 = $this->env->getExtension("native_profiler");
        $__internal_595d14db1a41fc83fb69a2899b7d92e3c22bd244e170d08f6afdedefbb553d03->enter($__internal_595d14db1a41fc83fb69a2899b7d92e3c22bd244e170d08f6afdedefbb553d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posicion list</h1>

    <table>
        <thead>
            <tr>
                <th>Posnoticia</th>
                <th>Posnoticiainterna</th>
                <th>Posdestacado</th>
                <th>Posvideo</th>
                <th>Posestadistica</th>
                <th>Posenlace</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posicions"]) ? $context["posicions"] : $this->getContext($context, "posicions")));
        foreach ($context['_seq'] as $context["_key"] => $context["posicion"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posicion_show", array("id" => $this->getAttribute($context["posicion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["posicion"], "posNoticia", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["posicion"], "posNoticiainterna", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["posicion"], "posDestacado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["posicion"], "posVideo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["posicion"], "posEstadistica", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["posicion"], "posEnlace", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["posicion"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posicion_show", array("id" => $this->getAttribute($context["posicion"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posicion_edit", array("id" => $this->getAttribute($context["posicion"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("posicion_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_595d14db1a41fc83fb69a2899b7d92e3c22bd244e170d08f6afdedefbb553d03->leave($__internal_595d14db1a41fc83fb69a2899b7d92e3c22bd244e170d08f6afdedefbb553d03_prof);

    }

    public function getTemplateName()
    {
        return ":posicion:old_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 41,  104 => 35,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Posicion list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Posnoticia</th>*/
/*                 <th>Posnoticiainterna</th>*/
/*                 <th>Posdestacado</th>*/
/*                 <th>Posvideo</th>*/
/*                 <th>Posestadistica</th>*/
/*                 <th>Posenlace</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for posicion in posicions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('posicion_show', { 'id': posicion.id }) }}">{{ posicion.posNoticia }}</a></td>*/
/*                 <td>{{ posicion.posNoticiainterna }}</td>*/
/*                 <td>{{ posicion.posDestacado }}</td>*/
/*                 <td>{{ posicion.posVideo }}</td>*/
/*                 <td>{{ posicion.posEstadistica }}</td>*/
/*                 <td>{{ posicion.posEnlace }}</td>*/
/*                 <td>{{ posicion.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('posicion_show', { 'id': posicion.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('posicion_edit', { 'id': posicion.id }) }}">edit</a>*/
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
/*             <a href="{{ path('posicion_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
