<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_36a907d19ce4ae0a0e226719dc943be9149fa0e599d96bde3ac782f843fac486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>       
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 153
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 157
        echo "    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Manejador de Contenido MAT";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\" />
            <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/background.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 69
        echo "

                        </div>                     
                    </div>  
                </div>
                <div id=\"signupbox\" style=\"display:none; margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">Sign Up</div>
                            <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"#\" onclick=\"\$('#signupbox').hide();
                                    \$('#loginbox').show()\">Sign In</a></div>
                        </div>  
                        <div class=\"panel-body\" >
                            <form id=\"signupform\" class=\"form-horizontal\" role=\"form\">

                                <div id=\"signupalert\" style=\"display:none\" class=\"alert alert-danger\">
                                    <p>Error:</p>
                                    <span></span>
                                </div>



                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-md-3 control-label\">Email</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"firstname\" class=\"col-md-3 control-label\">First Name</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"firstname\" placeholder=\"First Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"lastname\" class=\"col-md-3 control-label\">Last Name</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"lastname\" placeholder=\"Last Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"col-md-3 control-label\">Password</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"password\" class=\"form-control\" name=\"passwd\" placeholder=\"Password\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"icode\" class=\"col-md-3 control-label\">Invitation Code</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"icode\" placeholder=\"\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <!-- Button -->                                        
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        <button id=\"btn-signup\" type=\"button\" class=\"btn btn-info\"><i class=\"icon-hand-right\"></i> &nbsp Sign Up</button>
                                        <span style=\"margin-left:8px;\">or</span>  
                                    </div>
                                </div>

                                <div style=\"border-top: 1px solid #999; padding-top:20px\"  class=\"form-group\">

                                    <div class=\"col-md-offset-3 col-md-9\">
                                        <button id=\"btn-fbsignup\" type=\"button\" class=\"btn btn-primary\"><i class=\"icon-facebook\"></i>   Sign Up with Facebook</button>
                                    </div>                                           

                                </div>



                            </form>
                        </div>
                    </div>




                </div> 
            </div>

        ";
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 16
            echo "                    <div class=\"alert alert-danger\">
                        <center>
                            <strong>
                                <h4>
                                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
                                </h4>
                            </strong>
                        </center>
                    </div>
                ";
        }
        // line 25
        echo "            
                <br><br>
                <br><br>
                <br>
                <div class=\"container\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/imagenes/logo_mat.png"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />
                    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">                    
                        <div class=\"panel panel-info\" >

                            <div style=\"padding-top:30px\" class=\"panel-body\" >

                                <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                                <form id=\"loginform\" class=\"form-horizontal\" action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"usuario\"> 
                                    </div>

                                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"contraseña\">
                                    </div>

                                    <div style=\"margin-top:10px\" class=\"form-group\">
                                        <!-- Button -->

                                        <div class=\"col-md-12\">
                                            <input type=\"submit\" id=\"_submit\" class=\"btn btn-success btn btn-lg btn-block\" name=\"_submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Acceder"), "html", null, true);
        echo "\" />
                                        </div>
                                    </div>


                                    <div class=\"form-group\">
                                        <div class=\"col-md-12 control\">
                                            <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                                En caso de algún incoveniente por favor comuniquese con el Departamento de Informática
                                            </div>
                                        </div>
                                    </div>    
                                </form>     
                            ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery/jquery.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script> 
            <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>  
        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 155,  255 => 154,  252 => 153,  234 => 55,  219 => 43,  213 => 40,  208 => 38,  197 => 30,  190 => 25,  181 => 20,  175 => 16,  172 => 15,  169 => 14,  82 => 69,  80 => 14,  77 => 13,  75 => 12,  72 => 11,  66 => 8,  62 => 7,  57 => 6,  54 => 5,  48 => 4,  43 => 157,  40 => 153,  38 => 11,  35 => 10,  33 => 5,  29 => 4,  24 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Manejador de Contenido MAT{% endblock %}</title>       */
