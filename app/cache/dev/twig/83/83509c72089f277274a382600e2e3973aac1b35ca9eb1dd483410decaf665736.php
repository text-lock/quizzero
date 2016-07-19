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
        $__internal_8ff03a80d4e651c3db3fafa3121fc6ac7086cdbf2c366e1d97a3003404d9f661 = $this->env->getExtension("native_profiler");
        $__internal_8ff03a80d4e651c3db3fafa3121fc6ac7086cdbf2c366e1d97a3003404d9f661->enter($__internal_8ff03a80d4e651c3db3fafa3121fc6ac7086cdbf2c366e1d97a3003404d9f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8ff03a80d4e651c3db3fafa3121fc6ac7086cdbf2c366e1d97a3003404d9f661->leave($__internal_8ff03a80d4e651c3db3fafa3121fc6ac7086cdbf2c366e1d97a3003404d9f661_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f8ae5d1499c9d8ff18ca9eebddbb4a977b26c9520002f6bc924cd3addb4e7a8d = $this->env->getExtension("native_profiler");
        $__internal_f8ae5d1499c9d8ff18ca9eebddbb4a977b26c9520002f6bc924cd3addb4e7a8d->enter($__internal_f8ae5d1499c9d8ff18ca9eebddbb4a977b26c9520002f6bc924cd3addb4e7a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f8ae5d1499c9d8ff18ca9eebddbb4a977b26c9520002f6bc924cd3addb4e7a8d->leave($__internal_f8ae5d1499c9d8ff18ca9eebddbb4a977b26c9520002f6bc924cd3addb4e7a8d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_72424a4426754208863633d141289d26cd836536f01c6f099545740a330956f0 = $this->env->getExtension("native_profiler");
        $__internal_72424a4426754208863633d141289d26cd836536f01c6f099545740a330956f0->enter($__internal_72424a4426754208863633d141289d26cd836536f01c6f099545740a330956f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_72424a4426754208863633d141289d26cd836536f01c6f099545740a330956f0->leave($__internal_72424a4426754208863633d141289d26cd836536f01c6f099545740a330956f0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e04caeb85fe206b4e3074ed77e53b583adf1ab69b3824356023265958ad29188 = $this->env->getExtension("native_profiler");
        $__internal_e04caeb85fe206b4e3074ed77e53b583adf1ab69b3824356023265958ad29188->enter($__internal_e04caeb85fe206b4e3074ed77e53b583adf1ab69b3824356023265958ad29188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e04caeb85fe206b4e3074ed77e53b583adf1ab69b3824356023265958ad29188->leave($__internal_e04caeb85fe206b4e3074ed77e53b583adf1ab69b3824356023265958ad29188_prof);

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
