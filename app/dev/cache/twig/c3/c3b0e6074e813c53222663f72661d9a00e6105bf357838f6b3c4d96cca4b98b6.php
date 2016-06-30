<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_fe0221af42f2d022ae1de99cb4fb42cea3d0e0292beb40869113bce2718a5ebc extends Twig_Template
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
        $__internal_71b7dac112969b034230426e7eafebc1b73838556886c2b2f7b739944acc9bdf = $this->env->getExtension("native_profiler");
        $__internal_71b7dac112969b034230426e7eafebc1b73838556886c2b2f7b739944acc9bdf->enter($__internal_71b7dac112969b034230426e7eafebc1b73838556886c2b2f7b739944acc9bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_71b7dac112969b034230426e7eafebc1b73838556886c2b2f7b739944acc9bdf->leave($__internal_71b7dac112969b034230426e7eafebc1b73838556886c2b2f7b739944acc9bdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
