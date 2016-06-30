<?php

/* :enlace:show.html.twig */
class __TwigTemplate_277d52b9ca49473e2d26143976d8a2d493fbcd0ec66886db6ecb4408d77c5311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enlace:show.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>enlace</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enlace_index", array("id" => $this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "id", array()))), "html", null, true);
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
        echo $this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "descripcion", array());
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Fecha -hora</th>
                                    <td>";
        // line 33
        if ($this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "fechaHora", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "fechaHora", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Visible</th>
                                    <td>";
        // line 37
        if ($this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "visible", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "getidUsuario", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "id", array()), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
               <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enlace_edit", array("id" => $this->getAttribute((isset($context["enlace"]) ? $context["enlace"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Editar</a>

                <input type=\"submit\" class=\"btn btn-danger\"   value=\"Eliminar\">
                    <!--input type=\"submit\" value=\"Eliminar\"-->
                    </button>
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "    
        
        </div>

    
                                
            
        
";
    }

    public function getTemplateName()
    {
        return ":enlace:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 67,  118 => 62,  114 => 61,  95 => 45,  88 => 41,  77 => 37,  68 => 33,  61 => 29,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>enlace</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('enlace_index', { 'id': enlace.id }) }}">Volver*/
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
/*                                     <td>{{ enlace.descripcion | raw}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Fecha -hora</th>*/
/*                                     <td>{% if enlace.fechaHora %}{{ enlace.fechaHora|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Visible</th>*/
/*                                     <td>{% if enlace.visible %}Sí{% else %}No{% endif %}</td>*/
/*                                 </tr>*/
/*                                  <tr>*/
/*                                     <th>Usuario</th>*/
/*                                     <td>{{ enlace.getidUsuario}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ enlace.id }}</td>*/
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
/*                <a href="{{ path('enlace_edit', { 'id': enlace.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
