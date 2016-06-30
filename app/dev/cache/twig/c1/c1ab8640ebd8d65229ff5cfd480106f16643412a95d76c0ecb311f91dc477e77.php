<?php

/* :estadistica:edit.html.twig */
class __TwigTemplate_5fcbbbe549cc28825eb967df25d6fcee5c9c8e1875f4b4ebfe808ff6f201374a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estadistica:edit.html.twig", 1);
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
        $__internal_3c11fc0e7292739acfeb873551653a9b272c96e8de598fccce96aaceec0d4471 = $this->env->getExtension("native_profiler");
        $__internal_3c11fc0e7292739acfeb873551653a9b272c96e8de598fccce96aaceec0d4471->enter($__internal_3c11fc0e7292739acfeb873551653a9b272c96e8de598fccce96aaceec0d4471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadistica:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c11fc0e7292739acfeb873551653a9b272c96e8de598fccce96aaceec0d4471->leave($__internal_3c11fc0e7292739acfeb873551653a9b272c96e8de598fccce96aaceec0d4471_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d39bffeb1cf1929a6c645ba9f9953b8f39bbde3716c673b7d82aa5a68c0bdfdc = $this->env->getExtension("native_profiler");
        $__internal_d39bffeb1cf1929a6c645ba9f9953b8f39bbde3716c673b7d82aa5a68c0bdfdc->enter($__internal_d39bffeb1cf1929a6c645ba9f9953b8f39bbde3716c673b7d82aa5a68c0bdfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("estadistica_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                    <br>
                    <div class=\"form-actions\">
                    </div>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
  
";
        
        $__internal_d39bffeb1cf1929a6c645ba9f9953b8f39bbde3716c673b7d82aa5a68c0bdfdc->leave($__internal_d39bffeb1cf1929a6c645ba9f9953b8f39bbde3716c673b7d82aa5a68c0bdfdc_prof);

    }

    public function getTemplateName()
    {
        return ":estadistica:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  59 => 14,  54 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(edit_form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(edit_form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('estadistica_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
/*                     <button type="submit" class="btn btn-success ">Enviar</button>*/
/*                     {{ form_end(edit_form) }}*/
/*                     <br>*/
/*                     <div class="form-actions">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- END SAMPLE FORM PORTLET-->*/
/*         </div>*/
/*     </div>*/
/*   */
/* {% endblock %}*/
/* */
