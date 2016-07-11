<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5c8d64d485bccc5416305524892b8479a50c8b731631e9b06384e08b10128868 extends Twig_Template
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
        $__internal_77be41961177b05f311dc61d9dc4a33e8396085b01339a0f223f4c28656dd278 = $this->env->getExtension("native_profiler");
        $__internal_77be41961177b05f311dc61d9dc4a33e8396085b01339a0f223f4c28656dd278->enter($__internal_77be41961177b05f311dc61d9dc4a33e8396085b01339a0f223f4c28656dd278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_77be41961177b05f311dc61d9dc4a33e8396085b01339a0f223f4c28656dd278->leave($__internal_77be41961177b05f311dc61d9dc4a33e8396085b01339a0f223f4c28656dd278_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
