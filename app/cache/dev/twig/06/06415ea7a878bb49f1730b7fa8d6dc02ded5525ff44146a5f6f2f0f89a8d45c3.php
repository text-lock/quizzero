<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b3d993f09fcd92d5e64f7ac4e202512cdf0d6426761da3f7c436f5220d2d4337 extends Twig_Template
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
        $__internal_e05f212f448917816d953883c87d05195506b858e17e82906b598c3494dcfdee = $this->env->getExtension("native_profiler");
        $__internal_e05f212f448917816d953883c87d05195506b858e17e82906b598c3494dcfdee->enter($__internal_e05f212f448917816d953883c87d05195506b858e17e82906b598c3494dcfdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e05f212f448917816d953883c87d05195506b858e17e82906b598c3494dcfdee->leave($__internal_e05f212f448917816d953883c87d05195506b858e17e82906b598c3494dcfdee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
