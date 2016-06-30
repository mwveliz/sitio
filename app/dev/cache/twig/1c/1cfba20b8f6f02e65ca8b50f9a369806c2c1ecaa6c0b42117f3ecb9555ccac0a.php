<?php

/* :destacado:new.html.twig */
class __TwigTemplate_67956bec9fcd38a79633dc3c64f3db1f1aea1a949593bd78114e141437933919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":destacado:new.html.twig", 1);
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
        $__internal_d9fd0ca0d48f45f9e74d282c25f2f0aa215b1d58738110b0fe602951de4195ab = $this->env->getExtension("native_profiler");
        $__internal_d9fd0ca0d48f45f9e74d282c25f2f0aa215b1d58738110b0fe602951de4195ab->enter($__internal_d9fd0ca0d48f45f9e74d282c25f2f0aa215b1d58738110b0fe602951de4195ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":destacado:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9fd0ca0d48f45f9e74d282c25f2f0aa215b1d58738110b0fe602951de4195ab->leave($__internal_d9fd0ca0d48f45f9e74d282c25f2f0aa215b1d58738110b0fe602951de4195ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de40a69a79ecc4b077c2d32079d12e83d98f628d773e7166c83bf2048268741b = $this->env->getExtension("native_profiler");
        $__internal_de40a69a79ecc4b077c2d32079d12e83d98f628d773e7166c83bf2048268741b->enter($__internal_de40a69a79ecc4b077c2d32079d12e83d98f628d773e7166c83bf2048268741b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de Destacado </h1>
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
        echo $this->env->getExtension('routing')->getPath("destacado_index");
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
        
        $__internal_de40a69a79ecc4b077c2d32079d12e83d98f628d773e7166c83bf2048268741b->leave($__internal_de40a69a79ecc4b077c2d32079d12e83d98f628d773e7166c83bf2048268741b_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_ec1765dcc72bbbce2060d49ed14f81b7830f8f9e73a653823f8fc70d0b5b043a = $this->env->getExtension("native_profiler");
        $__internal_ec1765dcc72bbbce2060d49ed14f81b7830f8f9e73a653823f8fc70d0b5b043a->enter($__internal_ec1765dcc72bbbce2060d49ed14f81b7830f8f9e73a653823f8fc70d0b5b043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_ec1765dcc72bbbce2060d49ed14f81b7830f8f9e73a653823f8fc70d0b5b043a->leave($__internal_ec1765dcc72bbbce2060d49ed14f81b7830f8f9e73a653823f8fc70d0b5b043a_prof);

    }

    public function getTemplateName()
    {
        return ":destacado:new.html.twig";
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
/*     <h1>Creación de Registro de Destacado </h1>*/
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
/*                     <a href="{{ path('destacado_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
