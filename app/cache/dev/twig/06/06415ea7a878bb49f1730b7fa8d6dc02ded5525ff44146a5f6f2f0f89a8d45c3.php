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
        $__internal_0e6e32326549eda8b71cb487ed3a26563ed1f9feb71bb9af69c4459cc00fd564 = $this->env->getExtension("native_profiler");
        $__internal_0e6e32326549eda8b71cb487ed3a26563ed1f9feb71bb9af69c4459cc00fd564->enter($__internal_0e6e32326549eda8b71cb487ed3a26563ed1f9feb71bb9af69c4459cc00fd564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0e6e32326549eda8b71cb487ed3a26563ed1f9feb71bb9af69c4459cc00fd564->leave($__internal_0e6e32326549eda8b71cb487ed3a26563ed1f9feb71bb9af69c4459cc00fd564_prof);

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
