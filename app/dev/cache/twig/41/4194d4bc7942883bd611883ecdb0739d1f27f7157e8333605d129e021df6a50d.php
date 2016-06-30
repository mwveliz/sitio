<?php

/* ::base.html.twig */
class __TwigTemplate_89d09eea3a618885a2b49acf04ebd93dd4fd3de173218d301b1524bca11736c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheets_extra' => array($this, 'block_stylesheets_extra'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'javascripts_extra' => array($this, 'block_javascripts_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75ebe877aac82413efc5a4eeec8b113a220677f0143fecce3a0a0b336717e2b8 = $this->env->getExtension("native_profiler");
        $__internal_75ebe877aac82413efc5a4eeec8b113a220677f0143fecce3a0a0b336717e2b8->enter($__internal_75ebe877aac82413efc5a4eeec8b113a220677f0143fecce3a0a0b336717e2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>     
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\" />
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        
        
        ";
        // line 24
        $this->displayBlock('stylesheets_extra', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\" />
    </head>
    <body>
        <div>
            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/imagenes/header.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"padding: 5px;\" />
            </div>
        <nav class=\"navbar navbar-default sidebar\" role=\"navigation\">
    <div class=\"container-fluid\">
    <div class=\"navbar-header\">
                    
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-sidebar-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>      
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-sidebar-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Inicio<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-home\"></span></a></li>
                        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("informacion_index");
        echo "\">Informacion</a></li>
                        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("noticia_index");
        echo "\">Noticias</a></li>
                        <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("noticiainterna_index");
        echo "\">Internas</a></li>
                        <!-- <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("destacado_index");
        echo "\">Destacado</a></li> -->
                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("documento_index");
        echo "\">Documentos</a></li>
                        <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("ente_index");
        echo "\">Entes</a></li>
                        <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("video_index");
        echo "\">Video</a></li>
                        <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("banner_index");
        echo "\">Banner</a></li>
                        <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("enlace_index");
        echo "\">Enlace</a></li>
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("estadistica_index");
        echo "\">Estadistica</a></li>
                       <!-- <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("reporteagricola_index");
        echo "\">Reporte Clima</a></li> -->
                      <!-- <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "noticia"));
        echo "\">Posiciones</a></li> -->
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sistema<span class=\"caret\"></span><span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-user\"></span></a>
          <ul class=\"dropdown-menu forAnimate\" role=\"menu\">
                 <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\">Usuario</a></li>
                        <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("menu_index");
        echo "\">Menu</a></li>
                        
                    <!-- <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("imagen_index");
        echo "\">Imagenes</a></li> -->
          
                        <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("tipodocumento_index");
        echo "\">Tipo de Documento</a></li>
                        <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\">Grupos</a></li>
          </ul>
        </li>          
        
        <li>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                               
                                <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" >
                                    <span class=\"glyphicon glyphicon-log-out text-success\">   
                                    </span>
                             </a>
                        </li> 
      </ul>
    </div>
  </div>
</nav>
            
            
        
            </div>
        </div>

        <br><br><br><br><br><br>
        <div class=\"row\">
    
  <div class=\"col-xs-12 col-sm-6  col-md-8\">
    ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "    </div>                                  
</div>    
</body>




