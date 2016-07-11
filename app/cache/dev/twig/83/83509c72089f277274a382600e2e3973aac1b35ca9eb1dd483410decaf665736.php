<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7301ad111f41e1bbc1da2a4e39751236d5452b89c308ac80782942ba96ad2974 extends Twig_Template
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
        $__internal_daeb6d172d9ddfbf4c76d02b5e51b5d926d4f8ea58a564c1b413245e017d2d99 = $this->env->getExtension("native_profiler");
        $__internal_daeb6d172d9ddfbf4c76d02b5e51b5d926d4f8ea58a564c1b413245e017d2d99->enter($__internal_daeb6d172d9ddfbf4c76d02b5e51b5d926d4f8ea58a564c1b413245e017d2d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_daeb6d172d9ddfbf4c76d02b5e51b5d926d4f8ea58a564c1b413245e017d2d99->leave($__internal_daeb6d172d9ddfbf4c76d02b5e51b5d926d4f8ea58a564c1b413245e017d2d99_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_522f5f0512fba2473b0e46ed10f28ad298e50c1612da51ca29268ae51181b763 = $this->env->getExtension("native_profiler");
        $__internal_522f5f0512fba2473b0e46ed10f28ad298e50c1612da51ca29268ae51181b763->enter($__internal_522f5f0512fba2473b0e46ed10f28ad298e50c1612da51ca29268ae51181b763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_522f5f0512fba2473b0e46ed10f28ad298e50c1612da51ca29268ae51181b763->leave($__internal_522f5f0512fba2473b0e46ed10f28ad298e50c1612da51ca29268ae51181b763_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_27e9750281fd9e4944c20cb7117107af95d5d26bb0e8cfcf88cca229d8f28748 = $this->env->getExtension("native_profiler");
        $__internal_27e9750281fd9e4944c20cb7117107af95d5d26bb0e8cfcf88cca229d8f28748->enter($__internal_27e9750281fd9e4944c20cb7117107af95d5d26bb0e8cfcf88cca229d8f28748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_27e9750281fd9e4944c20cb7117107af95d5d26bb0e8cfcf88cca229d8f28748->leave($__internal_27e9750281fd9e4944c20cb7117107af95d5d26bb0e8cfcf88cca229d8f28748_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b2ffdebb42704fa65babc9173c907409f08ea87bc9372ae05c17d84ea1032527 = $this->env->getExtension("native_profiler");
        $__internal_b2ffdebb42704fa65babc9173c907409f08ea87bc9372ae05c17d84ea1032527->enter($__internal_b2ffdebb42704fa65babc9173c907409f08ea87bc9372ae05c17d84ea1032527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b2ffdebb42704fa65babc9173c907409f08ea87bc9372ae05c17d84ea1032527->leave($__internal_b2ffdebb42704fa65babc9173c907409f08ea87bc9372ae05c17d84ea1032527_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
