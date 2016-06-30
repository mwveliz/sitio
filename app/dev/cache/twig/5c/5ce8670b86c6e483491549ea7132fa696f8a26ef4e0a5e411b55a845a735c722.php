<?php

/* :ente:show.html.twig */
class __TwigTemplate_47ffd48280f164c9e46d45694096d7fe401d7f149cfea7ed3aeef01c996e9fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ente:show.html.twig", 1);
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
        $__internal_56946ec1e815db8ed437c10ac9aa61a646061ab760def77eb40eb6bb37e1be52 = $this->env->getExtension("native_profiler");
        $__internal_56946ec1e815db8ed437c10ac9aa61a646061ab760def77eb40eb6bb37e1be52->enter($__internal_56946ec1e815db8ed437c10ac9aa61a646061ab760def77eb40eb6bb37e1be52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56946ec1e815db8ed437c10ac9aa61a646061ab760def77eb40eb6bb37e1be52->leave($__internal_56946ec1e815db8ed437c10ac9aa61a646061ab760def77eb40eb6bb37e1be52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_882a861ce519599998e3bfa7e42dc73016addd652c1fefa543ba6f8b2931b77d = $this->env->getExtension("native_profiler");
        $__internal_882a861ce519599998e3bfa7e42dc73016addd652c1fefa543ba6f8b2931b77d->enter($__internal_882a861ce519599998e3bfa7e42dc73016addd652c1fefa543ba6f8b2931b77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Entes</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ente_index", array("id" => $this->getAttribute((isset($context["ente"]) ? $context["ente"] : $this->getContext($context, "ente")), "id", array()))), "html", null, true);
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
        echo $this->getAttribute((isset($context["ente"]) ? $context["ente"] : $this->getContext($context, "ente")), "descripcion", array());
        echo "</td>
                                </tr>
                        <tr>
                                    <th>Enlace</th>
                                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ente"]) ? $context["ente"] : $this->getContext($context, "ente")), "enlace", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ente"]) ? $context["ente"] : $this->getContext($context, "ente")), "id", array()), "html", null, true);
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
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
               <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ente_edit", array("id" => $this->getAttribute((isset($context["ente"]) ? $context["ente"] : $this->getContext($context, "ente")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Editar</a>

                <input type=\"submit\" class=\"btn btn-danger\"   value=\"Eliminar\">
                    <!--input type=\"submit\" value=\"Eliminar\"-->
                    </button>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "    
        
        </div>

    
                                
            
        
";
        
        $__internal_882a861ce519599998e3bfa7e42dc73016addd652c1fefa543ba6f8b2931b77d->leave($__internal_882a861ce519599998e3bfa7e42dc73016addd652c1fefa543ba6f8b2931b77d_prof);

    }

    public function getTemplateName()
    {
        return ":ente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 59,  107 => 54,  103 => 53,  84 => 37,  77 => 33,  70 => 29,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Entes</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('ente_index', { 'id': ente.id }) }}">Volver*/
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
/*                                     <td>{{ ente.descripcion | raw}}</td>*/
/*                                 </tr>*/
/*                         <tr>*/
/*                                     <th>Enlace</th>*/
/*                                     <td>{{ ente.enlace}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ ente.id }}</td>*/
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
/*                <a href="{{ path('ente_edit', { 'id': ente.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
