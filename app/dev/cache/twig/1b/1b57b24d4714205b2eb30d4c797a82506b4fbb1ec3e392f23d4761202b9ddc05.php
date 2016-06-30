<?php

/* :usuario:edit.html.twig */
class __TwigTemplate_fc1573f25c824940a116049dd71d5657a564506653750aec9ae148e23631cfd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:edit.html.twig", 1);
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
        $__internal_405b1d10e8be16d3a1f76e06ae43126e0270d27a34f48f27cbe3483c60d4f752 = $this->env->getExtension("native_profiler");
        $__internal_405b1d10e8be16d3a1f76e06ae43126e0270d27a34f48f27cbe3483c60d4f752->enter($__internal_405b1d10e8be16d3a1f76e06ae43126e0270d27a34f48f27cbe3483c60d4f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_405b1d10e8be16d3a1f76e06ae43126e0270d27a34f48f27cbe3483c60d4f752->leave($__internal_405b1d10e8be16d3a1f76e06ae43126e0270d27a34f48f27cbe3483c60d4f752_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c72913e2da75a10c8bebb38455eba040c941ee0c369146e68955caf82d11f08 = $this->env->getExtension("native_profiler");
        $__internal_7c72913e2da75a10c8bebb38455eba040c941ee0c369146e68955caf82d11f08->enter($__internal_7c72913e2da75a10c8bebb38455eba040c941ee0c369146e68955caf82d11f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Usuario </h1>

     <div class=\"row\">
        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    <button type=\"button\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 18
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
        
        $__internal_7c72913e2da75a10c8bebb38455eba040c941ee0c369146e68955caf82d11f08->leave($__internal_7c72913e2da75a10c8bebb38455eba040c941ee0c369146e68955caf82d11f08_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  61 => 16,  56 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Editar Usuario </h1>*/
/* */
/*      <div class="row">*/
/*         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(edit_form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(edit_form) }}*/
/*                     <button type="button" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('usuario_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
/* {% endblock %}*/
/* */
/* */
