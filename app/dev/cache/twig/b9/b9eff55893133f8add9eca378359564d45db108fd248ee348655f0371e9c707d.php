<?php

/* :informacion:show.html.twig */
class __TwigTemplate_6492abc788b6e1d59b81f832f38b953c16705ca4c4663f5685ad8bb59788ea94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":informacion:show.html.twig", 1);
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
        $__internal_170f1dd5fc16f02d04b768ef0e7c3df3d438b14107185394d9b7b05c8b7b1ee3 = $this->env->getExtension("native_profiler");
        $__internal_170f1dd5fc16f02d04b768ef0e7c3df3d438b14107185394d9b7b05c8b7b1ee3->enter($__internal_170f1dd5fc16f02d04b768ef0e7c3df3d438b14107185394d9b7b05c8b7b1ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":informacion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170f1dd5fc16f02d04b768ef0e7c3df3d438b14107185394d9b7b05c8b7b1ee3->leave($__internal_170f1dd5fc16f02d04b768ef0e7c3df3d438b14107185394d9b7b05c8b7b1ee3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1f6bdb338fc2f77ce434bc7bb11c231a283064133128ebcf717796988fab3da = $this->env->getExtension("native_profiler");
        $__internal_f1f6bdb338fc2f77ce434bc7bb11c231a283064133128ebcf717796988fab3da->enter($__internal_f1f6bdb338fc2f77ce434bc7bb11c231a283064133128ebcf717796988fab3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Informacion</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacion_index", array("id" => $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "id", array()))), "html", null, true);
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
        echo $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "descripcion", array());
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Fecha -hora</th>
                                    <td>";
        // line 33
        if ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "fechaHora", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "fechaHora", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Visible</th>
                                    <td>";
        // line 37
        if ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "visible", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "getidUsuario", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacion_edit", array("id" => $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "id", array()))), "html", null, true);
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
        
        $__internal_f1f6bdb338fc2f77ce434bc7bb11c231a283064133128ebcf717796988fab3da->leave($__internal_f1f6bdb338fc2f77ce434bc7bb11c231a283064133128ebcf717796988fab3da_prof);

    }

    public function getTemplateName()
    {
        return ":informacion:show.html.twig";
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
/*     <h1>Informacion</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('informacion_index', { 'id': informacion.id }) }}">Volver*/
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
/*                                     <td>{{ informacion.descripcion | raw}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Fecha -hora</th>*/
/*                                     <td>{% if informacion.fechaHora %}{{ informacion.fechaHora|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Visible</th>*/
/*                                     <td>{% if informacion.visible %}Sí{% else %}No{% endif %}</td>*/
/*                                 </tr>*/
/*                                  <tr>*/
/*                                     <th>Usuario</th>*/
/*                                     <td>{{ informacion.getidUsuario}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ informacion.id }}</td>*/
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
/*                <a href="{{ path('informacion_edit', { 'id': informacion.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
