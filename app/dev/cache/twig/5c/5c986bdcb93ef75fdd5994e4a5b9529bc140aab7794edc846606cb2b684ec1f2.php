<?php

/* :documento:new.html.twig */
class __TwigTemplate_11ef232a934e1b9c28e0c2aa2a17515585230a6bbc82fa4c864853ee566680a0 extends Twig_Template
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
        $__internal_b03bc2de8e9a9e8b6ab657dbd1f517e8bf690b91da36e7d248cced6b5bd8a219 = $this->env->getExtension("native_profiler");
        $__internal_b03bc2de8e9a9e8b6ab657dbd1f517e8bf690b91da36e7d248cced6b5bd8a219->enter($__internal_b03bc2de8e9a9e8b6ab657dbd1f517e8bf690b91da36e7d248cced6b5bd8a219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documento:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b03bc2de8e9a9e8b6ab657dbd1f517e8bf690b91da36e7d248cced6b5bd8a219->leave($__internal_b03bc2de8e9a9e8b6ab657dbd1f517e8bf690b91da36e7d248cced6b5bd8a219_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0bf7ac9852f318c22c56dba3ee625b8af2c24af22cfeea4a1ce6007cbaec8f4 = $this->env->getExtension("native_profiler");
        $__internal_d0bf7ac9852f318c22c56dba3ee625b8af2c24af22cfeea4a1ce6007cbaec8f4->enter($__internal_d0bf7ac9852f318c22c56dba3ee625b8af2c24af22cfeea4a1ce6007cbaec8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("documento_index");
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
        
        $__internal_d0bf7ac9852f318c22c56dba3ee625b8af2c24af22cfeea4a1ce6007cbaec8f4->leave($__internal_d0bf7ac9852f318c22c56dba3ee625b8af2c24af22cfeea4a1ce6007cbaec8f4_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_94a17138e9c80084092d6eb1702f6bc862064104e25f3c89d286b21a4ba7b448 = $this->env->getExtension("native_profiler");
        $__internal_94a17138e9c80084092d6eb1702f6bc862064104e25f3c89d286b21a4ba7b448->enter($__internal_94a17138e9c80084092d6eb1702f6bc862064104e25f3c89d286b21a4ba7b448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_94a17138e9c80084092d6eb1702f6bc862064104e25f3c89d286b21a4ba7b448->leave($__internal_94a17138e9c80084092d6eb1702f6bc862064104e25f3c89d286b21a4ba7b448_prof);

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
        return array (  85 => 29,  66 => 17,  61 => 15,  56 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
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
