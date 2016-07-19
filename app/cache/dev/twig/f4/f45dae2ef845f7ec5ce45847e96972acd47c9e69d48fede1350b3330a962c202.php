<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_874b5f145c48741f998849cf71225c1ad4438478c8491b19df660939f62bbaec extends Twig_Template
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
        $__internal_abc6ce3dba784d7a004f1439ff1323843590bde58cc8f4b4adefc66510cde317 = $this->env->getExtension("native_profiler");
        $__internal_abc6ce3dba784d7a004f1439ff1323843590bde58cc8f4b4adefc66510cde317->enter($__internal_abc6ce3dba784d7a004f1439ff1323843590bde58cc8f4b4adefc66510cde317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_abc6ce3dba784d7a004f1439ff1323843590bde58cc8f4b4adefc66510cde317->leave($__internal_abc6ce3dba784d7a004f1439ff1323843590bde58cc8f4b4adefc66510cde317_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
