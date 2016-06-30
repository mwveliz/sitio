<?php

/* :posicion:show.html.twig */
class __TwigTemplate_5f8aedf17095c7dea3bc48fa03100b5424369f72a19eb923539f977f7ef3bb52 extends Twig_Template
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
        $__internal_81302405fc8efeada1e5bc54d70c6b22718541f2c05bd50f0a9d7b033dbabc4c = $this->env->getExtension("native_profiler");
        $__internal_81302405fc8efeada1e5bc54d70c6b22718541f2c05bd50f0a9d7b033dbabc4c->enter($__internal_81302405fc8efeada1e5bc54d70c6b22718541f2c05bd50f0a9d7b033dbabc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":posicion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81302405fc8efeada1e5bc54d70c6b22718541f2c05bd50f0a9d7b033dbabc4c->leave($__internal_81302405fc8efeada1e5bc54d70c6b22718541f2c05bd50f0a9d7b033dbabc4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9756d413fbebe97e162f58504f7545103c79848dc75b213b687af392630825a7 = $this->env->getExtension("native_profiler");
        $__internal_9756d413fbebe97e162f58504f7545103c79848dc75b213b687af392630825a7->enter($__internal_9756d413fbebe97e162f58504f7545103c79848dc75b213b687af392630825a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posicion</h1>

    <table>
        <tbody>
            <tr>
                <th>Posnoticia</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "posNoticia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posnoticiainterna</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "posNoticiainterna", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posdestacado</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "posDestacado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posvideo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "posVideo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posestadistica</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "posEstadistica", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posenlace</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "posEnlace", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posicion_edit", array("id" => $this->getAttribute((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9756d413fbebe97e162f58504f7545103c79848dc75b213b687af392630825a7->leave($__internal_9756d413fbebe97e162f58504f7545103c79848dc75b213b687af392630825a7_prof);

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
        return array (  117 => 49,  112 => 47,  106 => 44,  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
