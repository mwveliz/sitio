<?php

/* :fosgroup:new.html.twig */
class __TwigTemplate_2d82b1425daab798cf28a264435250685db6fc9c8d4411efb674f7b867516185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fosgroup:new.html.twig", 1);
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
        $__internal_e949d245b49c7bcfa1df635530ccc936e2a240a25cce04bafe89ce45e630dbc5 = $this->env->getExtension("native_profiler");
        $__internal_e949d245b49c7bcfa1df635530ccc936e2a240a25cce04bafe89ce45e630dbc5->enter($__internal_e949d245b49c7bcfa1df635530ccc936e2a240a25cce04bafe89ce45e630dbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fosgroup:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e949d245b49c7bcfa1df635530ccc936e2a240a25cce04bafe89ce45e630dbc5->leave($__internal_e949d245b49c7bcfa1df635530ccc936e2a240a25cce04bafe89ce45e630dbc5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29ef6e3fe8d26513da92ae6f634710c6c05934e65c2336ee26a63ba85aac91e3 = $this->env->getExtension("native_profiler");
        $__internal_29ef6e3fe8d26513da92ae6f634710c6c05934e65c2336ee26a63ba85aac91e3->enter($__internal_29ef6e3fe8d26513da92ae6f634710c6c05934e65c2336ee26a63ba85aac91e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>FosGroup creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fosgroup_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_29ef6e3fe8d26513da92ae6f634710c6c05934e65c2336ee26a63ba85aac91e3->leave($__internal_29ef6e3fe8d26513da92ae6f634710c6c05934e65c2336ee26a63ba85aac91e3_prof);

    }

    public function getTemplateName()
    {
        return ":fosgroup:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>FosGroup creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('fosgroup_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
