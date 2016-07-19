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
        $__internal_1948b53676ddc934c076d6334f36077a4cdc01c2bd058f506a64c08ba4196bbf = $this->env->getExtension("native_profiler");
        $__internal_1948b53676ddc934c076d6334f36077a4cdc01c2bd058f506a64c08ba4196bbf->enter($__internal_1948b53676ddc934c076d6334f36077a4cdc01c2bd058f506a64c08ba4196bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1948b53676ddc934c076d6334f36077a4cdc01c2bd058f506a64c08ba4196bbf->leave($__internal_1948b53676ddc934c076d6334f36077a4cdc01c2bd058f506a64c08ba4196bbf_prof);

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
