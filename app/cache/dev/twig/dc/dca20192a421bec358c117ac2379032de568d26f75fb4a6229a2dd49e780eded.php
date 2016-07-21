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
        $__internal_c8cfbcdc6d70ce0a6cc069aea7573c0d95d2930e811e367972a9bad741f3e580 = $this->env->getExtension("native_profiler");
        $__internal_c8cfbcdc6d70ce0a6cc069aea7573c0d95d2930e811e367972a9bad741f3e580->enter($__internal_c8cfbcdc6d70ce0a6cc069aea7573c0d95d2930e811e367972a9bad741f3e580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c8cfbcdc6d70ce0a6cc069aea7573c0d95d2930e811e367972a9bad741f3e580->leave($__internal_c8cfbcdc6d70ce0a6cc069aea7573c0d95d2930e811e367972a9bad741f3e580_prof);

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
