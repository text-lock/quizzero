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
        $__internal_0f32785604b1f4929ab029393f77b539177a5e9d6740ad5429cf81266e93efc0 = $this->env->getExtension("native_profiler");
        $__internal_0f32785604b1f4929ab029393f77b539177a5e9d6740ad5429cf81266e93efc0->enter($__internal_0f32785604b1f4929ab029393f77b539177a5e9d6740ad5429cf81266e93efc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0f32785604b1f4929ab029393f77b539177a5e9d6740ad5429cf81266e93efc0->leave($__internal_0f32785604b1f4929ab029393f77b539177a5e9d6740ad5429cf81266e93efc0_prof);

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
