<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6dbe0b25bbf20b47985047334691a097dd77ce07d916d62c9e3d96d84e3f0e4d extends Twig_Template
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
        $__internal_67569d666cd27627096a969815a5b68c5dadfa1c43dfbb15f3262a9b7282948b = $this->env->getExtension("native_profiler");
        $__internal_67569d666cd27627096a969815a5b68c5dadfa1c43dfbb15f3262a9b7282948b->enter($__internal_67569d666cd27627096a969815a5b68c5dadfa1c43dfbb15f3262a9b7282948b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_67569d666cd27627096a969815a5b68c5dadfa1c43dfbb15f3262a9b7282948b->leave($__internal_67569d666cd27627096a969815a5b68c5dadfa1c43dfbb15f3262a9b7282948b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
