<?php

/* :usuario:show.html.twig */
class __TwigTemplate_cacb7f45651fbc0f2faa4254cb8a42a633219c277c30c1e0a2dbb06228300ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:show.html.twig", 2);
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
        $__internal_86814ee58dc9a9b634efbe1580192750364605a392f83067446a7384ad9478c8 = $this->env->getExtension("native_profiler");
        $__internal_86814ee58dc9a9b634efbe1580192750364605a392f83067446a7384ad9478c8->enter($__internal_86814ee58dc9a9b634efbe1580192750364605a392f83067446a7384ad9478c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86814ee58dc9a9b634efbe1580192750364605a392f83067446a7384ad9478c8->leave($__internal_86814ee58dc9a9b634efbe1580192750364605a392f83067446a7384ad9478c8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2194bab9eaa7b983230612df49759b8e7245d477dc07a15361b6058c076d891b = $this->env->getExtension("native_profiler");
        $__internal_2194bab9eaa7b983230612df49759b8e7245d477dc07a15361b6058c076d891b->enter($__internal_2194bab9eaa7b983230612df49759b8e7245d477dc07a15361b6058c076d891b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Usuario</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
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
                                    <th>Cedula</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "dni", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nacionalidad</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nacionalidad", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</td>
                                </tr>
                                 <tr>
                                    <th>Apellido</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Telefono Secundario</th>
                                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefonoSecundario", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>id</th>
                                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
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
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
               <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Editar</a>

                <input type=\"submit\" class=\"btn btn-danger\"   value=\"Eliminar\">
                    <!--input type=\"submit\" value=\"Eliminar\"-->
                    </button>
            ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "    
        
        </div>

    
                                
            
        
";
        
        $__internal_2194bab9eaa7b983230612df49759b8e7245d477dc07a15361b6058c076d891b->leave($__internal_2194bab9eaa7b983230612df49759b8e7245d477dc07a15361b6058c076d891b_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 76,  135 => 71,  131 => 70,  112 => 54,  105 => 50,  98 => 46,  91 => 42,  84 => 38,  77 => 34,  70 => 30,  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuario</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('usuario_index', { 'id': usuario.id }) }}">Volver*/
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
/*                                     <th>Cedula</th>*/
/*                                     <td>{{ usuario.dni }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Nacionalidad</th>*/
/*                                     <td>{{ usuario.nacionalidad }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Nombre</th>*/
/*                                     <td>{{ usuario.nombre }}</td>*/
/*                                 </tr>*/
/*                                  <tr>*/
/*                                     <th>Apellido</th>*/
/*                                     <td>{{ usuario.apellido}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Telefono</th>*/
/*                                     <td>{{ usuario.telefono }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Telefono Secundario</th>*/
/*                                     <td>{{ usuario.telefonoSecundario }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>id</th>*/
/*                                     <td>{{ usuario.id }}</td>*/
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
/*                <a href="{{ path('usuario_edit', { 'id': usuario.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
