<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_05426558455be7c34cba6b30fdcbc95fc43f3ea044df71ee6ce12a8a73c5e009 extends Twig_Template
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
        $__internal_619d0eb9b6210c998290d2a82ce34ec8838f07c3543368a36c41785dcf05d3f9 = $this->env->getExtension("native_profiler");
        $__internal_619d0eb9b6210c998290d2a82ce34ec8838f07c3543368a36c41785dcf05d3f9->enter($__internal_619d0eb9b6210c998290d2a82ce34ec8838f07c3543368a36c41785dcf05d3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_619d0eb9b6210c998290d2a82ce34ec8838f07c3543368a36c41785dcf05d3f9->leave($__internal_619d0eb9b6210c998290d2a82ce34ec8838f07c3543368a36c41785dcf05d3f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
