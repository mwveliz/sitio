<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3c09db113da4d4b6602f6a564752a4594c8a931647516a3bc19baa91f4ead378 extends Twig_Template
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
        $__internal_7963079156d9622d8163efc4e742dc5a6fec05fbcfbbfe74fab520a7340e9ace = $this->env->getExtension("native_profiler");
        $__internal_7963079156d9622d8163efc4e742dc5a6fec05fbcfbbfe74fab520a7340e9ace->enter($__internal_7963079156d9622d8163efc4e742dc5a6fec05fbcfbbfe74fab520a7340e9ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7963079156d9622d8163efc4e742dc5a6fec05fbcfbbfe74fab520a7340e9ace->leave($__internal_7963079156d9622d8163efc4e742dc5a6fec05fbcfbbfe74fab520a7340e9ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
