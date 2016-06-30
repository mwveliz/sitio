<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ae05279feb2e4b91aa4237cc67b1ff1f2af5ae706b332365650b914907ef6993 extends Twig_Template
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
        $__internal_7cd867a8c2f1e175ac6048a865710dbbb3756fbdbbc8c850341bbaf4620a67b1 = $this->env->getExtension("native_profiler");
        $__internal_7cd867a8c2f1e175ac6048a865710dbbb3756fbdbbc8c850341bbaf4620a67b1->enter($__internal_7cd867a8c2f1e175ac6048a865710dbbb3756fbdbbc8c850341bbaf4620a67b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7cd867a8c2f1e175ac6048a865710dbbb3756fbdbbc8c850341bbaf4620a67b1->leave($__internal_7cd867a8c2f1e175ac6048a865710dbbb3756fbdbbc8c850341bbaf4620a67b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
