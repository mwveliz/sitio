<?php

/* :documento:index.html.twig */
class __TwigTemplate_ce8ca0924ef2aa1d77386920199f5689390227cae5b91402067fe6831def16cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documento:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets_extra' => array($this, 'block_stylesheets_extra'),
            'body' => array($this, 'block_body'),
            'javascripts_extra' => array($this, 'block_javascripts_extra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9f8318901f57cdecf3190e94c339304bd44f57c2a886db55dda27b1cf387370 = $this->env->getExtension("native_profiler");
        $__internal_d9f8318901f57cdecf3190e94c339304bd44f57c2a886db55dda27b1cf387370->enter($__internal_d9f8318901f57cdecf3190e94c339304bd44f57c2a886db55dda27b1cf387370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documento:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f8318901f57cdecf3190e94c339304bd44f57c2a886db55dda27b1cf387370->leave($__internal_d9f8318901f57cdecf3190e94c339304bd44f57c2a886db55dda27b1cf387370_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_326f66fe7a745f0294958fc3b49cbcb17ce6c0dcd4bf97704ccde3ae63fbf606 = $this->env->getExtension("native_profiler");
        $__internal_326f66fe7a745f0294958fc3b49cbcb17ce6c0dcd4bf97704ccde3ae63fbf606->enter($__internal_326f66fe7a745f0294958fc3b49cbcb17ce6c0dcd4bf97704ccde3ae63fbf606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        // line 3
        echo "      
";
        
        $__internal_326f66fe7a745f0294958fc3b49cbcb17ce6c0dcd4bf97704ccde3ae63fbf606->leave($__internal_326f66fe7a745f0294958fc3b49cbcb17ce6c0dcd4bf97704ccde3ae63fbf606_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_505b318ec749b80685e43cd5ff09d20f8272df694d9981c63d89725f4ff6a4b4 = $this->env->getExtension("native_profiler");
        $__internal_505b318ec749b80685e43cd5ff09d20f8272df694d9981c63d89725f4ff6a4b4->enter($__internal_505b318ec749b80685e43cd5ff09d20f8272df694d9981c63d89725f4ff6a4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Documentos</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12        col-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("documento_new");
        echo "\" ><span>Agregar</span></a>
                            <br><br>                            
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption font-green\">
                                        <i class=\"icon-settings font-green\"></i>
                                        <span class=\"caption-subject bold uppercase\"></span>
                                    </div>
                                    <div class=\"tools\"> </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_2\">
                                        <thead>
                                            <tr>
                                                <th class=\"all\" width=\"10%\">Detalle</th>
                                                <th class=\"all\" width=\"10%\">Editar</th>
                                                <th class=\"all\">Descripcion</th>
                                                <th class=\"all\">Fecha</th>                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentos"]) ? $context["documentos"] : $this->getContext($context, "documentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["documento"]) {
            // line 37
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documento_show", array("id" => $this->getAttribute($context["documento"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documento_edit", array("id" => $this->getAttribute($context["documento"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 53
            echo $this->getAttribute($context["documento"], "descripcion", array());
            echo "</td>
                                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["documento"], "fechahora", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                                     
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                        </tbody>                                        
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                        
                    </div>
                                    
                                        
            <!-- END CONTENT BODY -->
            
        </div>                                      
        <!-- END CONTAINER -->
    
";
        
        $__internal_505b318ec749b80685e43cd5ff09d20f8272df694d9981c63d89725f4ff6a4b4->leave($__internal_505b318ec749b80685e43cd5ff09d20f8272df694d9981c63d89725f4ff6a4b4_prof);

    }

    // line 75
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_5c87c6846e5d0c6c9d3fb98b254ab30a7104fc647b51735722637c09ef7b58fd = $this->env->getExtension("native_profiler");
        $__internal_5c87c6846e5d0c6c9d3fb98b254ab30a7104fc647b51735722637c09ef7b58fd->enter($__internal_5c87c6846e5d0c6c9d3fb98b254ab30a7104fc647b51735722637c09ef7b58fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        // line 76
        echo "

 <script>    
 ";
        
        $__internal_5c87c6846e5d0c6c9d3fb98b254ab30a7104fc647b51735722637c09ef7b58fd->leave($__internal_5c87c6846e5d0c6c9d3fb98b254ab30a7104fc647b51735722637c09ef7b58fd_prof);

    }

    public function getTemplateName()
    {
        return ":documento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 76,  153 => 75,  131 => 58,  121 => 54,  117 => 53,  108 => 47,  98 => 40,  93 => 37,  89 => 36,  64 => 14,  56 => 8,  50 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %}*/
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Documentos</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12        col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('documento_new') }}" ><span>Agregar</span></a>*/
/*                             <br><br>                            */
/*                             <!-- BEGIN EXAMPLE TABLE PORTLET-->*/
/*                             <div class="portlet light bordered">*/
/*                                 <div class="portlet-title">*/
/*                                     <div class="caption font-green">*/
/*                                         <i class="icon-settings font-green"></i>*/
/*                                         <span class="caption-subject bold uppercase"></span>*/
/*                                     </div>*/
/*                                     <div class="tools"> </div>*/
/*                                 </div>*/
/*                                 <div class="portlet-body">*/
/*                                     <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th class="all" width="10%">Detalle</th>*/
/*                                                 <th class="all" width="10%">Editar</th>*/
/*                                                 <th class="all">Descripcion</th>*/
/*                                                 <th class="all">Fecha</th>                                              */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for documento in documentos%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('documento_show', { 'id': documento.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('documento_edit', { 'id': documento.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ documento.descripcion | raw }}</td>*/
/*                                                 <td>{{ documento.fechahora | date("d/m/Y") }}</td>*/
/*                                                      */
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                         </tbody>                                        */
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- END EXAMPLE TABLE PORTLET-->*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                                     */
/*                                         */
/*             <!-- END CONTENT BODY -->*/
/*             */
/*         </div>                                      */
/*         <!-- END CONTAINER -->*/
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts_extra %}*/
/* */
/* */
/*  <script>    */
/*  {% endblock %}*/
