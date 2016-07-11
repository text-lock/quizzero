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
        $__internal_8c4a5ede5eb204bad52f6caeef44c01957311c378a669375e497412d790a05fe = $this->env->getExtension("native_profiler");
        $__internal_8c4a5ede5eb204bad52f6caeef44c01957311c378a669375e497412d790a05fe->enter($__internal_8c4a5ede5eb204bad52f6caeef44c01957311c378a669375e497412d790a05fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8c4a5ede5eb204bad52f6caeef44c01957311c378a669375e497412d790a05fe->leave($__internal_8c4a5ede5eb204bad52f6caeef44c01957311c378a669375e497412d790a05fe_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eb8c5a36f80585466a71191a256f55c278726bfd71b015534a4bef550a0ae4ce = $this->env->getExtension("native_profiler");
        $__internal_eb8c5a36f80585466a71191a256f55c278726bfd71b015534a4bef550a0ae4ce->enter($__internal_eb8c5a36f80585466a71191a256f55c278726bfd71b015534a4bef550a0ae4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_eb8c5a36f80585466a71191a256f55c278726bfd71b015534a4bef550a0ae4ce->leave($__internal_eb8c5a36f80585466a71191a256f55c278726bfd71b015534a4bef550a0ae4ce_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_67f9927d5300514d5d2a5da38c7b5ebbf72159867af0910aaf76bdfc1325518c = $this->env->getExtension("native_profiler");
        $__internal_67f9927d5300514d5d2a5da38c7b5ebbf72159867af0910aaf76bdfc1325518c->enter($__internal_67f9927d5300514d5d2a5da38c7b5ebbf72159867af0910aaf76bdfc1325518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_67f9927d5300514d5d2a5da38c7b5ebbf72159867af0910aaf76bdfc1325518c->leave($__internal_67f9927d5300514d5d2a5da38c7b5ebbf72159867af0910aaf76bdfc1325518c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_16b376e5bcb6f78f23469522daf6c3a73387f04b322b5549e0ed894ca0308495 = $this->env->getExtension("native_profiler");
        $__internal_16b376e5bcb6f78f23469522daf6c3a73387f04b322b5549e0ed894ca0308495->enter($__internal_16b376e5bcb6f78f23469522daf6c3a73387f04b322b5549e0ed894ca0308495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_16b376e5bcb6f78f23469522daf6c3a73387f04b322b5549e0ed894ca0308495->leave($__internal_16b376e5bcb6f78f23469522daf6c3a73387f04b322b5549e0ed894ca0308495_prof);

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
