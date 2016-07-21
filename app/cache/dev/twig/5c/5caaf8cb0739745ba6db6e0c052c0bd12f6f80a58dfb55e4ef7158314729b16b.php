<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_926c6927fde15ec6d42c4e1d0d6febab4dfbd5faab83bb8b68cbbe4a0fed61d2 extends Twig_Template
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
        $__internal_49f04edff59a63bf9e4b8d13761309908abae5d1a0bc3203a8ea6da1d206aab9 = $this->env->getExtension("native_profiler");
        $__internal_49f04edff59a63bf9e4b8d13761309908abae5d1a0bc3203a8ea6da1d206aab9->enter($__internal_49f04edff59a63bf9e4b8d13761309908abae5d1a0bc3203a8ea6da1d206aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_49f04edff59a63bf9e4b8d13761309908abae5d1a0bc3203a8ea6da1d206aab9->leave($__internal_49f04edff59a63bf9e4b8d13761309908abae5d1a0bc3203a8ea6da1d206aab9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
