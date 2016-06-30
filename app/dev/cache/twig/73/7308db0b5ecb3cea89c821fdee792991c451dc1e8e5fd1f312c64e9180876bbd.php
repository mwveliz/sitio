<?php

/* :banner:edit.html.twig */
class __TwigTemplate_771b23ae26d8bde55c8548e96f9f5181b8b44b2d2e2445ba4472a8da0aab5e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":banner:edit.html.twig", 1);
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
        $__internal_69945b31cdc4183ce96ddc2c20180be8804d9fa1e35484dc7f20d75fa317e3e6 = $this->env->getExtension("native_profiler");
        $__internal_69945b31cdc4183ce96ddc2c20180be8804d9fa1e35484dc7f20d75fa317e3e6->enter($__internal_69945b31cdc4183ce96ddc2c20180be8804d9fa1e35484dc7f20d75fa317e3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banner:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69945b31cdc4183ce96ddc2c20180be8804d9fa1e35484dc7f20d75fa317e3e6->leave($__internal_69945b31cdc4183ce96ddc2c20180be8804d9fa1e35484dc7f20d75fa317e3e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77fa8d53a5fe40bf47c0bfbde43aedd836b61a12f9d6284d413af3620c58315e = $this->env->getExtension("native_profiler");
        $__internal_77fa8d53a5fe40bf47c0bfbde43aedd836b61a12f9d6284d413af3620c58315e->enter($__internal_77fa8d53a5fe40bf47c0bfbde43aedd836b61a12f9d6284d413af3620c58315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("banner_index");
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
        
        $__internal_77fa8d53a5fe40bf47c0bfbde43aedd836b61a12f9d6284d413af3620c58315e->leave($__internal_77fa8d53a5fe40bf47c0bfbde43aedd836b61a12f9d6284d413af3620c58315e_prof);

    }

    public function getTemplateName()
    {
        return ":banner:edit.html.twig";
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
/*                     <a href="{{ path('banner_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
/* */
