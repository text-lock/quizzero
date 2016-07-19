<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1506976b34fe8b93ea60228b1cea9d20bab8f6bb1ef647f2779c08a02af11e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_691f3c000aa4513c900e562da74c7d8986c1f192c021c68f777c85275b756968 = $this->env->getExtension("native_profiler");
        $__internal_691f3c000aa4513c900e562da74c7d8986c1f192c021c68f777c85275b756968->enter($__internal_691f3c000aa4513c900e562da74c7d8986c1f192c021c68f777c85275b756968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691f3c000aa4513c900e562da74c7d8986c1f192c021c68f777c85275b756968->leave($__internal_691f3c000aa4513c900e562da74c7d8986c1f192c021c68f777c85275b756968_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69ac8d4509d78b7ce3171a7d03c43e77cb0df6456e7c04f72feb495096fa6412 = $this->env->getExtension("native_profiler");
        $__internal_69ac8d4509d78b7ce3171a7d03c43e77cb0df6456e7c04f72feb495096fa6412->enter($__internal_69ac8d4509d78b7ce3171a7d03c43e77cb0df6456e7c04f72feb495096fa6412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_69ac8d4509d78b7ce3171a7d03c43e77cb0df6456e7c04f72feb495096fa6412->leave($__internal_69ac8d4509d78b7ce3171a7d03c43e77cb0df6456e7c04f72feb495096fa6412_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
