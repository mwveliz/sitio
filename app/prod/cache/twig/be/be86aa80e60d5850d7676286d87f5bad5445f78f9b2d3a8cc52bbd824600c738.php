<?php

/* :usuario:show.html.twig */
class __TwigTemplate_da250dc64a9ddb8edac8f5423ad50a6914d2e485f655e9905f777687b4de5911 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Usuario</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "dni", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nacionalidad</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nacionalidad", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombre", array()), "html", null, true);
        echo "</td>
                                </tr>
                                 <tr>
                                    <th>Apellido</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellido", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "telefono", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Telefono Secundario</th>
                                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "telefonoSecundario", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>id</th>
                                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
               <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Editar</a>

                <input type=\"submit\" class=\"btn btn-danger\"   value=\"Eliminar\">
                    <!--input type=\"submit\" value=\"Eliminar\"-->
                    </button>
            ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "    
        
        </div>

    
                                
            
        
";
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
        return array (  134 => 76,  126 => 71,  122 => 70,  103 => 54,  96 => 50,  89 => 46,  82 => 42,  75 => 38,  68 => 34,  61 => 30,  38 => 10,  31 => 5,  28 => 4,  11 => 2,);
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
