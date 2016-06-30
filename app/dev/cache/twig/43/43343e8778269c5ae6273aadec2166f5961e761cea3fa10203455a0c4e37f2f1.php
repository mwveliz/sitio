<?php

/* :video:show.html.twig */
class __TwigTemplate_81e489694ec6d722ae22b75a0d53cf3cc3772a07cefabe639f3b3539d302d299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":video:show.html.twig", 2);
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
        $__internal_b3e9e61df555a1c33e6dc3f54a341fc06d3e6136c96514ab94c986b58597957e = $this->env->getExtension("native_profiler");
        $__internal_b3e9e61df555a1c33e6dc3f54a341fc06d3e6136c96514ab94c986b58597957e->enter($__internal_b3e9e61df555a1c33e6dc3f54a341fc06d3e6136c96514ab94c986b58597957e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":video:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3e9e61df555a1c33e6dc3f54a341fc06d3e6136c96514ab94c986b58597957e->leave($__internal_b3e9e61df555a1c33e6dc3f54a341fc06d3e6136c96514ab94c986b58597957e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ce7ee4368b5d4374565f727d45f232b0b7385490be2dcb83777176b62747855 = $this->env->getExtension("native_profiler");
        $__internal_5ce7ee4368b5d4374565f727d45f232b0b7385490be2dcb83777176b62747855->enter($__internal_5ce7ee4368b5d4374565f727d45f232b0b7385490be2dcb83777176b62747855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Videos</h1>

    
            
             <div align=\"right\">
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("video_index", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id", array()))), "html", null, true);
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
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechahora</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "fechaHora", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "fechaHora", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Visible</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "visible", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "autor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ruta</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "ruta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("video_edit", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id", array()))), "html", null, true);
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
        
        $__internal_5ce7ee4368b5d4374565f727d45f232b0b7385490be2dcb83777176b62747855->leave($__internal_5ce7ee4368b5d4374565f727d45f232b0b7385490be2dcb83777176b62747855_prof);

    }

    public function getTemplateName()
    {
        return ":video:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 76,  141 => 71,  137 => 70,  118 => 54,  111 => 50,  104 => 46,  97 => 42,  86 => 38,  77 => 34,  70 => 30,  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Videos</h1>*/
/* */
/*     */
/*             */
/*              <div align="right">*/
/*       <a href="{{ path('video_index', { 'id': video.id }) }}">Volver*/
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
/*                                    <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ video.descripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechahora</th>*/
/*                 <td>{% if video.fechaHora %}{{ video.fechaHora|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Visible</th>*/
/*                 <td>{% if video.visible %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titulo</th>*/
/*                 <td>{{ video.titulo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Autor</th>*/
/*                 <td>{{ video.autor }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ruta</th>*/
/*                 <td>{{ video.ruta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ video.id }}</td>*/
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
/*                <a href="{{ path('video_edit', { 'id': video.id }) }}" class="btn btn-info" role="button">Editar</a>*/
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
/* */
