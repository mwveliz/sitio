<?php

/* :estadistica:new.html.twig */
class __TwigTemplate_99885281d68ee5d13e448a9cfa4d0b648d3a1bcd5513226a17904d5e4d327874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estadistica:new.html.twig", 1);
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
        $__internal_5c9ecacff0b4908d8b0cc6e64a58b9b8dac84db0e3254820e559abcdd09854ba = $this->env->getExtension("native_profiler");
        $__internal_5c9ecacff0b4908d8b0cc6e64a58b9b8dac84db0e3254820e559abcdd09854ba->enter($__internal_5c9ecacff0b4908d8b0cc6e64a58b9b8dac84db0e3254820e559abcdd09854ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadistica:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9ecacff0b4908d8b0cc6e64a58b9b8dac84db0e3254820e559abcdd09854ba->leave($__internal_5c9ecacff0b4908d8b0cc6e64a58b9b8dac84db0e3254820e559abcdd09854ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49bb77b569e91d757930d2fc9c89a8a28162b7ad402f86ba39c28d12a75096de = $this->env->getExtension("native_profiler");
        $__internal_49bb77b569e91d757930d2fc9c89a8a28162b7ad402f86ba39c28d12a75096de->enter($__internal_49bb77b569e91d757930d2fc9c89a8a28162b7ad402f86ba39c28d12a75096de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de Estadisticas </h1>
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
                    <br>
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("estadistica_index");
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
        
        $__internal_49bb77b569e91d757930d2fc9c89a8a28162b7ad402f86ba39c28d12a75096de->leave($__internal_49bb77b569e91d757930d2fc9c89a8a28162b7ad402f86ba39c28d12a75096de_prof);

    }

    // line 30
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_d87646251f67e38ea3b2f3bb61bd6e114e5d5d9efa5d96120c557668cc51c9a5 = $this->env->getExtension("native_profiler");
        $__internal_d87646251f67e38ea3b2f3bb61bd6e114e5d5d9efa5d96120c557668cc51c9a5->enter($__internal_d87646251f67e38ea3b2f3bb61bd6e114e5d5d9efa5d96120c557668cc51c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_d87646251f67e38ea3b2f3bb61bd6e114e5d5d9efa5d96120c557668cc51c9a5->leave($__internal_d87646251f67e38ea3b2f3bb61bd6e114e5d5d9efa5d96120c557668cc51c9a5_prof);

    }

    public function getTemplateName()
    {
        return ":estadistica:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  67 => 18,  62 => 16,  56 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creación de Registro de Estadisticas </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <br>*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('estadistica_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
