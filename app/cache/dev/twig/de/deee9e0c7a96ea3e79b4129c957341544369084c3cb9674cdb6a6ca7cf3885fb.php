<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5ec70338f7a920fed23252968c2a4209a8113fa6264bce102cdd0c46fd08aeb9 extends Twig_Template
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
        $__internal_e7d4c662187a9bac84ca3f61dcfa4c0182d7761bc913da0f6491d1f99078aaeb = $this->env->getExtension("native_profiler");
        $__internal_e7d4c662187a9bac84ca3f61dcfa4c0182d7761bc913da0f6491d1f99078aaeb->enter($__internal_e7d4c662187a9bac84ca3f61dcfa4c0182d7761bc913da0f6491d1f99078aaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e7d4c662187a9bac84ca3f61dcfa4c0182d7761bc913da0f6491d1f99078aaeb->leave($__internal_e7d4c662187a9bac84ca3f61dcfa4c0182d7761bc913da0f6491d1f99078aaeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
