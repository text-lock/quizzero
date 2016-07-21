<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c73c28507341c17240c0169b2eb1e571589177cf6f5f990abeca922b30fe7536 extends Twig_Template
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
        $__internal_12f45bd1d40510aca4b42b70a6e238d6981ff1072acc544af6e136b499e8b048 = $this->env->getExtension("native_profiler");
        $__internal_12f45bd1d40510aca4b42b70a6e238d6981ff1072acc544af6e136b499e8b048->enter($__internal_12f45bd1d40510aca4b42b70a6e238d6981ff1072acc544af6e136b499e8b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_12f45bd1d40510aca4b42b70a6e238d6981ff1072acc544af6e136b499e8b048->leave($__internal_12f45bd1d40510aca4b42b70a6e238d6981ff1072acc544af6e136b499e8b048_prof);

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
