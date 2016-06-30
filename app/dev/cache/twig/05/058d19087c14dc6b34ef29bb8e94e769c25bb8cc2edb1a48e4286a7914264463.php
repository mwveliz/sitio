<?php

/* :reporteagricola:new.html.twig */
class __TwigTemplate_b8b83a2f3e43d2e0231e865168a8286b442da2e5a0ee0bd70e94af56336f7d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reporteagricola:new.html.twig", 1);
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
        $__internal_f388ff83d50b978f7cdf4f0101cb11b4cb57ee7e0c77f7a62db7d3e657dc0b9d = $this->env->getExtension("native_profiler");
        $__internal_f388ff83d50b978f7cdf4f0101cb11b4cb57ee7e0c77f7a62db7d3e657dc0b9d->enter($__internal_f388ff83d50b978f7cdf4f0101cb11b4cb57ee7e0c77f7a62db7d3e657dc0b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reporteagricola:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f388ff83d50b978f7cdf4f0101cb11b4cb57ee7e0c77f7a62db7d3e657dc0b9d->leave($__internal_f388ff83d50b978f7cdf4f0101cb11b4cb57ee7e0c77f7a62db7d3e657dc0b9d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74fa50c2ccdb2d974715529bce4f77273d791eac75a1503226c52630bdbc93a1 = $this->env->getExtension("native_profiler");
        $__internal_74fa50c2ccdb2d974715529bce4f77273d791eac75a1503226c52630bdbc93a1->enter($__internal_74fa50c2ccdb2d974715529bce4f77273d791eac75a1503226c52630bdbc93a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Reporte Clima </h1>
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
                    <br>
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("reporteagricola_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 18
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
        
        $__internal_74fa50c2ccdb2d974715529bce4f77273d791eac75a1503226c52630bdbc93a1->leave($__internal_74fa50c2ccdb2d974715529bce4f77273d791eac75a1503226c52630bdbc93a1_prof);

    }

    // line 30
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_963a63af368f45514da741d6e7966559466e42cd1cf1cf642fa4aa100420870b = $this->env->getExtension("native_profiler");
        $__internal_963a63af368f45514da741d6e7966559466e42cd1cf1cf642fa4aa100420870b->enter($__internal_963a63af368f45514da741d6e7966559466e42cd1cf1cf642fa4aa100420870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_963a63af368f45514da741d6e7966559466e42cd1cf1cf642fa4aa100420870b->leave($__internal_963a63af368f45514da741d6e7966559466e42cd1cf1cf642fa4aa100420870b_prof);

    }

    public function getTemplateName()
    {
        return ":reporteagricola:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  67 => 18,  62 => 16,  56 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creación de Reporte Clima </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <br>*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('reporteagricola_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
/* */
