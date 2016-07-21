<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cd1ad5a767a0e2bbfb6a77c6cea2d8cc2c529c7377db9533ccebbe1339b54954 extends Twig_Template
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
        $__internal_ded72a9aed9481537836f027ad2ee6f06f35333b22a255f64ae2a36e16e23844 = $this->env->getExtension("native_profiler");
        $__internal_ded72a9aed9481537836f027ad2ee6f06f35333b22a255f64ae2a36e16e23844->enter($__internal_ded72a9aed9481537836f027ad2ee6f06f35333b22a255f64ae2a36e16e23844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ded72a9aed9481537836f027ad2ee6f06f35333b22a255f64ae2a36e16e23844->leave($__internal_ded72a9aed9481537836f027ad2ee6f06f35333b22a255f64ae2a36e16e23844_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
