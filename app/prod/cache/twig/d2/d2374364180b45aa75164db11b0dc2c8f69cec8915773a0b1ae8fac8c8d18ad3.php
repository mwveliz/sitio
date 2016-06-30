<?php

/* :video:new.html.twig */
class __TwigTemplate_52ed621aa2db811d8fff67edd9df9e2dc4632eb375ba3e76ae7938ebb6c23b0b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("video_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 18
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

    // line 30
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
        return ":video:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  57 => 18,  52 => 16,  47 => 14,  42 => 13,  32 => 5,  29 => 4,  11 => 2,);
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
