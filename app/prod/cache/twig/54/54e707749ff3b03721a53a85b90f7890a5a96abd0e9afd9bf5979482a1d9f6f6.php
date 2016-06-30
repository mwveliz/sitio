<?php

/* :documento:new.html.twig */
class __TwigTemplate_9a7a5f8df4839cf510b19bc15d24813dba63e337288f27ff59ef4c01fdeba0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documento:new.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Creación de Registro de Documentos</h1>
<div class=\"row\">
        <div class=\"col-xs-6 col-sm-6\tcol-md-6 col-lg-6 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("documento_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
    }

    public function getTemplateName()
    {
        return ":documento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  57 => 17,  52 => 15,  47 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creación de Registro de Documentos</h1>*/
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
/*                     <a href="{{ path('documento_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
