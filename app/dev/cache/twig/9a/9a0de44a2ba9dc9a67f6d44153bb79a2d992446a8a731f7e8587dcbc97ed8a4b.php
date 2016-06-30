<?php

/* :documento:show.html.twig */
class __TwigTemplate_fb86fb90604f8fa1063d9e1dc8397499af2d0002da85acc6c4abd5ec7debc40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":documento:show.html.twig", 3);
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
        $__internal_bb6d5d3d07ad1c0d5f05c64d8daba5a2221540de40f8ecf23020cad46811125c = $this->env->getExtension("native_profiler");
        $__internal_bb6d5d3d07ad1c0d5f05c64d8daba5a2221540de40f8ecf23020cad46811125c->enter($__internal_bb6d5d3d07ad1c0d5f05c64d8daba5a2221540de40f8ecf23020cad46811125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documento:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6d5d3d07ad1c0d5f05c64d8daba5a2221540de40f8ecf23020cad46811125c->leave($__internal_bb6d5d3d07ad1c0d5f05c64d8daba5a2221540de40f8ecf23020cad46811125c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aa0649fe17d417a121db27ae70ce7d2adde6b6124dcf6b94a096e6903743982 = $this->env->getExtension("native_profiler");
        $__internal_7aa0649fe17d417a121db27ae70ce7d2adde6b6124dcf6b94a096e6903743982->enter($__internal_7aa0649fe17d417a121db27ae70ce7d2adde6b6124dcf6b94a096e6903743982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Documentos</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documento_index", array("id" => $this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "id", array()))), "html", null, true);
        echo "\">Volver
        <span class=\"glyphicon glyphicon-arrow-left\"></span>
        </a>   
        </div>
    <div class=\"page-container\">
            
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption font-green\">
                                        <i class=\"icon-settings font-green\"></i>
                                        <span class=\"caption-subject bold uppercase\"></span>
                                    </div>                                   
                                </div>   
                                <div class=\"portlet-body\">
                                    <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_2\">
                                     <tr>
            \t\t\t\t    <th>Descripcion</th>
            \t\t\t\t    <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "descripcion", array()), "html", null, true);
        echo "</td>
           \t\t\t\t </tr>
          \t\t\t\t\t\t\t  <tr>
              \t\t\t\t    <th>Ruta</th>
            \t\t\t\t    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "ruta", array()), "html", null, true);
        echo "</td>
           \t\t\t\t  </tr>
          \t\t\t\t  <tr>
           \t\t\t\t       <th>Visible</th>
            \t\t\t\t    <td>";
        // line 39
        if ($this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "visible", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
           \t\t\t\t </tr>
           \t\t\t\t <tr>
            \t\t\t\t    <th>Fechahora</th>
            \t\t\t\t    <td>";
        // line 43
        if ($this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "fechaHora", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "fechaHora", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
          \t\t\t\t  </tr>
          \t\t\t\t\t  <tr>
                <th>Id</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
                                    </table>
                                        
                                </div>
                                </div> 
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                      
                    </div>
            <!-- END CONTENT BODY -->
        </div>       
    
     
            <div align=\"right\">
         
    ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
               <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documento_edit", array("id" => $this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Editar</a>

                <input type=\"submit\" class=\"btn btn-danger\"   value=\"Eliminar\">
                    <!--input type=\"submit\" value=\"Eliminar\"-->
                    </button>
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "    
        
        </div>

    
                                
            
        
";
        
        $__internal_7aa0649fe17d417a121db27ae70ce7d2adde6b6124dcf6b94a096e6903743982->leave($__internal_7aa0649fe17d417a121db27ae70ce7d2adde6b6124dcf6b94a096e6903743982_prof);

    }

    public function getTemplateName()
    {
        return ":documento:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 69,  127 => 64,  123 => 63,  104 => 47,  95 => 43,  84 => 39,  77 => 35,  70 => 31,  47 => 11,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Documentos</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('documento_index', { 'id': documento.id }) }}">Volver*/
/*         <span class="glyphicon glyphicon-arrow-left"></span>*/
/*         </a>   */
/*         </div>*/
/*     <div class="page-container">*/
/*             */
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <!-- BEGIN EXAMPLE TABLE PORTLET-->*/
/*                             <div class="portlet light bordered">*/
/*                                 <div class="portlet-title">*/
/*                                     <div class="caption font-green">*/
/*                                         <i class="icon-settings font-green"></i>*/
/*                                         <span class="caption-subject bold uppercase"></span>*/
/*                                     </div>                                   */
/*                                 </div>   */
/*                                 <div class="portlet-body">*/
/*                                     <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">*/
/*                                      <tr>*/
/*             				    <th>Descripcion</th>*/
/*             				    <td>{{ documento.descripcion }}</td>*/
/*            				 </tr>*/
/*           							  <tr>*/
/*               				    <th>Ruta</th>*/
/*             				    <td>{{ documento.ruta }}</td>*/
/*            				  </tr>*/
/*           				  <tr>*/
/*            				       <th>Visible</th>*/
/*             				    <td>{% if documento.visible %}Yes{% else %}No{% endif %}</td>*/
/*            				 </tr>*/
/*            				 <tr>*/
/*             				    <th>Fechahora</th>*/
/*             				    <td>{% if documento.fechaHora %}{{ documento.fechaHora|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*           				  </tr>*/
/*           					  <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ documento.id }}</td>*/
/*             </tr>*/
/*                                     </table>*/
/*                                         */
/*                                 </div>*/
/*                                 </div> */
/*                             <!-- END EXAMPLE TABLE PORTLET-->*/
/*                         </div>*/
/*                       */
/*                     </div>*/
/*             <!-- END CONTENT BODY -->*/
/*         </div>       */
/*     */
/*      */
/*             <div align="right">*/
/*          */
/*     {{ form_start(delete_form) }}*/
/*                <a href="{{ path('documento_edit', { 'id': documento.id }) }}" class="btn btn-info" role="button">Editar</a>*/
/* */
/*                 <input type="submit" class="btn btn-danger"   value="Eliminar">*/
/*                     <!--input type="submit" value="Eliminar"-->*/
/*                     </button>*/
/*             {{ form_end(delete_form) }}    */
/*         */
/*         </div>*/
/* */
/*     */
/*                                 */
/*             */
/*         */
/* {% endblock %}*/
/* */
/* */
