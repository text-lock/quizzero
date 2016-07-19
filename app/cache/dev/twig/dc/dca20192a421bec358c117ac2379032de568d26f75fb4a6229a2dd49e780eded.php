<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_5ce4495e91866917c43b173c1670a6460db22175743f24b6c14bc8b6dfcd47e0 extends Twig_Template
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
        $__internal_53ea50900298904a586864a34a9715bb47bb9c49b88ab1f57de6a38f9e93d75e = $this->env->getExtension("native_profiler");
        $__internal_53ea50900298904a586864a34a9715bb47bb9c49b88ab1f57de6a38f9e93d75e->enter($__internal_53ea50900298904a586864a34a9715bb47bb9c49b88ab1f57de6a38f9e93d75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_53ea50900298904a586864a34a9715bb47bb9c49b88ab1f57de6a38f9e93d75e->leave($__internal_53ea50900298904a586864a34a9715bb47bb9c49b88ab1f57de6a38f9e93d75e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
