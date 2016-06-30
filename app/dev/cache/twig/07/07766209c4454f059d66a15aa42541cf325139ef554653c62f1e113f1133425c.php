<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_96f5beaa20089dee3a8a19109afc8a0731f2c751278a8e8a4dbc66b7a5b2629e extends Twig_Template
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
        $__internal_117232f36baf451e2ed18d04e2163d1fdceb8e428dc818e85ddd1d3613919b4d = $this->env->getExtension("native_profiler");
        $__internal_117232f36baf451e2ed18d04e2163d1fdceb8e428dc818e85ddd1d3613919b4d->enter($__internal_117232f36baf451e2ed18d04e2163d1fdceb8e428dc818e85ddd1d3613919b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_117232f36baf451e2ed18d04e2163d1fdceb8e428dc818e85ddd1d3613919b4d->leave($__internal_117232f36baf451e2ed18d04e2163d1fdceb8e428dc818e85ddd1d3613919b4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