";
        // line 130
        $this->displayBlock('javascripts_extra', $context, $blocks);
        // line 132
        echo "</html>";
        
        $__internal_75ebe877aac82413efc5a4eeec8b113a220677f0143fecce3a0a0b336717e2b8->leave($__internal_75ebe877aac82413efc5a4eeec8b113a220677f0143fecce3a0a0b336717e2b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f213a0ea477f1ce510e845f7b738bfc07291a55aaf41e3ecbdb444d587f1d565 = $this->env->getExtension("native_profiler");
        $__internal_f213a0ea477f1ce510e845f7b738bfc07291a55aaf41e3ecbdb444d587f1d565->enter($__internal_f213a0ea477f1ce510e845f7b738bfc07291a55aaf41e3ecbdb444d587f1d565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo ".:: Manejador de Contenido Sitio MAT::. ";
        
        $__internal_f213a0ea477f1ce510e845f7b738bfc07291a55aaf41e3ecbdb444d587f1d565->leave($__internal_f213a0ea477f1ce510e845f7b738bfc07291a55aaf41e3ecbdb444d587f1d565_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b76030fe23d6b100af1f783088ab63a0684ab3a01c8f4e7f4b7ba26f096059c = $this->env->getExtension("native_profiler");
        $__internal_0b76030fe23d6b100af1f783088ab63a0684ab3a01c8f4e7f4b7ba26f096059c->enter($__internal_0b76030fe23d6b100af1f783088ab63a0684ab3a01c8f4e7f4b7ba26f096059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "                       
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("sidemenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
             <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap-datepicker/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet/css\" type=\"text/css\" />       
              <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />        
        ";
        
        $__internal_0b76030fe23d6b100af1f783088ab63a0684ab3a01c8f4e7f4b7ba26f096059c->leave($__internal_0b76030fe23d6b100af1f783088ab63a0684ab3a01c8f4e7f4b7ba26f096059c_prof);

    }

    // line 24
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_8d463a8840be808e69fb1e82334c7bc08567bf669e8c78fc1f6996b2ac3d7850 = $this->env->getExtension("native_profiler");
        $__internal_8d463a8840be808e69fb1e82334c7bc08567bf669e8c78fc1f6996b2ac3d7850->enter($__internal_8d463a8840be808e69fb1e82334c7bc08567bf669e8c78fc1f6996b2ac3d7850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
            ";
        
        $__internal_8d463a8840be808e69fb1e82334c7bc08567bf669e8c78fc1f6996b2ac3d7850->leave($__internal_8d463a8840be808e69fb1e82334c7bc08567bf669e8c78fc1f6996b2ac3d7850_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d70add1df0b13930bbf2b6c4a02c494f0941216619bab67ab6cdab1e29bec084 = $this->env->getExtension("native_profiler");
        $__internal_d70add1df0b13930bbf2b6c4a02c494f0941216619bab67ab6cdab1e29bec084->enter($__internal_d70add1df0b13930bbf2b6c4a02c494f0941216619bab67ab6cdab1e29bec084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/jquery/jquery.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>
                <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>

        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>
               <!--[if lt IE 9]>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
<![endif]-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/pages/scripts/table-datatables-responsive.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/metronic/pages/scripts/ui-confirmations.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.colorbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      
        
        <!-- END PAGE LEVEL SCRIPTS -->

    ";
        
        $__internal_d70add1df0b13930bbf2b6c4a02c494f0941216619bab67ab6cdab1e29bec084->leave($__internal_d70add1df0b13930bbf2b6c4a02c494f0941216619bab67ab6cdab1e29bec084_prof);

    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        $__internal_776813c16d7607c32efb513152ba50874dc2b9eecfdccc77466742601583c0aa = $this->env->getExtension("native_profiler");
        $__internal_776813c16d7607c32efb513152ba50874dc2b9eecfdccc77466742601583c0aa->enter($__internal_776813c16d7607c32efb513152ba50874dc2b9eecfdccc77466742601583c0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_776813c16d7607c32efb513152ba50874dc2b9eecfdccc77466742601583c0aa->leave($__internal_776813c16d7607c32efb513152ba50874dc2b9eecfdccc77466742601583c0aa_prof);

    }

    // line 130
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_2ae83cd3af7fae0badd743adbaed4e7821d5ad55fc325a05ea91f6cf1e203a36 = $this->env->getExtension("native_profiler");
        $__internal_2ae83cd3af7fae0badd743adbaed4e7821d5ad55fc325a05ea91f6cf1e203a36->enter($__internal_2ae83cd3af7fae0badd743adbaed4e7821d5ad55fc325a05ea91f6cf1e203a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
    ";
        
        $__internal_2ae83cd3af7fae0badd743adbaed4e7821d5ad55fc325a05ea91f6cf1e203a36->leave($__internal_2ae83cd3af7fae0badd743adbaed4e7821d5ad55fc325a05ea91f6cf1e203a36_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 130,  354 => 122,  341 => 49,  337 => 48,  333 => 47,  327 => 44,  321 => 41,  315 => 38,  311 => 37,  307 => 36,  301 => 33,  297 => 32,  292 => 30,  287 => 28,  282 => 27,  276 => 26,  263 => 24,  254 => 20,  248 => 17,  244 => 16,  238 => 13,  234 => 12,  229 => 10,  225 => 9,  221 => 8,  213 => 7,  201 => 5,  194 => 132,  192 => 130,  183 => 123,  181 => 122,  159 => 103,  149 => 96,  145 => 95,  140 => 93,  135 => 91,  131 => 90,  124 => 86,  120 => 85,  116 => 84,  112 => 83,  108 => 82,  104 => 81,  100 => 80,  96 => 79,  92 => 78,  88 => 77,  84 => 76,  80 => 75,  61 => 59,  53 => 55,  50 => 26,  48 => 24,  44 => 22,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}.:: Manejador de Contenido Sitio MAT::. {% endblock %}</title>     */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2" />*/
/*         {% block stylesheets %}                       */
/*             <link href="{{ asset('/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('sidemenu.css') }}" rel="stylesheet" type="text/css" />*/
/*              <link href="{{ asset ('/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet/css" type="text/css" />       */
/*               <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         <link href="{{ asset('/metronic/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('/metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*         <!-- END PAGE LEVEL PLUGINS -->*/
/*         <!-- BEGIN THEME GLOBAL STYLES -->*/
/*         <link href="{{ asset('/metronic/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/*         <link href="{{ asset('/metronic/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <!-- END THEME GLOBAL STYLES -->*/
/*         */
/*         <link href="{{ asset('/css/colorbox.css') }}" rel="stylesheet" type="text/css" />        */
/*         {% endblock %}*/
/*         */
/*         */
/*         {% block stylesheets_extra %} */
/*             {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="{{ asset('/jquery/jquery.js') }}"  type="text/javascript" ></script>*/
/*                 <script src="{{ asset('/js/jquery-migrate.min.js') }}"  type="text/javascript" ></script>*/
/* */
/*         <script src="{{ asset('/bootstrap/js/bootstrap.js') }}"  type="text/javascript" ></script>*/
/*                <!--[if lt IE 9]>*/
/* <script src="{{ asset('/metronic/global/plugins/respond.min.js') }}"></script>*/
/* <script src="{{ asset('/metronic/global/plugins/excanvas.min.js') }}"></script> */
/* <![endif]-->*/
/*         <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         <script src="{{ asset('/metronic/global/scripts/datatable.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('/metronic/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('/metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>*/
/*         <!-- END PAGE LEVEL PLUGINS -->*/
/*         <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/*         <script src="{{ asset('/metronic/pages/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>*/
/*         <!-- END PAGE LEVEL SCRIPTS -->*/
/*         <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         <script src="{{ asset('/metronic/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js') }}" type="text/javascript"></script>*/
/*         <!-- END PAGE LEVEL PLUGINS -->*/
/*         <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/*         <script src="{{ asset('/metronic/pages/scripts/ui-confirmations.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('/js/jquery.colorbox.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>*/
/*       */
/*         */
/*         <!-- END PAGE LEVEL SCRIPTS -->*/
/* */
/*     {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             <img src="{{ asset('/imagenes/header.png') }}" class="img-responsive" style="padding: 5px;" />*/
/*             </div>*/
/*         <nav class="navbar navbar-default sidebar" role="navigation">*/
/*     <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*                     */
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>      */
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="#">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>*/
/*                         <li><a href="{{ path('informacion_index') }}">Informacion</a></li>*/
/*                         <li><a href="{{ path('noticia_index') }}">Noticias</a></li>*/
/*                         <li><a href="{{ path('noticiainterna_index') }}">Internas</a></li>*/
/*                         <!-- <li><a href="{{ path('destacado_index') }}">Destacado</a></li> -->*/
/*                         <li><a href="{{ path('documento_index') }}">Documentos</a></li>*/
/*                         <li><a href="{{ path('ente_index') }}">Entes</a></li>*/
/*                         <li><a href="{{ path('video_index') }}">Video</a></li>*/
/*                         <li><a href="{{ path('banner_index') }}">Banner</a></li>*/
/*                         <li><a href="{{ path('enlace_index') }}">Enlace</a></li>*/
/*                         <li><a href="{{ path('estadistica_index') }}">Estadistica</a></li>*/
/*                        <!-- <li><a href="{{ path('reporteagricola_index') }}">Reporte Clima</a></li> -->*/
/*                       <!-- <li><a href="{{ path('tabla_index', { 'seleccion': 'noticia'}) }}">Posiciones</a></li> -->*/
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistema<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>*/
/*           <ul class="dropdown-menu forAnimate" role="menu">*/
/*                  <li><a href="{{ path('usuario_index') }}">Usuario</a></li>*/
/*                         <li><a href="{{ path('menu_index') }}">Menu</a></li>*/
/*                         */
/*                     <!-- <li><a href="{{ path('imagen_index') }}">Imagenes</a></li> -->*/
/*           */
/*                         <li><a href="{{ path('tipodocumento_index') }}">Tipo de Documento</a></li>*/
/*                         <li><a href="{{ path('usuario_index') }}">Grupos</a></li>*/
/*           </ul>*/
/*         </li>          */
/*         */
/*         <li>*/
/*                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                                                                */
/*                                 <a href="{{ path('fos_user_security_logout') }}" >*/
/*                                     <span class="glyphicon glyphicon-log-out text-success">   */
/*                                     </span>*/
/*                              </a>*/
/*                         </li> */
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/*             */
/*             */
/*         */
/*             </div>*/
/*         </div>*/
/* */
/*         <br><br><br><br><br><br>*/
/*         <div class="row">*/
/*     */
/*   <div class="col-xs-12 col-sm-6  col-md-8">*/
/*     {% block body %}{% endblock %}*/
/*     </div>                                  */
/* </div>    */
/* </body>*/
/* */
/* */
/* */
/* */
/* {% block javascripts_extra %} */
/*     {% endblock %}*/
/* </html>*/
