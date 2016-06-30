<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fd28b6645dbf9c2eab1fb60573492d2550dc4df9e86df72352ad4ddbd39bdabc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb77c0e0a5efe282c32a9fdf180e6ede95a28d2c1f82490fa1aa6dba853f83a8 = $this->env->getExtension("native_profiler");
        $__internal_cb77c0e0a5efe282c32a9fdf180e6ede95a28d2c1f82490fa1aa6dba853f83a8->enter($__internal_cb77c0e0a5efe282c32a9fdf180e6ede95a28d2c1f82490fa1aa6dba853f83a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cb77c0e0a5efe282c32a9fdf180e6ede95a28d2c1f82490fa1aa6dba853f83a8->leave($__internal_cb77c0e0a5efe282c32a9fdf180e6ede95a28d2c1f82490fa1aa6dba853f83a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e86d2df75bdff29a0de2a5eef438aface1405755a96e64666c7429ed9ad2c263 = $this->env->getExtension("native_profiler");
        $__internal_e86d2df75bdff29a0de2a5eef438aface1405755a96e64666c7429ed9ad2c263->enter($__internal_e86d2df75bdff29a0de2a5eef438aface1405755a96e64666c7429ed9ad2c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e86d2df75bdff29a0de2a5eef438aface1405755a96e64666c7429ed9ad2c263->leave($__internal_e86d2df75bdff29a0de2a5eef438aface1405755a96e64666c7429ed9ad2c263_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
