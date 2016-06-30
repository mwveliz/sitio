<?php

/* :noticiainterna:edit.html.twig */
class __TwigTemplate_ec2d40d35f34890cd5cde6169313ba0a39f3592be3fc27ed3bcd9b40060dee65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":noticiainterna:edit.html.twig", 1);
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
        $__internal_c47c5e596e2b6463731f58462153187808952c0b7207e35884491455f2776a94 = $this->env->getExtension("native_profiler");
        $__internal_c47c5e596e2b6463731f58462153187808952c0b7207e35884491455f2776a94->enter($__internal_c47c5e596e2b6463731f58462153187808952c0b7207e35884491455f2776a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":noticiainterna:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c47c5e596e2b6463731f58462153187808952c0b7207e35884491455f2776a94->leave($__internal_c47c5e596e2b6463731f58462153187808952c0b7207e35884491455f2776a94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2185fb28edeeaba7f5aec8edcbef688f1a9518d9eef5a1e9fc8117612d7618 = $this->env->getExtension("native_profiler");
        $__internal_1b2185fb28edeeaba7f5aec8edcbef688f1a9518d9eef5a1e9fc8117612d7618->enter($__internal_1b2185fb28edeeaba7f5aec8edcbef688f1a9518d9eef5a1e9fc8117612d7618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("noticiainterna_index");
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
        
        $__internal_1b2185fb28edeeaba7f5aec8edcbef688f1a9518d9eef5a1e9fc8117612d7618->leave($__internal_1b2185fb28edeeaba7f5aec8edcbef688f1a9518d9eef5a1e9fc8117612d7618_prof);

    }

    public function getTemplateName()
    {
        return ":noticiainterna:edit.html.twig";
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
/*                     <a href="{{ path('noticiainterna_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
