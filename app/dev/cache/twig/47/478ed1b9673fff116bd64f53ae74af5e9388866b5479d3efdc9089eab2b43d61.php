<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0103ab04a69fdb27786775d7ea1657a7215f88763682765428bc86dfad4964cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_486d5ad592144ea9a5c870146549fee1bc1bd58eb596164d29b5cdc45c32720b = $this->env->getExtension("native_profiler");
        $__internal_486d5ad592144ea9a5c870146549fee1bc1bd58eb596164d29b5cdc45c32720b->enter($__internal_486d5ad592144ea9a5c870146549fee1bc1bd58eb596164d29b5cdc45c32720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_486d5ad592144ea9a5c870146549fee1bc1bd58eb596164d29b5cdc45c32720b->leave($__internal_486d5ad592144ea9a5c870146549fee1bc1bd58eb596164d29b5cdc45c32720b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8e6b9e198d4d44f190f6e168b43e6928e4eb3562fa266049216c78f327890d8 = $this->env->getExtension("native_profiler");
        $__internal_e8e6b9e198d4d44f190f6e168b43e6928e4eb3562fa266049216c78f327890d8->enter($__internal_e8e6b9e198d4d44f190f6e168b43e6928e4eb3562fa266049216c78f327890d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8e6b9e198d4d44f190f6e168b43e6928e4eb3562fa266049216c78f327890d8->leave($__internal_e8e6b9e198d4d44f190f6e168b43e6928e4eb3562fa266049216c78f327890d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9fcb1d36727c59924c693b84286249b82eb313b8deeb7fe71d2dab3fb98b1e0 = $this->env->getExtension("native_profiler");
        $__internal_e9fcb1d36727c59924c693b84286249b82eb313b8deeb7fe71d2dab3fb98b1e0->enter($__internal_e9fcb1d36727c59924c693b84286249b82eb313b8deeb7fe71d2dab3fb98b1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9fcb1d36727c59924c693b84286249b82eb313b8deeb7fe71d2dab3fb98b1e0->leave($__internal_e9fcb1d36727c59924c693b84286249b82eb313b8deeb7fe71d2dab3fb98b1e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53e1218631c67a57c126f889b72f40c16c3766390a099669e2720d4d296798ad = $this->env->getExtension("native_profiler");
        $__internal_53e1218631c67a57c126f889b72f40c16c3766390a099669e2720d4d296798ad->enter($__internal_53e1218631c67a57c126f889b72f40c16c3766390a099669e2720d4d296798ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53e1218631c67a57c126f889b72f40c16c3766390a099669e2720d4d296798ad->leave($__internal_53e1218631c67a57c126f889b72f40c16c3766390a099669e2720d4d296798ad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
