<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0bc797b69d5aa162d910b38fbcfbfc90c85a891d94bf6c0502a0c326c7c88147 extends Twig_Template
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
        $__internal_6286d8e224ebfec6052ab1ba7933f95192132a0df4c59a0e1b0906f15db35ace = $this->env->getExtension("native_profiler");
        $__internal_6286d8e224ebfec6052ab1ba7933f95192132a0df4c59a0e1b0906f15db35ace->enter($__internal_6286d8e224ebfec6052ab1ba7933f95192132a0df4c59a0e1b0906f15db35ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6286d8e224ebfec6052ab1ba7933f95192132a0df4c59a0e1b0906f15db35ace->leave($__internal_6286d8e224ebfec6052ab1ba7933f95192132a0df4c59a0e1b0906f15db35ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
