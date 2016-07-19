<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7ff5e2569eaa39e4722d9ce085b74424fcc8f08d48147a114103660de259c52f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae50353fcf664e6ebeefd4c8feaf400f936ffcc40fa7e608d1800ad2df041ca5 = $this->env->getExtension("native_profiler");
        $__internal_ae50353fcf664e6ebeefd4c8feaf400f936ffcc40fa7e608d1800ad2df041ca5->enter($__internal_ae50353fcf664e6ebeefd4c8feaf400f936ffcc40fa7e608d1800ad2df041ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ae50353fcf664e6ebeefd4c8feaf400f936ffcc40fa7e608d1800ad2df041ca5->leave($__internal_ae50353fcf664e6ebeefd4c8feaf400f936ffcc40fa7e608d1800ad2df041ca5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_399d288ea17ddc878110187b554cd38bd1a7146879323f6e6d2e4497ab39f0c4 = $this->env->getExtension("native_profiler");
        $__internal_399d288ea17ddc878110187b554cd38bd1a7146879323f6e6d2e4497ab39f0c4->enter($__internal_399d288ea17ddc878110187b554cd38bd1a7146879323f6e6d2e4497ab39f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_399d288ea17ddc878110187b554cd38bd1a7146879323f6e6d2e4497ab39f0c4->leave($__internal_399d288ea17ddc878110187b554cd38bd1a7146879323f6e6d2e4497ab39f0c4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2ab6d1d25e6bf056735dbd851e779c58f2dab8013e7bf5060a0d04780182d8b5 = $this->env->getExtension("native_profiler");
        $__internal_2ab6d1d25e6bf056735dbd851e779c58f2dab8013e7bf5060a0d04780182d8b5->enter($__internal_2ab6d1d25e6bf056735dbd851e779c58f2dab8013e7bf5060a0d04780182d8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2ab6d1d25e6bf056735dbd851e779c58f2dab8013e7bf5060a0d04780182d8b5->leave($__internal_2ab6d1d25e6bf056735dbd851e779c58f2dab8013e7bf5060a0d04780182d8b5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e17f2c134a03e47122c4ddb51adbef6a52c39afe4b3ff8755c67eb915b774f3a = $this->env->getExtension("native_profiler");
        $__internal_e17f2c134a03e47122c4ddb51adbef6a52c39afe4b3ff8755c67eb915b774f3a->enter($__internal_e17f2c134a03e47122c4ddb51adbef6a52c39afe4b3ff8755c67eb915b774f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e17f2c134a03e47122c4ddb51adbef6a52c39afe4b3ff8755c67eb915b774f3a->leave($__internal_e17f2c134a03e47122c4ddb51adbef6a52c39afe4b3ff8755c67eb915b774f3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
