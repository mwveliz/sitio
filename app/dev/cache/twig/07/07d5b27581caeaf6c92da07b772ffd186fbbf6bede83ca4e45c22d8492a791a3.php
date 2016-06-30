<?php

/* :video:new.html.twig */
class __TwigTemplate_28999a8f02a31ac9f737a7604322d0b6eb39d6b85cb3909081fa2c98767f7c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":video:new.html.twig", 2);
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
        $__internal_f3ad836400e007ec5c99cbd1297c789d811a76a8acd31523b512022ab0aedca2 = $this->env->getExtension("native_profiler");
        $__internal_f3ad836400e007ec5c99cbd1297c789d811a76a8acd31523b512022ab0aedca2->enter($__internal_f3ad836400e007ec5c99cbd1297c789d811a76a8acd31523b512022ab0aedca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":video:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ad836400e007ec5c99cbd1297c789d811a76a8acd31523b512022ab0aedca2->leave($__internal_f3ad836400e007ec5c99cbd1297c789d811a76a8acd31523b512022ab0aedca2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_473d76c2c898eefb30642652e0fab45ceda6873a38639e3443b32b6b4ad19cdd = $this->env->getExtension("native_profiler");
        $__internal_473d76c2c898eefb30642652e0fab45ceda6873a38639e3443b32b6b4ad19cdd->enter($__internal_473d76c2c898eefb30642652e0fab45ceda6873a38639e3443b32b6b4ad19cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Creación de Videos </h1>
<div class=\"row\">
        <div class=\"col-xs-6 col-sm-6\tcol-md-6 col-lg-6 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("video_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 18
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
        
        $__internal_473d76c2c898eefb30642652e0fab45ceda6873a38639e3443b32b6b4ad19cdd->leave($__internal_473d76c2c898eefb30642652e0fab45ceda6873a38639e3443b32b6b4ad19cdd_prof);

    }

    // line 30
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_bbb5ea159327d3f92e93e25d1ecb8cd0ec6a0589da2a3eba510a018439832114 = $this->env->getExtension("native_profiler");
        $__internal_bbb5ea159327d3f92e93e25d1ecb8cd0ec6a0589da2a3eba510a018439832114->enter($__internal_bbb5ea159327d3f92e93e25d1ecb8cd0ec6a0589da2a3eba510a018439832114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_bbb5ea159327d3f92e93e25d1ecb8cd0ec6a0589da2a3eba510a018439832114->leave($__internal_bbb5ea159327d3f92e93e25d1ecb8cd0ec6a0589da2a3eba510a018439832114_prof);

    }

    public function getTemplateName()
    {
        return ":video:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  66 => 18,  61 => 16,  56 => 14,  51 => 13,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creación de Videos </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-6 col-sm-6	col-md-6 col-lg-6 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('video_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
