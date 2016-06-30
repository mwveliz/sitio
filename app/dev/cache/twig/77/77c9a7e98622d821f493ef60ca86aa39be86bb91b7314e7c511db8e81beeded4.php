<?php

/* :noticia:edit.html.twig */
class __TwigTemplate_666b6ff2ca5cd28fdc651232c4b37edad8d58099e65ed1278c382bd0c2de73b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":noticia:edit.html.twig", 1);
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
        $__internal_bbd3c39a1140e3db8e39175ea1828a0d767dd1c1d10820a325f3132b4d92aa1c = $this->env->getExtension("native_profiler");
        $__internal_bbd3c39a1140e3db8e39175ea1828a0d767dd1c1d10820a325f3132b4d92aa1c->enter($__internal_bbd3c39a1140e3db8e39175ea1828a0d767dd1c1d10820a325f3132b4d92aa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":noticia:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbd3c39a1140e3db8e39175ea1828a0d767dd1c1d10820a325f3132b4d92aa1c->leave($__internal_bbd3c39a1140e3db8e39175ea1828a0d767dd1c1d10820a325f3132b4d92aa1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_703467696bdcaadc1342cd2155ebc6112d3b60730400692a323fc8ba7bfbca8a = $this->env->getExtension("native_profiler");
        $__internal_703467696bdcaadc1342cd2155ebc6112d3b60730400692a323fc8ba7bfbca8a->enter($__internal_703467696bdcaadc1342cd2155ebc6112d3b60730400692a323fc8ba7bfbca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("noticia_index");
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
        
        $__internal_703467696bdcaadc1342cd2155ebc6112d3b60730400692a323fc8ba7bfbca8a->leave($__internal_703467696bdcaadc1342cd2155ebc6112d3b60730400692a323fc8ba7bfbca8a_prof);

    }

    public function getTemplateName()
    {
        return ":noticia:edit.html.twig";
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
/*                     <a href="{{ path('noticia_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
