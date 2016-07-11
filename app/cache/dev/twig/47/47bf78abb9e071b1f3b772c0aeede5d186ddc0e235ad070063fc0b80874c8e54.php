<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5452b461a7427b1ac60ae3331d5d4baf63d4dbaaa605a1db49dfecebfa9581db extends Twig_Template
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
        $__internal_e538ca246a81fd6071e2a2c10cbd0d14f48679cb1d711296447df9efdf400413 = $this->env->getExtension("native_profiler");
        $__internal_e538ca246a81fd6071e2a2c10cbd0d14f48679cb1d711296447df9efdf400413->enter($__internal_e538ca246a81fd6071e2a2c10cbd0d14f48679cb1d711296447df9efdf400413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e538ca246a81fd6071e2a2c10cbd0d14f48679cb1d711296447df9efdf400413->leave($__internal_e538ca246a81fd6071e2a2c10cbd0d14f48679cb1d711296447df9efdf400413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
