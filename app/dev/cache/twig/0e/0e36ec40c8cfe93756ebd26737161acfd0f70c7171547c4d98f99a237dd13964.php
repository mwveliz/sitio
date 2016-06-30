<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_554a39858ead8ca8b0cde28eeb398cd4b2eb78564a1eb27d3b63b5ee12d37aff extends Twig_Template
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
        $__internal_5537c5f985934612473e38f622959345645ebb7493fe37252a0836437e5aa6dc = $this->env->getExtension("native_profiler");
        $__internal_5537c5f985934612473e38f622959345645ebb7493fe37252a0836437e5aa6dc->enter($__internal_5537c5f985934612473e38f622959345645ebb7493fe37252a0836437e5aa6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5537c5f985934612473e38f622959345645ebb7493fe37252a0836437e5aa6dc->leave($__internal_5537c5f985934612473e38f622959345645ebb7493fe37252a0836437e5aa6dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
