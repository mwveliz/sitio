<?php

/* :imagen:show.html.twig */
class __TwigTemplate_e8f8af09a0f277aed8859e048489753c44471b61a69ae9feed377eb3f590dd14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":imagen:show.html.twig", 1);
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
        $__internal_59f1e3ac975fec2337560ddc46824550e4343647294609b0eab6836eb8a23ec7 = $this->env->getExtension("native_profiler");
        $__internal_59f1e3ac975fec2337560ddc46824550e4343647294609b0eab6836eb8a23ec7->enter($__internal_59f1e3ac975fec2337560ddc46824550e4343647294609b0eab6836eb8a23ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":imagen:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59f1e3ac975fec2337560ddc46824550e4343647294609b0eab6836eb8a23ec7->leave($__internal_59f1e3ac975fec2337560ddc46824550e4343647294609b0eab6836eb8a23ec7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbd2f3dd687e984a6fb3a4b1013599ec0ce90bab1160a8a46818f56a84cc30b1 = $this->env->getExtension("native_profiler");
        $__internal_cbd2f3dd687e984a6fb3a4b1013599ec0ce90bab1160a8a46818f56a84cc30b1->enter($__internal_cbd2f3dd687e984a6fb3a4b1013599ec0ce90bab1160a8a46818f56a84cc30b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>imagen</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imagen_index", array("id" => $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "id", array()))), "html", null, true);
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
        echo $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "descripcion", array());
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Fecha -hora</th>
                                    <td>";
        // line 33
        if ($this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "fechaHora", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "fechaHora", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Visible</th>
                                    <td>";
        // line 37
        if ($this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "visible", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "getidUsuario", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imagen_edit", array("id" => $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "id", array()))), "html", null, true);
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
        
        $__internal_cbd2f3dd687e984a6fb3a4b1013599ec0ce90bab1160a8a46818f56a84cc30b1->leave($__internal_cbd2f3dd687e984a6fb3a4b1013599ec0ce90bab1160a8a46818f56a84cc30b1_prof);

    }

    public function getTemplateName()
    {
        return ":imagen:show.html.twig";
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
/*     <h1>imagen</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('imagen_index', { 'id': imagen.id }) }}">Volver*/
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
/*                                     <td>{{ imagen.descripcion | raw}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Fecha -hora</th>*/
/*                                     <td>{% if imagen.fechaHora %}{{ imagen.fechaHora|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Visible</th>*/
/*                                     <td>{% if imagen.visible %}Sí{% else %}No{% endif %}</td>*/
/*                                 </tr>*/
/*                                  <tr>*/
/*                                     <th>Usuario</th>*/
/*                                     <td>{{ imagen.getidUsuario}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ imagen.id }}</td>*/
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
/*                <a href="{{ path('imagen_edit', { 'id': imagen.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
