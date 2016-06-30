<?php

/* :imagen:edit.html.twig */
class __TwigTemplate_20dbbf14883d28d220397182225f145c58fc1603856d6371de347364fb4077ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":imagen:edit.html.twig", 1);
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
        $__internal_45864b04d5fe96f55da74749d88c1fcfce1f75cc4baaaac5f2a33163668a29bd = $this->env->getExtension("native_profiler");
        $__internal_45864b04d5fe96f55da74749d88c1fcfce1f75cc4baaaac5f2a33163668a29bd->enter($__internal_45864b04d5fe96f55da74749d88c1fcfce1f75cc4baaaac5f2a33163668a29bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":imagen:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45864b04d5fe96f55da74749d88c1fcfce1f75cc4baaaac5f2a33163668a29bd->leave($__internal_45864b04d5fe96f55da74749d88c1fcfce1f75cc4baaaac5f2a33163668a29bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ea1c39ba44168726500d745bdde57ffb034dc84d8ff8d0ba68724a6948d2c0a = $this->env->getExtension("native_profiler");
        $__internal_7ea1c39ba44168726500d745bdde57ffb034dc84d8ff8d0ba68724a6948d2c0a->enter($__internal_7ea1c39ba44168726500d745bdde57ffb034dc84d8ff8d0ba68724a6948d2c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <button type=\"button\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("imagen_index");
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
        
        $__internal_7ea1c39ba44168726500d745bdde57ffb034dc84d8ff8d0ba68724a6948d2c0a->leave($__internal_7ea1c39ba44168726500d745bdde57ffb034dc84d8ff8d0ba68724a6948d2c0a_prof);

    }

    public function getTemplateName()
    {
        return ":imagen:edit.html.twig";
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
/*                     <button type="button" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('imagen_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
