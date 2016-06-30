<?php

/* :posicion:old_index.html.twig */
class __TwigTemplate_5474f21fd147ac0f7ab5a27e7fed6b4b0fb42acb65e87a396f7a039fc742521d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["posicions"]) ? $context["posicions"] : null));
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
        return array (  114 => 46,  107 => 41,  95 => 35,  89 => 32,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
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
