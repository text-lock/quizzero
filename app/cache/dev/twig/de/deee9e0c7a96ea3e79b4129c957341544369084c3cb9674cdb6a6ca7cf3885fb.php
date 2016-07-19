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
        $__internal_f83b0f8623a8259cb3b125d969bf4f5950bef20e4548c4050eb89e6875ec9387 = $this->env->getExtension("native_profiler");
        $__internal_f83b0f8623a8259cb3b125d969bf4f5950bef20e4548c4050eb89e6875ec9387->enter($__internal_f83b0f8623a8259cb3b125d969bf4f5950bef20e4548c4050eb89e6875ec9387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f83b0f8623a8259cb3b125d969bf4f5950bef20e4548c4050eb89e6875ec9387->leave($__internal_f83b0f8623a8259cb3b125d969bf4f5950bef20e4548c4050eb89e6875ec9387_prof);

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
