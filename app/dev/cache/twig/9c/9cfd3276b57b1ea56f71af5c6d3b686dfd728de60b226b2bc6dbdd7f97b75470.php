<?php

/* :tipodocumento:edit.html.twig */
class __TwigTemplate_d259b18b5dbab4855bddcd737a3a684f04173ab1cea82f7fddefd584bedccb52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tipodocumento:edit.html.twig", 1);
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
        $__internal_87573a3c38357462db57afb55bf95fb1a35ba0ab296c4b759700b332754ba490 = $this->env->getExtension("native_profiler");
        $__internal_87573a3c38357462db57afb55bf95fb1a35ba0ab296c4b759700b332754ba490->enter($__internal_87573a3c38357462db57afb55bf95fb1a35ba0ab296c4b759700b332754ba490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipodocumento:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87573a3c38357462db57afb55bf95fb1a35ba0ab296c4b759700b332754ba490->leave($__internal_87573a3c38357462db57afb55bf95fb1a35ba0ab296c4b759700b332754ba490_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_158a1edb0b2a2be5c5736a2b69866dd8bd895082727e6daf705db2875f9c4edd = $this->env->getExtension("native_profiler");
        $__internal_158a1edb0b2a2be5c5736a2b69866dd8bd895082727e6daf705db2875f9c4edd->enter($__internal_158a1edb0b2a2be5c5736a2b69866dd8bd895082727e6daf705db2875f9c4edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("tipodocumento_index");
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
        
        $__internal_158a1edb0b2a2be5c5736a2b69866dd8bd895082727e6daf705db2875f9c4edd->leave($__internal_158a1edb0b2a2be5c5736a2b69866dd8bd895082727e6daf705db2875f9c4edd_prof);

    }

    public function getTemplateName()
    {
        return ":tipodocumento:edit.html.twig";
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
/*                     <a href="{{ path('tipodocumento_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
