<?php

/* ::base.html.twig */
class __TwigTemplate_c50492e3435a0597739cca8f1903d27bc5570d191588b1d8a0ab6166e8b91fe1 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo ".:: Manejador de Contenido Sitio MAT::. ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 24
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        echo " 
            ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
    }

    // line 130
    public function block_javascripts_extra($context, array $blocks = array())
    {
        echo " 
    ";
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
        return array (  329 => 130,  324 => 122,  314 => 49,  310 => 48,  306 => 47,  300 => 44,  294 => 41,  288 => 38,  284 => 37,  280 => 36,  274 => 33,  270 => 32,  265 => 30,  260 => 28,  255 => 27,  252 => 26,  245 => 24,  239 => 20,  233 => 17,  229 => 16,  223 => 13,  219 => 12,  214 => 10,  210 => 9,  206 => 8,  201 => 7,  195 => 5,  191 => 132,  189 => 130,  180 => 123,  178 => 122,  156 => 103,  146 => 96,  142 => 95,  137 => 93,  132 => 91,  128 => 90,  121 => 86,  117 => 85,  113 => 84,  109 => 83,  105 => 82,  101 => 81,  97 => 80,  93 => 79,  89 => 78,  85 => 77,  81 => 76,  77 => 75,  58 => 59,  50 => 55,  47 => 26,  45 => 24,  41 => 22,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
