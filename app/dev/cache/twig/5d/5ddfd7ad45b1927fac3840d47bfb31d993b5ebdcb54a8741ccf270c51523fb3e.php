<?php

/* :usuario:new.html.twig */
class __TwigTemplate_fe539987932ae1e54109a595262547dac629733bdfe1a34fd8763c45b629f2c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:new.html.twig", 1);
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
        $__internal_5b95f2fc47fa72bfd5bcfabf3810c99a29bccb3a757fd99217b15b28a7f63308 = $this->env->getExtension("native_profiler");
        $__internal_5b95f2fc47fa72bfd5bcfabf3810c99a29bccb3a757fd99217b15b28a7f63308->enter($__internal_5b95f2fc47fa72bfd5bcfabf3810c99a29bccb3a757fd99217b15b28a7f63308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b95f2fc47fa72bfd5bcfabf3810c99a29bccb3a757fd99217b15b28a7f63308->leave($__internal_5b95f2fc47fa72bfd5bcfabf3810c99a29bccb3a757fd99217b15b28a7f63308_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbf524e172f18edac05d29096d6b5d753912e5875fa08a24081b04529c1b861f = $this->env->getExtension("native_profiler");
        $__internal_bbf524e172f18edac05d29096d6b5d753912e5875fa08a24081b04529c1b861f->enter($__internal_bbf524e172f18edac05d29096d6b5d753912e5875fa08a24081b04529c1b861f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creacion de Usuario</h1>
<div class=\"row\">
        <div class=\"col-xs-6 col-sm-6   col-md-6 col-lg-6 \">
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
        echo $this->env->getExtension('routing')->getPath("usuario_index");
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
        
        $__internal_bbf524e172f18edac05d29096d6b5d753912e5875fa08a24081b04529c1b861f->leave($__internal_bbf524e172f18edac05d29096d6b5d753912e5875fa08a24081b04529c1b861f_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  60 => 15,  55 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creacion de Usuario</h1>*/
/* <div class="row">*/
/*         <div class="col-xs-6 col-sm-6   col-md-6 col-lg-6 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('usuario_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
/* */
