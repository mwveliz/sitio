<?php

/* :ente:new.html.twig */
class __TwigTemplate_8b8dc43ddd9fed163b959d46fef9b5906f119f43369523e049bbd32a416740f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ente:new.html.twig", 1);
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
        $__internal_d745e87f7d687c6483f0560e3f1b265f653a6fa1b018786724e4dac47751a9a2 = $this->env->getExtension("native_profiler");
        $__internal_d745e87f7d687c6483f0560e3f1b265f653a6fa1b018786724e4dac47751a9a2->enter($__internal_d745e87f7d687c6483f0560e3f1b265f653a6fa1b018786724e4dac47751a9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d745e87f7d687c6483f0560e3f1b265f653a6fa1b018786724e4dac47751a9a2->leave($__internal_d745e87f7d687c6483f0560e3f1b265f653a6fa1b018786724e4dac47751a9a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f54c01f53706143c53710ef1b8eb41c97aaf8a782b72bcb8f8d662d6a819536 = $this->env->getExtension("native_profiler");
        $__internal_2f54c01f53706143c53710ef1b8eb41c97aaf8a782b72bcb8f8d662d6a819536->enter($__internal_2f54c01f53706143c53710ef1b8eb41c97aaf8a782b72bcb8f8d662d6a819536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de Entes</h1>
<div class=\"row\">
        <div class=\"col-xs-6 col-sm-6\tcol-md-6 col-lg-6 \">
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
        echo $this->env->getExtension('routing')->getPath("ente_index");
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
        
        $__internal_2f54c01f53706143c53710ef1b8eb41c97aaf8a782b72bcb8f8d662d6a819536->leave($__internal_2f54c01f53706143c53710ef1b8eb41c97aaf8a782b72bcb8f8d662d6a819536_prof);

    }

    // line 30
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_1391d465872c8e0e7623f7adb7f6879aca146d8543d6243e9ef8737cf391df66 = $this->env->getExtension("native_profiler");
        $__internal_1391d465872c8e0e7623f7adb7f6879aca146d8543d6243e9ef8737cf391df66->enter($__internal_1391d465872c8e0e7623f7adb7f6879aca146d8543d6243e9ef8737cf391df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_1391d465872c8e0e7623f7adb7f6879aca146d8543d6243e9ef8737cf391df66->leave($__internal_1391d465872c8e0e7623f7adb7f6879aca146d8543d6243e9ef8737cf391df66_prof);

    }

    public function getTemplateName()
    {
        return ":ente:new.html.twig";
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
/*     <h1>Creación de Registro de Entes</h1>*/
/* <div class="row">*/
/*         <div class="col-xs-6 col-sm-6	col-md-6 col-lg-6 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <br>*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('ente_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
