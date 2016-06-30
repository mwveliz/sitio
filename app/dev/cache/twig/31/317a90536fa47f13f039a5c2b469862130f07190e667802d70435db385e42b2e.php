<?php

/* :tipodocumento:new.html.twig */
class __TwigTemplate_bf399294cb8d71f3b90ce5816f985701b14313fa3cd81842e396138a98c9c666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tipodocumento:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts_extra' => array($this, 'block_javascripts_extra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f794dbaeeee80cf8dfaa19159604b5b26ef89bf28a8d6ae101a269587b84908 = $this->env->getExtension("native_profiler");
        $__internal_6f794dbaeeee80cf8dfaa19159604b5b26ef89bf28a8d6ae101a269587b84908->enter($__internal_6f794dbaeeee80cf8dfaa19159604b5b26ef89bf28a8d6ae101a269587b84908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipodocumento:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f794dbaeeee80cf8dfaa19159604b5b26ef89bf28a8d6ae101a269587b84908->leave($__internal_6f794dbaeeee80cf8dfaa19159604b5b26ef89bf28a8d6ae101a269587b84908_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da70b0f34963f2f20dd49036daa8e8e1c50a8c3fbfd3e90a92e0dd8958c2e46b = $this->env->getExtension("native_profiler");
        $__internal_da70b0f34963f2f20dd49036daa8e8e1c50a8c3fbfd3e90a92e0dd8958c2e46b->enter($__internal_da70b0f34963f2f20dd49036daa8e8e1c50a8c3fbfd3e90a92e0dd8958c2e46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de tipos de Documentos </h1>
<div class=\"row\">
        <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <button type=\"button\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("tipodocumento_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_da70b0f34963f2f20dd49036daa8e8e1c50a8c3fbfd3e90a92e0dd8958c2e46b->leave($__internal_da70b0f34963f2f20dd49036daa8e8e1c50a8c3fbfd3e90a92e0dd8958c2e46b_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_c83ac91dff1d73bb123726fafb34e7472a63de96253fcd562ca84e42eb882f91 = $this->env->getExtension("native_profiler");
        $__internal_c83ac91dff1d73bb123726fafb34e7472a63de96253fcd562ca84e42eb882f91->enter($__internal_c83ac91dff1d73bb123726fafb34e7472a63de96253fcd562ca84e42eb882f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_c83ac91dff1d73bb123726fafb34e7472a63de96253fcd562ca84e42eb882f91->leave($__internal_c83ac91dff1d73bb123726fafb34e7472a63de96253fcd562ca84e42eb882f91_prof);

    }

    public function getTemplateName()
    {
        return ":tipodocumento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  66 => 17,  61 => 15,  56 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creación de Registro de tipos de Documentos </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button type="button" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('tipodocumento_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
/*                     <button type="submit" class="btn btn-success ">Enviar</button>*/
/*                     {{ form_end(form) }}*/
/*                     <br>*/
/*                     <div class="form-actions">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- END SAMPLE FORM PORTLET-->*/
/*         </div>*/
/*  */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* {% block javascripts_extra %} */
/* <script>*/
/*     $('document').ready(function(){*/
/*      */
/*     });*/
/*     */
/*     */
/*     */
/*     </script>*/
/* {% endblock %}*/
/* */
