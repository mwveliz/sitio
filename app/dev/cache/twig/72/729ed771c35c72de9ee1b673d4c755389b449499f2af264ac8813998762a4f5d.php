<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_019e1a933a2485675c9f6738a5926330a395b7ce19c3946ad2f2ebfabea7be13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_199f3a92fb89e06f2b980d78ca8c3e32f40cf45b6dfc241f46747ceeb4acc9e9 = $this->env->getExtension("native_profiler");
        $__internal_199f3a92fb89e06f2b980d78ca8c3e32f40cf45b6dfc241f46747ceeb4acc9e9->enter($__internal_199f3a92fb89e06f2b980d78ca8c3e32f40cf45b6dfc241f46747ceeb4acc9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_199f3a92fb89e06f2b980d78ca8c3e32f40cf45b6dfc241f46747ceeb4acc9e9->leave($__internal_199f3a92fb89e06f2b980d78ca8c3e32f40cf45b6dfc241f46747ceeb4acc9e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
