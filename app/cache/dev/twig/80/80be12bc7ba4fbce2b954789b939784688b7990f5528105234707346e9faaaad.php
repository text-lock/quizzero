<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5f434ffb753d62c462be865042e1c8a34e09cfe0363ffbc93867ad4ed013ccc1 extends Twig_Template
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
        $__internal_fa02400e90c93bf59e325dd37a88e69b9d85f5341f65e74f71242fc3633e2a28 = $this->env->getExtension("native_profiler");
        $__internal_fa02400e90c93bf59e325dd37a88e69b9d85f5341f65e74f71242fc3633e2a28->enter($__internal_fa02400e90c93bf59e325dd37a88e69b9d85f5341f65e74f71242fc3633e2a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fa02400e90c93bf59e325dd37a88e69b9d85f5341f65e74f71242fc3633e2a28->leave($__internal_fa02400e90c93bf59e325dd37a88e69b9d85f5341f65e74f71242fc3633e2a28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
