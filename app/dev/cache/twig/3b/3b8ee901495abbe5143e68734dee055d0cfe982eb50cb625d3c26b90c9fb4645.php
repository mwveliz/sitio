<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e80e6c2a4203cbda847a956ee82e67d1384bf80c077de72f510cf89f6d440bd5 extends Twig_Template
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
        $__internal_547b2252ef1d7e7614e48746a8d4c81e59a8f4fe1a0ccfe6e07644fd6e25655d = $this->env->getExtension("native_profiler");
        $__internal_547b2252ef1d7e7614e48746a8d4c81e59a8f4fe1a0ccfe6e07644fd6e25655d->enter($__internal_547b2252ef1d7e7614e48746a8d4c81e59a8f4fe1a0ccfe6e07644fd6e25655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

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
        
        $__internal_547b2252ef1d7e7614e48746a8d4c81e59a8f4fe1a0ccfe6e07644fd6e25655d->leave($__internal_547b2252ef1d7e7614e48746a8d4c81e59a8f4fe1a0ccfe6e07644fd6e25655d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a581b0f9a74a7cb1fe2a21d8197209a570777d8ea5c9bb486fbc6b13dff82460 = $this->env->getExtension("native_profiler");
        $__internal_a581b0f9a74a7cb1fe2a21d8197209a570777d8ea5c9bb486fbc6b13dff82460->enter($__internal_a581b0f9a74a7cb1fe2a21d8197209a570777d8ea5c9bb486fbc6b13dff82460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Manejador de Contenido MAT";
        
        $__internal_a581b0f9a74a7cb1fe2a21d8197209a570777d8ea5c9bb486fbc6b13dff82460->leave($__internal_a581b0f9a74a7cb1fe2a21d8197209a570777d8ea5c9bb486fbc6b13dff82460_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4aaba6b4d4b3ec620a194254650dc3e52b5b7ce3c19144f64dcd0b35df6b7d5 = $this->env->getExtension("native_profiler");
        $__internal_c4aaba6b4d4b3ec620a194254650dc3e52b5b7ce3c19144f64dcd0b35df6b7d5->enter($__internal_c4aaba6b4d4b3ec620a194254650dc3e52b5b7ce3c19144f64dcd0b35df6b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c4aaba6b4d4b3ec620a194254650dc3e52b5b7ce3c19144f64dcd0b35df6b7d5->leave($__internal_c4aaba6b4d4b3ec620a194254650dc3e52b5b7ce3c19144f64dcd0b35df6b7d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbd2d312ae3f5fceabe5e1a52f47f97b6bdaad6f08ad3cc322725bec1650d075 = $this->env->getExtension("native_profiler");
        $__internal_bbd2d312ae3f5fceabe5e1a52f47f97b6bdaad6f08ad3cc322725bec1650d075->enter($__internal_bbd2d312ae3f5fceabe5e1a52f47f97b6bdaad6f08ad3cc322725bec1650d075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bbd2d312ae3f5fceabe5e1a52f47f97b6bdaad6f08ad3cc322725bec1650d075->leave($__internal_bbd2d312ae3f5fceabe5e1a52f47f97b6bdaad6f08ad3cc322725bec1650d075_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bef0699d7f34fb7128f98b0bf80c5b82f97a79500772c9eeefac03171c583d57 = $this->env->getExtension("native_profiler");
        $__internal_bef0699d7f34fb7128f98b0bf80c5b82f97a79500772c9eeefac03171c583d57->enter($__internal_bef0699d7f34fb7128f98b0bf80c5b82f97a79500772c9eeefac03171c583d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "                ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                    <div class=\"alert alert-danger\">
                        <center>
                            <strong>
                                <h4>
                                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_bef0699d7f34fb7128f98b0bf80c5b82f97a79500772c9eeefac03171c583d57->leave($__internal_bef0699d7f34fb7128f98b0bf80c5b82f97a79500772c9eeefac03171c583d57_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eee23f4ec750afebcec9d8d39c52bf1b7cfb3c3b4b22936a4dec6093b121089e = $this->env->getExtension("native_profiler");
        $__internal_eee23f4ec750afebcec9d8d39c52bf1b7cfb3c3b4b22936a4dec6093b121089e->enter($__internal_eee23f4ec750afebcec9d8d39c52bf1b7cfb3c3b4b22936a4dec6093b121089e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery/jquery.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script> 
            <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>  
        ";
        
        $__internal_eee23f4ec750afebcec9d8d39c52bf1b7cfb3c3b4b22936a4dec6093b121089e->leave($__internal_eee23f4ec750afebcec9d8d39c52bf1b7cfb3c3b4b22936a4dec6093b121089e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  293 => 155,  288 => 154,  282 => 153,  261 => 55,  246 => 43,  240 => 40,  235 => 38,  224 => 30,  217 => 25,  208 => 20,  202 => 16,  199 => 15,  193 => 14,  103 => 69,  101 => 14,  98 => 13,  96 => 12,  90 => 11,  81 => 8,  77 => 7,  72 => 6,  66 => 5,  54 => 4,  46 => 157,  43 => 153,  41 => 11,  38 => 10,  36 => 5,  32 => 4,  27 => 1,);
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
