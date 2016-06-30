<?php

/* :reporteagricola:edit.html.twig */
class __TwigTemplate_24f0214941c8128d313ff2cc4f1e301729abb3f894f0e630d5a4dcf6cfb98d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reporteagricola:edit.html.twig", 1);
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
        $__internal_79f40a1a0b35d6a9f660aedfd364ad0eec72801a032185ad87f67d14e4aa2c51 = $this->env->getExtension("native_profiler");
        $__internal_79f40a1a0b35d6a9f660aedfd364ad0eec72801a032185ad87f67d14e4aa2c51->enter($__internal_79f40a1a0b35d6a9f660aedfd364ad0eec72801a032185ad87f67d14e4aa2c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reporteagricola:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f40a1a0b35d6a9f660aedfd364ad0eec72801a032185ad87f67d14e4aa2c51->leave($__internal_79f40a1a0b35d6a9f660aedfd364ad0eec72801a032185ad87f67d14e4aa2c51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_192a8b7035244f78a92ee78bfd611be204d0467fc3c75df2a14788dfaecc835d = $this->env->getExtension("native_profiler");
        $__internal_192a8b7035244f78a92ee78bfd611be204d0467fc3c75df2a14788dfaecc835d->enter($__internal_192a8b7035244f78a92ee78bfd611be204d0467fc3c75df2a14788dfaecc835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("reporteagricola_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
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
        
        $__internal_192a8b7035244f78a92ee78bfd611be204d0467fc3c75df2a14788dfaecc835d->leave($__internal_192a8b7035244f78a92ee78bfd611be204d0467fc3c75df2a14788dfaecc835d_prof);

    }

    public function getTemplateName()
    {
        return ":reporteagricola:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  59 => 14,  54 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(edit_form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(edit_form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('reporteagricola_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
/*                     <button type="submit" class="btn btn-success ">Enviar</button>*/
/*                     {{ form_end(edit_form) }}*/
/*                     <br>*/
/*                     <div class="form-actions">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- END SAMPLE FORM PORTLET-->*/
/*         </div>*/
/*     </div>*/
/*   */
/* {% endblock %}*/
/* */
