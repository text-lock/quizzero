<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_50ef1f44b8e07ea22f7adf4be9a9947d2cb25525f8b581f941ace0656ee3b3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_13d0d02cdf115a9e2754c531783881198471cd3516425e03f22fc2a4aa13e046 = $this->env->getExtension("native_profiler");
        $__internal_13d0d02cdf115a9e2754c531783881198471cd3516425e03f22fc2a4aa13e046->enter($__internal_13d0d02cdf115a9e2754c531783881198471cd3516425e03f22fc2a4aa13e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d0d02cdf115a9e2754c531783881198471cd3516425e03f22fc2a4aa13e046->leave($__internal_13d0d02cdf115a9e2754c531783881198471cd3516425e03f22fc2a4aa13e046_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f07649f80ed8cab38c106cb57d2baf067dc0c25fa80b32bf7cae1d96b517986f = $this->env->getExtension("native_profiler");
        $__internal_f07649f80ed8cab38c106cb57d2baf067dc0c25fa80b32bf7cae1d96b517986f->enter($__internal_f07649f80ed8cab38c106cb57d2baf067dc0c25fa80b32bf7cae1d96b517986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f07649f80ed8cab38c106cb57d2baf067dc0c25fa80b32bf7cae1d96b517986f->leave($__internal_f07649f80ed8cab38c106cb57d2baf067dc0c25fa80b32bf7cae1d96b517986f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
