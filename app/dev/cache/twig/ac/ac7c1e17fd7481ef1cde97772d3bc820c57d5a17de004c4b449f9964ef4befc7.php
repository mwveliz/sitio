<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a7797f5389b59a4d02af7fc599d01eb504b943ac01965aee1567d390ad5330f6 extends Twig_Template
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
        $__internal_499cfa75adcf2a7753cb57ccc478f2afb8530c26af2a6e21e182aa41e6ccbf19 = $this->env->getExtension("native_profiler");
        $__internal_499cfa75adcf2a7753cb57ccc478f2afb8530c26af2a6e21e182aa41e6ccbf19->enter($__internal_499cfa75adcf2a7753cb57ccc478f2afb8530c26af2a6e21e182aa41e6ccbf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_499cfa75adcf2a7753cb57ccc478f2afb8530c26af2a6e21e182aa41e6ccbf19->leave($__internal_499cfa75adcf2a7753cb57ccc478f2afb8530c26af2a6e21e182aa41e6ccbf19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