/*         {% block stylesheets %}*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2" />*/
/*             <link href="{{ asset('/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('/css/background.css') }}" rel="stylesheet" type="text/css" />*/
/*         {% endblock %}*/
/*     <body>*/
/*         {% block body %}*/
/*             {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*             {% block fos_user_content %}*/
/*                 {% if error %}*/
/*                     <div class="alert alert-danger">*/
/*                         <center>*/
/*                             <strong>*/
/*                                 <h4>*/
/*                                     {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                                 </h4>*/
/*                             </strong>*/
/*                         </center>*/
/*                     </div>*/
/*                 {% endif %}            */
/*                 <br><br>*/
/*                 <br><br>*/
/*                 <br>*/
/*                 <div class="container">*/
/*                     <img src="{{ asset('/imagenes/logo_mat.png') }}" class="img-responsive center-block" />*/
/*                     <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    */
/*                         <div class="panel panel-info" >*/
/* */
/*                             <div style="padding-top:30px" class="panel-body" >*/
/* */
/*                                 <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>*/
/* */
/*                                 <form id="loginform" class="form-horizontal" action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/*                                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                                     <div style="margin-bottom: 25px" class="input-group">*/
/*                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/*                                         <input id="login-username" type="text" class="form-control" name="_username" value="{{ last_username }}" required="required" placeholder="usuario"> */
/*                                     </div>*/
/* */
/*                                     <div style="margin-bottom: 25px" class="input-group">*/
/*                                         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                                         <input id="login-password" type="password" class="form-control" name="_password" required="required" placeholder="contraseña">*/
/*                                     </div>*/
/* */
/*                                     <div style="margin-top:10px" class="form-group">*/
/*                                         <!-- Button -->*/
/* */
/*                                         <div class="col-md-12">*/
/*                                             <input type="submit" id="_submit" class="btn btn-success btn btn-lg btn-block" name="_submit" value="{{ 'Acceder'|trans }}" />*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="col-md-12 control">*/
/*                                             <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >*/
/*                                                 En caso de algún incoveniente por favor comuniquese con el Departamento de Informática*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>    */
/*                                 </form>     */
/*                             {% endblock fos_user_content %}*/
/* */
/* */
/*                         </div>                     */
/*                     </div>  */
/*                 </div>*/
/*                 <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*                     <div class="panel panel-info">*/
/*                         <div class="panel-heading">*/
/*                             <div class="panel-title">Sign Up</div>*/
/*                             <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide();*/
/*                                     $('#loginbox').show()">Sign In</a></div>*/
/*                         </div>  */
/*                         <div class="panel-body" >*/
/*                             <form id="signupform" class="form-horizontal" role="form">*/
/* */
/*                                 <div id="signupalert" style="display:none" class="alert alert-danger">*/
/*                                     <p>Error:</p>*/
/*                                     <span></span>*/
/*                                 </div>*/
/* */
/* */
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="email" class="col-md-3 control-label">Email</label>*/
/*                                     <div class="col-md-9">*/
/*                                         <input type="text" class="form-control" name="email" placeholder="Email Address">*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="firstname" class="col-md-3 control-label">First Name</label>*/
/*                                     <div class="col-md-9">*/
/*                                         <input type="text" class="form-control" name="firstname" placeholder="First Name">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="lastname" class="col-md-3 control-label">Last Name</label>*/
/*                                     <div class="col-md-9">*/
/*                                         <input type="text" class="form-control" name="lastname" placeholder="Last Name">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="password" class="col-md-3 control-label">Password</label>*/
/*                                     <div class="col-md-9">*/
/*                                         <input type="password" class="form-control" name="passwd" placeholder="Password">*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="icode" class="col-md-3 control-label">Invitation Code</label>*/
/*                                     <div class="col-md-9">*/
/*                                         <input type="text" class="form-control" name="icode" placeholder="">*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <!-- Button -->                                        */
/*                                     <div class="col-md-offset-3 col-md-9">*/
/*                                         <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>*/
/*                                         <span style="margin-left:8px;">or</span>  */
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">*/
/* */
/*                                     <div class="col-md-offset-3 col-md-9">*/
/*                                         <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>*/
/*                                     </div>                                           */
/* */
/*                                 </div>*/
/* */
/* */
/* */
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/*                 </div> */
/*             </div>*/
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('jquery/jquery.js') }}"  type="text/javascript" ></script> */
/*             <script src="{{ asset('/bootstrap/js/bootstrap.js') }}"  type="text/javascript" ></script>  */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
