<?php

/* :posicion:new.html.twig */
class __TwigTemplate_c3dfa3c35b7e762a68f69889857f29700682a299380db04fead2b403986aabaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":posicion:new.html.twig", 1);
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
        $__internal_b5750e3380b703ff3eb495e8d6963d265b2c429f509a8112dd2f41643a70d6f4 = $this->env->getExtension("native_profiler");
        $__internal_b5750e3380b703ff3eb495e8d6963d265b2c429f509a8112dd2f41643a70d6f4->enter($__internal_b5750e3380b703ff3eb495e8d6963d265b2c429f509a8112dd2f41643a70d6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":posicion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5750e3380b703ff3eb495e8d6963d265b2c429f509a8112dd2f41643a70d6f4->leave($__internal_b5750e3380b703ff3eb495e8d6963d265b2c429f509a8112dd2f41643a70d6f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94d1903bc6897de43076d26e0d303396515e4aafbbff2bad50f70f114e46058a = $this->env->getExtension("native_profiler");
        $__internal_94d1903bc6897de43076d26e0d303396515e4aafbbff2bad50f70f114e46058a->enter($__internal_94d1903bc6897de43076d26e0d303396515e4aafbbff2bad50f70f114e46058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posicion creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("posicion_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_94d1903bc6897de43076d26e0d303396515e4aafbbff2bad50f70f114e46058a->leave($__internal_94d1903bc6897de43076d26e0d303396515e4aafbbff2bad50f70f114e46058a_prof);

    }

    public function getTemplateName()
    {
        return ":posicion:new.html.twig";
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
/*     <h1>Posicion creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('posicion_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
