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
        $__internal_f226a6a912fe2cd08326355daba676972291c5da7a3acfe8299708fc3957627c = $this->env->getExtension("native_profiler");
        $__internal_f226a6a912fe2cd08326355daba676972291c5da7a3acfe8299708fc3957627c->enter($__internal_f226a6a912fe2cd08326355daba676972291c5da7a3acfe8299708fc3957627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f226a6a912fe2cd08326355daba676972291c5da7a3acfe8299708fc3957627c->leave($__internal_f226a6a912fe2cd08326355daba676972291c5da7a3acfe8299708fc3957627c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d76706bdcde57e542c54c0372ee9aefec108926ddb093bcd7a68c766ee19fec9 = $this->env->getExtension("native_profiler");
        $__internal_d76706bdcde57e542c54c0372ee9aefec108926ddb093bcd7a68c766ee19fec9->enter($__internal_d76706bdcde57e542c54c0372ee9aefec108926ddb093bcd7a68c766ee19fec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d76706bdcde57e542c54c0372ee9aefec108926ddb093bcd7a68c766ee19fec9->leave($__internal_d76706bdcde57e542c54c0372ee9aefec108926ddb093bcd7a68c766ee19fec9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f6cff4a4edc15228d129bd4b8887c8013079bdec98ee14bc51414ec839a0f3b5 = $this->env->getExtension("native_profiler");
        $__internal_f6cff4a4edc15228d129bd4b8887c8013079bdec98ee14bc51414ec839a0f3b5->enter($__internal_f6cff4a4edc15228d129bd4b8887c8013079bdec98ee14bc51414ec839a0f3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f6cff4a4edc15228d129bd4b8887c8013079bdec98ee14bc51414ec839a0f3b5->leave($__internal_f6cff4a4edc15228d129bd4b8887c8013079bdec98ee14bc51414ec839a0f3b5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_76e6ae0733040e7ac2c8bc4da30ee74d4b25de1287d0a778f36faf245ada3361 = $this->env->getExtension("native_profiler");
        $__internal_76e6ae0733040e7ac2c8bc4da30ee74d4b25de1287d0a778f36faf245ada3361->enter($__internal_76e6ae0733040e7ac2c8bc4da30ee74d4b25de1287d0a778f36faf245ada3361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_76e6ae0733040e7ac2c8bc4da30ee74d4b25de1287d0a778f36faf245ada3361->leave($__internal_76e6ae0733040e7ac2c8bc4da30ee74d4b25de1287d0a778f36faf245ada3361_prof);

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
