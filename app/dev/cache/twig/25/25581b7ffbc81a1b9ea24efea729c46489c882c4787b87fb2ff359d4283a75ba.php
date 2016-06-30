<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6862eecd552f5ec49ddbd64cae37f5bf08c5ec7fea0a70a1c593b942cbbfe328 extends Twig_Template
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
        $__internal_a41d46d006e86dbf535e2869e217ebb64197cd5a077b9b531566b73348d4845b = $this->env->getExtension("native_profiler");
        $__internal_a41d46d006e86dbf535e2869e217ebb64197cd5a077b9b531566b73348d4845b->enter($__internal_a41d46d006e86dbf535e2869e217ebb64197cd5a077b9b531566b73348d4845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a41d46d006e86dbf535e2869e217ebb64197cd5a077b9b531566b73348d4845b->leave($__internal_a41d46d006e86dbf535e2869e217ebb64197cd5a077b9b531566b73348d4845b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
