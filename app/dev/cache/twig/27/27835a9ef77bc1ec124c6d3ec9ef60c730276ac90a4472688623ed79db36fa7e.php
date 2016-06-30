<?php

/* :fosgroup:edit.html.twig */
class __TwigTemplate_1e820fdc813cceecae8896824ccd12c0eb578255b02f3862eae295f07d48a87e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fosgroup:edit.html.twig", 1);
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
        $__internal_a0400a083ac6077db4cdf64bff97ba49f33fbeeb1c63cab89b72df24423ea424 = $this->env->getExtension("native_profiler");
        $__internal_a0400a083ac6077db4cdf64bff97ba49f33fbeeb1c63cab89b72df24423ea424->enter($__internal_a0400a083ac6077db4cdf64bff97ba49f33fbeeb1c63cab89b72df24423ea424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fosgroup:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0400a083ac6077db4cdf64bff97ba49f33fbeeb1c63cab89b72df24423ea424->leave($__internal_a0400a083ac6077db4cdf64bff97ba49f33fbeeb1c63cab89b72df24423ea424_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b04a4c840a9246d574e00856c179aabc7a44849130545ef4ba0d034a635c4f8c = $this->env->getExtension("native_profiler");
        $__internal_b04a4c840a9246d574e00856c179aabc7a44849130545ef4ba0d034a635c4f8c->enter($__internal_b04a4c840a9246d574e00856c179aabc7a44849130545ef4ba0d034a635c4f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>FosGroup edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fosgroup_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b04a4c840a9246d574e00856c179aabc7a44849130545ef4ba0d034a635c4f8c->leave($__internal_b04a4c840a9246d574e00856c179aabc7a44849130545ef4ba0d034a635c4f8c_prof);

    }

    public function getTemplateName()
    {
        return ":fosgroup:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>FosGroup edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('fosgroup_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
