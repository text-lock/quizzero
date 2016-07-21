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
        $__internal_6346649ecd729275f4ae310998ffa7b1beb7122773283fa866ef78811de1a094 = $this->env->getExtension("native_profiler");
        $__internal_6346649ecd729275f4ae310998ffa7b1beb7122773283fa866ef78811de1a094->enter($__internal_6346649ecd729275f4ae310998ffa7b1beb7122773283fa866ef78811de1a094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6346649ecd729275f4ae310998ffa7b1beb7122773283fa866ef78811de1a094->leave($__internal_6346649ecd729275f4ae310998ffa7b1beb7122773283fa866ef78811de1a094_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4d4c6cf5c26cadafa7349251dff770b8ae93e690d448356245168a8d89a05a8e = $this->env->getExtension("native_profiler");
        $__internal_4d4c6cf5c26cadafa7349251dff770b8ae93e690d448356245168a8d89a05a8e->enter($__internal_4d4c6cf5c26cadafa7349251dff770b8ae93e690d448356245168a8d89a05a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4d4c6cf5c26cadafa7349251dff770b8ae93e690d448356245168a8d89a05a8e->leave($__internal_4d4c6cf5c26cadafa7349251dff770b8ae93e690d448356245168a8d89a05a8e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f982349077b16bd32f6ea1e4523164e58dba7c73c693ff178c4ca5d350bb9ea5 = $this->env->getExtension("native_profiler");
        $__internal_f982349077b16bd32f6ea1e4523164e58dba7c73c693ff178c4ca5d350bb9ea5->enter($__internal_f982349077b16bd32f6ea1e4523164e58dba7c73c693ff178c4ca5d350bb9ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f982349077b16bd32f6ea1e4523164e58dba7c73c693ff178c4ca5d350bb9ea5->leave($__internal_f982349077b16bd32f6ea1e4523164e58dba7c73c693ff178c4ca5d350bb9ea5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3b7b87f42b17a0dc5dd3de5918db134939144950ca3df5c1178d97cdbd86b807 = $this->env->getExtension("native_profiler");
        $__internal_3b7b87f42b17a0dc5dd3de5918db134939144950ca3df5c1178d97cdbd86b807->enter($__internal_3b7b87f42b17a0dc5dd3de5918db134939144950ca3df5c1178d97cdbd86b807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3b7b87f42b17a0dc5dd3de5918db134939144950ca3df5c1178d97cdbd86b807->leave($__internal_3b7b87f42b17a0dc5dd3de5918db134939144950ca3df5c1178d97cdbd86b807_prof);

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
