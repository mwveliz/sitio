<?php

/* :imagen:index.html.twig */
class __TwigTemplate_1769ff719d0331ad7e96266f904e32976d1a41411cb966ba67fc07e6b0aa19fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":imagen:index.html.twig", 1);
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
        $__internal_cdffe45b67e05e0b2ec79bb0aaae3aa97a83cfd6f4d852e94454be0e62f83d6a = $this->env->getExtension("native_profiler");
        $__internal_cdffe45b67e05e0b2ec79bb0aaae3aa97a83cfd6f4d852e94454be0e62f83d6a->enter($__internal_cdffe45b67e05e0b2ec79bb0aaae3aa97a83cfd6f4d852e94454be0e62f83d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":imagen:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdffe45b67e05e0b2ec79bb0aaae3aa97a83cfd6f4d852e94454be0e62f83d6a->leave($__internal_cdffe45b67e05e0b2ec79bb0aaae3aa97a83cfd6f4d852e94454be0e62f83d6a_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_5318af7ed9e9f9da1431606fe5e0eb3907fa2ad546bd921f8bcbf6d562ef4ef2 = $this->env->getExtension("native_profiler");
        $__internal_5318af7ed9e9f9da1431606fe5e0eb3907fa2ad546bd921f8bcbf6d562ef4ef2->enter($__internal_5318af7ed9e9f9da1431606fe5e0eb3907fa2ad546bd921f8bcbf6d562ef4ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_5318af7ed9e9f9da1431606fe5e0eb3907fa2ad546bd921f8bcbf6d562ef4ef2->leave($__internal_5318af7ed9e9f9da1431606fe5e0eb3907fa2ad546bd921f8bcbf6d562ef4ef2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_81c35f0b11298ee46150211373d18487ae0b2c5b960efd8b75ec62a8a6c3f2fd = $this->env->getExtension("native_profiler");
        $__internal_81c35f0b11298ee46150211373d18487ae0b2c5b960efd8b75ec62a8a6c3f2fd->enter($__internal_81c35f0b11298ee46150211373d18487ae0b2c5b960efd8b75ec62a8a6c3f2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Imagen</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("imagen_new");
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagens"]) ? $context["imagens"] : $this->getContext($context, "imagens")));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 36
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imagen_show", array("id" => $this->getAttribute($context["imagen"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imagen_edit", array("id" => $this->getAttribute($context["imagen"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 52
            echo $this->getAttribute($context["imagen"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " 
                                        </tbody>                                        
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
        
        $__internal_81c35f0b11298ee46150211373d18487ae0b2c5b960efd8b75ec62a8a6c3f2fd->leave($__internal_81c35f0b11298ee46150211373d18487ae0b2c5b960efd8b75ec62a8a6c3f2fd_prof);

    }

    // line 72
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_ac4353babc7a7b6b8191214f9f88bfb36148e951f47be16ad057a9ddf31f5060 = $this->env->getExtension("native_profiler");
        $__internal_ac4353babc7a7b6b8191214f9f88bfb36148e951f47be16ad057a9ddf31f5060->enter($__internal_ac4353babc7a7b6b8191214f9f88bfb36148e951f47be16ad057a9ddf31f5060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 


 <script>    
 ";
        
        $__internal_ac4353babc7a7b6b8191214f9f88bfb36148e951f47be16ad057a9ddf31f5060->leave($__internal_ac4353babc7a7b6b8191214f9f88bfb36148e951f47be16ad057a9ddf31f5060_prof);

    }

    public function getTemplateName()
    {
        return ":imagen:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 72,  125 => 54,  116 => 52,  107 => 46,  97 => 39,  92 => 36,  88 => 35,  64 => 14,  56 => 8,  50 => 7,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Imagen</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('imagen_new') }}" ><span>Agregar</span></a>*/
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
/*                                                 <th class="all">Descripcion</th>                                               */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for imagen in imagens%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('imagen_show', { 'id': imagen.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('imagen_edit', { 'id': imagen.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ imagen.descripcion | raw }}</td>                                                */
/*                                             </tr>*/
/*                                         {% endfor %} */
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
/*         </div>                                       */
/*         <!-- END CONTAINER -->*/
/*      */
/* {% endblock %}*/
/* */
/* {% block javascripts_extra %} */
/* */
/* */
/*  <script>    */
/*  {% endblock %}*/
/*     */
