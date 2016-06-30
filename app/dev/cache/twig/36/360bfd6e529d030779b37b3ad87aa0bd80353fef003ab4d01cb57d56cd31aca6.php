<?php

/* :noticiainterna:show.html.twig */
class __TwigTemplate_4cc8a120f2213b3cebf7235aa1a4d136baf0f098a21d3ff3c965a72f231a0646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":noticiainterna:show.html.twig", 1);
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
        $__internal_1c478c7053daaccebca4828eda7fbec3bc8445e3546905217b3b99fd51dce802 = $this->env->getExtension("native_profiler");
        $__internal_1c478c7053daaccebca4828eda7fbec3bc8445e3546905217b3b99fd51dce802->enter($__internal_1c478c7053daaccebca4828eda7fbec3bc8445e3546905217b3b99fd51dce802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":noticiainterna:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c478c7053daaccebca4828eda7fbec3bc8445e3546905217b3b99fd51dce802->leave($__internal_1c478c7053daaccebca4828eda7fbec3bc8445e3546905217b3b99fd51dce802_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_684a2d0744cf4406a66bc818e65ecbf6b144b1be722e07578a385b14a22f6b3d = $this->env->getExtension("native_profiler");
        $__internal_684a2d0744cf4406a66bc818e65ecbf6b144b1be722e07578a385b14a22f6b3d->enter($__internal_684a2d0744cf4406a66bc818e65ecbf6b144b1be722e07578a385b14a22f6b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>noticia Internas</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticiainterna_index", array("id" => $this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "id", array()))), "html", null, true);
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
                                    <th>Descripcion</th>
                                    <td>";
        // line 29
        echo $this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "descripcion", array());
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Fecha -hora</th>
                                    <td>";
        // line 33
        if ($this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "fechaHora", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "fechaHora", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Visible</th>
                                    <td>";
        // line 37
        if ($this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "visible", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</td>
                                </tr>
                                 <tr>
                                    <th>Usuario</th>
                                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "getidUsuario", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "id", array()), "html", null, true);
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
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
               <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticiainterna_edit", array("id" => $this->getAttribute((isset($context["noticiainterna"]) ? $context["noticiainterna"] : $this->getContext($context, "noticiainterna")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Editar</a>

                <input type=\"submit\" class=\"btn btn-danger\"   value=\"Eliminar\">
                    <!--input type=\"submit\" value=\"Eliminar\"-->
                    </button>
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "    
        
        </div>

    
                                
            
        
";
        
        $__internal_684a2d0744cf4406a66bc818e65ecbf6b144b1be722e07578a385b14a22f6b3d->leave($__internal_684a2d0744cf4406a66bc818e65ecbf6b144b1be722e07578a385b14a22f6b3d_prof);

    }

    public function getTemplateName()
    {
        return ":noticiainterna:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 67,  127 => 62,  123 => 61,  104 => 45,  97 => 41,  86 => 37,  77 => 33,  70 => 29,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>noticia Internas</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('noticiainterna_index', { 'id': noticiainterna.id }) }}">Volver*/
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
/*                                     <tr>*/
/*                                     <th>Descripcion</th>*/
/*                                     <td>{{noticiainterna.descripcion | raw}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Fecha -hora</th>*/
/*                                     <td>{% if noticiainterna.fechaHora %}{{noticiainterna.fechaHora|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Visible</th>*/
/*                                     <td>{% if noticiainterna.visible %}Sí{% else %}No{% endif %}</td>*/
/*                                 </tr>*/
/*                                  <tr>*/
/*                                     <th>Usuario</th>*/
/*                                     <td>{{noticiainterna.getidUsuario}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{noticiainterna.id }}</td>*/
/*                                 </tr>*/
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
/*                <a href="{{ path('noticiainterna_edit', { 'id':noticiainterna.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
