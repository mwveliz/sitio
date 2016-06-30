<?php

/* :banner:new.html.twig */
class __TwigTemplate_15b0f758fc850f4440a532e8f6658cc9666453a2f51ac8e312dd5508ce01a13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":banner:new.html.twig", 3);
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
        $__internal_16f4c9f926463836a357049bf116b36b57abeb63d605f938fc8eb2a0ab37742a = $this->env->getExtension("native_profiler");
        $__internal_16f4c9f926463836a357049bf116b36b57abeb63d605f938fc8eb2a0ab37742a->enter($__internal_16f4c9f926463836a357049bf116b36b57abeb63d605f938fc8eb2a0ab37742a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banner:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f4c9f926463836a357049bf116b36b57abeb63d605f938fc8eb2a0ab37742a->leave($__internal_16f4c9f926463836a357049bf116b36b57abeb63d605f938fc8eb2a0ab37742a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0153ceefa021ef1d06c682d2c08d2919c2ccb9856c66e244f67d3cc506c6809b = $this->env->getExtension("native_profiler");
        $__internal_0153ceefa021ef1d06c682d2c08d2919c2ccb9856c66e244f67d3cc506c6809b->enter($__internal_0153ceefa021ef1d06c682d2c08d2919c2ccb9856c66e244f67d3cc506c6809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Creación de Banner </h1>
<div class=\"row\">
        <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("banner_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 19
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
        
        $__internal_0153ceefa021ef1d06c682d2c08d2919c2ccb9856c66e244f67d3cc506c6809b->leave($__internal_0153ceefa021ef1d06c682d2c08d2919c2ccb9856c66e244f67d3cc506c6809b_prof);

    }

    // line 31
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_34e011e41ea56f72bb81056320479700c5681935d6eadb242c080066848c221c = $this->env->getExtension("native_profiler");
        $__internal_34e011e41ea56f72bb81056320479700c5681935d6eadb242c080066848c221c->enter($__internal_34e011e41ea56f72bb81056320479700c5681935d6eadb242c080066848c221c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_34e011e41ea56f72bb81056320479700c5681935d6eadb242c080066848c221c->leave($__internal_34e011e41ea56f72bb81056320479700c5681935d6eadb242c080066848c221c_prof);

    }

    public function getTemplateName()
    {
        return ":banner:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  66 => 19,  61 => 17,  56 => 15,  51 => 14,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creación de Banner </h1>*/
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
/*                     <a href="{{ path('banner_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
