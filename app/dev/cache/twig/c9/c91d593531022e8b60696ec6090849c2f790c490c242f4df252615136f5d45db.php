<?php

/* :informacion:new.html.twig */
class __TwigTemplate_c2ebe3378074c7d799222789643fc32e465a17e1770def92a75a6ed6cabbd85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":informacion:new.html.twig", 1);
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
        $__internal_2ec9630bf8969cac57b16627fd3d62ad3f6741a29be4d94fe2911ede63467f00 = $this->env->getExtension("native_profiler");
        $__internal_2ec9630bf8969cac57b16627fd3d62ad3f6741a29be4d94fe2911ede63467f00->enter($__internal_2ec9630bf8969cac57b16627fd3d62ad3f6741a29be4d94fe2911ede63467f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":informacion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec9630bf8969cac57b16627fd3d62ad3f6741a29be4d94fe2911ede63467f00->leave($__internal_2ec9630bf8969cac57b16627fd3d62ad3f6741a29be4d94fe2911ede63467f00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11fc3f1fc6358d68337d0649c703ec1efbadab713ae3df70418b31b4944357ea = $this->env->getExtension("native_profiler");
        $__internal_11fc3f1fc6358d68337d0649c703ec1efbadab713ae3df70418b31b4944357ea->enter($__internal_11fc3f1fc6358d68337d0649c703ec1efbadab713ae3df70418b31b4944357ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de Informacion </h1>
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
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("informacion_index");
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
        
        $__internal_11fc3f1fc6358d68337d0649c703ec1efbadab713ae3df70418b31b4944357ea->leave($__internal_11fc3f1fc6358d68337d0649c703ec1efbadab713ae3df70418b31b4944357ea_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_a16f7cc52a301f58daf3111a962ace09a2db74eda54e0322fba75797b2deb852 = $this->env->getExtension("native_profiler");
        $__internal_a16f7cc52a301f58daf3111a962ace09a2db74eda54e0322fba75797b2deb852->enter($__internal_a16f7cc52a301f58daf3111a962ace09a2db74eda54e0322fba75797b2deb852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_a16f7cc52a301f58daf3111a962ace09a2db74eda54e0322fba75797b2deb852->leave($__internal_a16f7cc52a301f58daf3111a962ace09a2db74eda54e0322fba75797b2deb852_prof);

    }

    public function getTemplateName()
    {
        return ":informacion:new.html.twig";
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
/*     <h1>Creación de Registro de Informacion </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('informacion_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
