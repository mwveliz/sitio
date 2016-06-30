<?php

/* :posicion:show.html.twig */
class __TwigTemplate_e7e12512fd8a30ab8adb1ff0b29848a5a9cd7341e0ee62a7a591e78cbc0a0e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":posicion:show.html.twig", 1);
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
        echo "    <h1>Posicion</h1>

    <table>
        <tbody>
            <tr>
                <th>Posnoticia</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "posNoticia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posnoticiainterna</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "posNoticiainterna", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posdestacado</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "posDestacado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posvideo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "posVideo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posestadistica</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "posEstadistica", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posenlace</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "posEnlace", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("posicion_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posicion_edit", array("id" => $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":posicion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  103 => 47,  97 => 44,  91 => 41,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Posicion</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Posnoticia</th>*/
/*                 <td>{{ posicion.posNoticia }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Posnoticiainterna</th>*/
/*                 <td>{{ posicion.posNoticiainterna }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Posdestacado</th>*/
/*                 <td>{{ posicion.posDestacado }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Posvideo</th>*/
/*                 <td>{{ posicion.posVideo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Posestadistica</th>*/
/*                 <td>{{ posicion.posEstadistica }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Posenlace</th>*/
/*                 <td>{{ posicion.posEnlace }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ posicion.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('posicion_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('posicion_edit', { 'id': posicion.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
