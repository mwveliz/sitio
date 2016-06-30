<?php

/* :fosgroup:show.html.twig */
class __TwigTemplate_ce90851db87517c00e1062ebeb5b0c56cad8f8722e922ec7f57faf48559516ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fosgroup:show.html.twig", 1);
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
        $__internal_60719492cde3b676562e226b33537463b3bb979379bbbf1463a252fa9d50e7b9 = $this->env->getExtension("native_profiler");
        $__internal_60719492cde3b676562e226b33537463b3bb979379bbbf1463a252fa9d50e7b9->enter($__internal_60719492cde3b676562e226b33537463b3bb979379bbbf1463a252fa9d50e7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fosgroup:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60719492cde3b676562e226b33537463b3bb979379bbbf1463a252fa9d50e7b9->leave($__internal_60719492cde3b676562e226b33537463b3bb979379bbbf1463a252fa9d50e7b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b121a9c081580aa67d23c5f0b0f967e3be3568eff910642b2807042231ce85a1 = $this->env->getExtension("native_profiler");
        $__internal_b121a9c081580aa67d23c5f0b0f967e3be3568eff910642b2807042231ce85a1->enter($__internal_b121a9c081580aa67d23c5f0b0f967e3be3568eff910642b2807042231ce85a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>FosGroup</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fosGroup"]) ? $context["fosGroup"] : $this->getContext($context, "fosGroup")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["fosGroup"]) ? $context["fosGroup"] : $this->getContext($context, "fosGroup")), "roles", array())) {
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["fosGroup"]) ? $context["fosGroup"] : $this->getContext($context, "fosGroup")), "roles", array()), ", "), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fosGroup"]) ? $context["fosGroup"] : $this->getContext($context, "fosGroup")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fosgroup_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosgroup_edit", array("id" => $this->getAttribute((isset($context["fosGroup"]) ? $context["fosGroup"] : $this->getContext($context, "fosGroup")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b121a9c081580aa67d23c5f0b0f967e3be3568eff910642b2807042231ce85a1->leave($__internal_b121a9c081580aa67d23c5f0b0f967e3be3568eff910642b2807042231ce85a1_prof);

    }

    public function getTemplateName()
    {
        return ":fosgroup:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>FosGroup</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ fosGroup.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Roles</th>*/
/*                 <td>{% if fosGroup.roles %}{{ fosGroup.roles|join(', ') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ fosGroup.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('fosgroup_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fosgroup_edit', { 'id': fosGroup.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
