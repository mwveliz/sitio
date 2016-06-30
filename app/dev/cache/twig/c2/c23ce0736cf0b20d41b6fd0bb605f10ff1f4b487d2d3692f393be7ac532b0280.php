<?php

/* :noticiainterna:new.html.twig */
class __TwigTemplate_585145922ade29f762e88a9432be00d5efefd5fcd34f0308e1e49bf5d23fcbcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":noticiainterna:new.html.twig", 1);
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
        $__internal_86c95a689fefe93924445675eaef59a33b3da636058b8f18d1821d8c440a388b = $this->env->getExtension("native_profiler");
        $__internal_86c95a689fefe93924445675eaef59a33b3da636058b8f18d1821d8c440a388b->enter($__internal_86c95a689fefe93924445675eaef59a33b3da636058b8f18d1821d8c440a388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":noticiainterna:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86c95a689fefe93924445675eaef59a33b3da636058b8f18d1821d8c440a388b->leave($__internal_86c95a689fefe93924445675eaef59a33b3da636058b8f18d1821d8c440a388b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c9451a8928614095897cd4e8be4e30f1012ec6f5309bb4531db271759bed961 = $this->env->getExtension("native_profiler");
        $__internal_5c9451a8928614095897cd4e8be4e30f1012ec6f5309bb4531db271759bed961->enter($__internal_5c9451a8928614095897cd4e8be4e30f1012ec6f5309bb4531db271759bed961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Noticias Internas</h1>
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
        echo $this->env->getExtension('routing')->getPath("noticiainterna_index");
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
        
        $__internal_5c9451a8928614095897cd4e8be4e30f1012ec6f5309bb4531db271759bed961->leave($__internal_5c9451a8928614095897cd4e8be4e30f1012ec6f5309bb4531db271759bed961_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_817173b29be3f52a6fa8d75b285b432b6bdf00768b97e09ff8f075b67ea743ad = $this->env->getExtension("native_profiler");
        $__internal_817173b29be3f52a6fa8d75b285b432b6bdf00768b97e09ff8f075b67ea743ad->enter($__internal_817173b29be3f52a6fa8d75b285b432b6bdf00768b97e09ff8f075b67ea743ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_817173b29be3f52a6fa8d75b285b432b6bdf00768b97e09ff8f075b67ea743ad->leave($__internal_817173b29be3f52a6fa8d75b285b432b6bdf00768b97e09ff8f075b67ea743ad_prof);

    }

    public function getTemplateName()
    {
        return ":noticiainterna:new.html.twig";
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
/*     <h1>Creación de Noticias Internas</h1>*/
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
/*                     <a href="{{ path('noticiainterna_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
