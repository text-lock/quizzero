<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_51ccfa6ca622406e76c30bdce393d0c4d50e0036805c039424343f91fe8a2bb1 extends Twig_Template
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
        $__internal_b8918b53719b005cf504801cad1111219882cf75ac5a32fbd38392521d7032d9 = $this->env->getExtension("native_profiler");
        $__internal_b8918b53719b005cf504801cad1111219882cf75ac5a32fbd38392521d7032d9->enter($__internal_b8918b53719b005cf504801cad1111219882cf75ac5a32fbd38392521d7032d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b8918b53719b005cf504801cad1111219882cf75ac5a32fbd38392521d7032d9->leave($__internal_b8918b53719b005cf504801cad1111219882cf75ac5a32fbd38392521d7032d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
