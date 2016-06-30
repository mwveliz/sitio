<?php

/* :documento:edit.html.twig */
class __TwigTemplate_220ddbdee6194415e6ccb5a85448095298f410c869905ac2c7013fb2408a3d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documento:edit.html.twig", 1);
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
        $__internal_f93a697389c64c412fac3ffae998552ad2d2917faa2ab2a82409999cb176f395 = $this->env->getExtension("native_profiler");
        $__internal_f93a697389c64c412fac3ffae998552ad2d2917faa2ab2a82409999cb176f395->enter($__internal_f93a697389c64c412fac3ffae998552ad2d2917faa2ab2a82409999cb176f395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documento:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93a697389c64c412fac3ffae998552ad2d2917faa2ab2a82409999cb176f395->leave($__internal_f93a697389c64c412fac3ffae998552ad2d2917faa2ab2a82409999cb176f395_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a394c3feba8ff0195ea7377da3870e16ba5fc0ae1647b6ff26245c9bee1763f7 = $this->env->getExtension("native_profiler");
        $__internal_a394c3feba8ff0195ea7377da3870e16ba5fc0ae1647b6ff26245c9bee1763f7->enter($__internal_a394c3feba8ff0195ea7377da3870e16ba5fc0ae1647b6ff26245c9bee1763f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("documento_index");
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
        
        $__internal_a394c3feba8ff0195ea7377da3870e16ba5fc0ae1647b6ff26245c9bee1763f7->leave($__internal_a394c3feba8ff0195ea7377da3870e16ba5fc0ae1647b6ff26245c9bee1763f7_prof);

    }

    public function getTemplateName()
    {
        return ":documento:edit.html.twig";
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
/*                     <a href="{{ path('documento_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
