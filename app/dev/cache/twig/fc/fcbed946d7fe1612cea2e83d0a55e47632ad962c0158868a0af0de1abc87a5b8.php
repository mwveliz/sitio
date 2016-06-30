<?php

/* :tipodocumento:show.html.twig */
class __TwigTemplate_f1248bcb8ef0b61b92e2cc12d8624f020bf5f76abfe1474565de870a8336b03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tipodocumento:show.html.twig", 1);
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
        $__internal_730340c624bbdf1665df55f948887776f670a8dd86cd9a835cd28be161d7b0d8 = $this->env->getExtension("native_profiler");
        $__internal_730340c624bbdf1665df55f948887776f670a8dd86cd9a835cd28be161d7b0d8->enter($__internal_730340c624bbdf1665df55f948887776f670a8dd86cd9a835cd28be161d7b0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipodocumento:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_730340c624bbdf1665df55f948887776f670a8dd86cd9a835cd28be161d7b0d8->leave($__internal_730340c624bbdf1665df55f948887776f670a8dd86cd9a835cd28be161d7b0d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e352265a5f3eb79e7b44cf0d3d3b9e499e55bbf730aafd2b68357d41be3b0c81 = $this->env->getExtension("native_profiler");
        $__internal_e352265a5f3eb79e7b44cf0d3d3b9e499e55bbf730aafd2b68357d41be3b0c81->enter($__internal_e352265a5f3eb79e7b44cf0d3d3b9e499e55bbf730aafd2b68357d41be3b0c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>tipo de Documento</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipodocumento_index", array("id" => $this->getAttribute((isset($context["tipoDocumento"]) ? $context["tipoDocumento"] : $this->getContext($context, "tipoDocumento")), "id", array()))), "html", null, true);
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
        echo $this->getAttribute((isset($context["tipoDocumento"]) ? $context["tipoDocumento"] : $this->getContext($context, "tipoDocumento")), "descripcion", array());
        echo "</td>
                                </tr>
                             
                                                                 
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoDocumento"]) ? $context["tipoDocumento"] : $this->getContext($context, "tipoDocumento")), "id", array()), "html", null, true);
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
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
               <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipodocumento_edit", array("id" => $this->getAttribute((isset($context["tipoDocumento"]) ? $context["tipoDocumento"] : $this->getContext($context, "tipoDocumento")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Editar</a>

                <input type=\"submit\" class=\"btn btn-danger\"   value=\"Eliminar\">
                    <!--input type=\"submit\" value=\"Eliminar\"-->
                    </button>
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "    
        
        </div>

    
                                
            
        
";
        
        $__internal_e352265a5f3eb79e7b44cf0d3d3b9e499e55bbf730aafd2b68357d41be3b0c81->leave($__internal_e352265a5f3eb79e7b44cf0d3d3b9e499e55bbf730aafd2b68357d41be3b0c81_prof);

    }

    public function getTemplateName()
    {
        return ":tipodocumento:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 57,  102 => 52,  98 => 51,  79 => 35,  70 => 29,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>tipo de Documento</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('tipodocumento_index', { 'id': tipoDocumento.id }) }}">Volver*/
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
/*                                     <td>{{ tipoDocumento.descripcion | raw}}</td>*/
/*                                 </tr>*/
/*                              */
/*                                                                  */
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ tipoDocumento.id }}</td>*/
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
/*                <a href="{{ path('tipodocumento_edit', { 'id': tipoDocumento.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
