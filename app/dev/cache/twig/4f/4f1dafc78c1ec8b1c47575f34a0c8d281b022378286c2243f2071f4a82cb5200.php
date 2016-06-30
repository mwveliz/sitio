<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d1d63789f8ff4e407877a59f419ecaade5d117dfdfb2e98222f4486ea727b811 extends Twig_Template
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
        $__internal_63670d02c2f86aad713a172c2ab2ab2e85b2ce25c6093f3955d172f25083c93b = $this->env->getExtension("native_profiler");
        $__internal_63670d02c2f86aad713a172c2ab2ab2e85b2ce25c6093f3955d172f25083c93b->enter($__internal_63670d02c2f86aad713a172c2ab2ab2e85b2ce25c6093f3955d172f25083c93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_63670d02c2f86aad713a172c2ab2ab2e85b2ce25c6093f3955d172f25083c93b->leave($__internal_63670d02c2f86aad713a172c2ab2ab2e85b2ce25c6093f3955d172f25083c93b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
