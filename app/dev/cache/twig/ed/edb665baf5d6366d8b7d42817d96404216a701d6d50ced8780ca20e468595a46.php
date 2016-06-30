<?php

/* :menu:show.html.twig */
class __TwigTemplate_31d688f1202066074d9073e8743c9eea9141ea757b2a0ded5c3c084c32673117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":menu:show.html.twig", 1);
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
        $__internal_5db498378ea61bf70d4c7d6aba6a10289e21912f790c24c5bdaf6eb37e1c2ab5 = $this->env->getExtension("native_profiler");
        $__internal_5db498378ea61bf70d4c7d6aba6a10289e21912f790c24c5bdaf6eb37e1c2ab5->enter($__internal_5db498378ea61bf70d4c7d6aba6a10289e21912f790c24c5bdaf6eb37e1c2ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db498378ea61bf70d4c7d6aba6a10289e21912f790c24c5bdaf6eb37e1c2ab5->leave($__internal_5db498378ea61bf70d4c7d6aba6a10289e21912f790c24c5bdaf6eb37e1c2ab5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37aa763e681993d6ee8a0c068a752117f2c54823a4ad2655398e20602e02de06 = $this->env->getExtension("native_profiler");
        $__internal_37aa763e681993d6ee8a0c068a752117f2c54823a4ad2655398e20602e02de06->enter($__internal_37aa763e681993d6ee8a0c068a752117f2c54823a4ad2655398e20602e02de06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Menu</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menu_index", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()))), "html", null, true);
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
        echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "descripcion", array());
        echo "</td>
                                </tr>
                                
                                <tr>
                                    <th>Visible</th>
                                    <td>";
        // line 34
        if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "visible", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Posicion</th>
                                    <td>";
        // line 38
        if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "posicion", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Enlace</th>
                                    <td>";
        // line 42
        if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "enlace", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</td>
                                </tr>
                                 
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menu_edit", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()))), "html", null, true);
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
        
        $__internal_37aa763e681993d6ee8a0c068a752117f2c54823a4ad2655398e20602e02de06->leave($__internal_37aa763e681993d6ee8a0c068a752117f2c54823a4ad2655398e20602e02de06_prof);

    }

    public function getTemplateName()
    {
        return ":menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 69,  135 => 64,  131 => 63,  112 => 47,  100 => 42,  89 => 38,  78 => 34,  70 => 29,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Menu</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('menu_index', { 'id': menu.id }) }}">Volver*/
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
/*                                     <td>{{ menu.descripcion | raw}}</td>*/
/*                                 </tr>*/
/*                                 */
/*                                 <tr>*/
/*                                     <th>Visible</th>*/
/*                                     <td>{% if menu.visible %}Sí{% else %}No{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Posicion</th>*/
/*                                     <td>{% if menu.posicion %}Sí{% else %}No{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Enlace</th>*/
/*                                     <td>{% if menu.enlace %}Sí{% else %}No{% endif %}</td>*/
/*                                 </tr>*/
/*                                  */
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ menu.id }}</td>*/
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
/*                <a href="{{ path('menu_edit', { 'id': menu.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
