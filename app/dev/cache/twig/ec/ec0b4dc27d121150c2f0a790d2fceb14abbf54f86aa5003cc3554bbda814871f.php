<?php

/* :banner:show.html.twig */
class __TwigTemplate_1dbe6f76261983b68659e43e4e56c34cbb17c60b04b8bfe625ae444cbcbb1e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":banner:show.html.twig", 2);
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
        $__internal_1c664c6b06c6305bfae4c8ead85e0913a7e5d78aa8751ac050d11c4a2e954b65 = $this->env->getExtension("native_profiler");
        $__internal_1c664c6b06c6305bfae4c8ead85e0913a7e5d78aa8751ac050d11c4a2e954b65->enter($__internal_1c664c6b06c6305bfae4c8ead85e0913a7e5d78aa8751ac050d11c4a2e954b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banner:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c664c6b06c6305bfae4c8ead85e0913a7e5d78aa8751ac050d11c4a2e954b65->leave($__internal_1c664c6b06c6305bfae4c8ead85e0913a7e5d78aa8751ac050d11c4a2e954b65_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d08f6d60284269535f532b3b4bf62ada74d7b74148f7862514a06b8a5b3dd5c = $this->env->getExtension("native_profiler");
        $__internal_4d08f6d60284269535f532b3b4bf62ada74d7b74148f7862514a06b8a5b3dd5c->enter($__internal_4d08f6d60284269535f532b3b4bf62ada74d7b74148f7862514a06b8a5b3dd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Banner</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banner_index", array("id" => $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "id", array()))), "html", null, true);
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
                <th>Rutabanner</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "rutaBanner", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rutafooter</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "rutaFooter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rutalogo</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "rutaLogo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rutasplash</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "rutaSplash", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechahora</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "fechaHora", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "fechaHora", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Visiblesplash</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "visibleSplash", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banner_edit", array("id" => $this->getAttribute((isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "id", array()))), "html", null, true);
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
        
        $__internal_4d08f6d60284269535f532b3b4bf62ada74d7b74148f7862514a06b8a5b3dd5c->leave($__internal_4d08f6d60284269535f532b3b4bf62ada74d7b74148f7862514a06b8a5b3dd5c_prof);

    }

    public function getTemplateName()
    {
        return ":banner:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 76,  141 => 71,  137 => 70,  118 => 54,  107 => 50,  98 => 46,  91 => 42,  84 => 38,  77 => 34,  70 => 30,  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Banner</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('banner_index', { 'id': banner.id }) }}">Volver*/
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
/*                 <th>Rutabanner</th>*/
/*                 <td>{{ banner.rutaBanner }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Rutafooter</th>*/
/*                 <td>{{ banner.rutaFooter }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Rutalogo</th>*/
/*                 <td>{{ banner.rutaLogo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Rutasplash</th>*/
/*                 <td>{{ banner.rutaSplash }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechahora</th>*/
/*                 <td>{% if banner.fechaHora %}{{ banner.fechaHora|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Visiblesplash</th>*/
/*                 <td>{% if banner.visibleSplash %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ banner.id }}</td>*/
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
/*                <a href="{{ path('banner_edit', { 'id': banner.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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