<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6f9da051218f9e375d66ae893da36249654641da542c7ff8f46da4dee01fa959 extends Twig_Template
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
        $__internal_b30f9e7e87ddf5c8c7a25f10a00bc90d522b909c0a0d98e24c4c160dd7a14c63 = $this->env->getExtension("native_profiler");
        $__internal_b30f9e7e87ddf5c8c7a25f10a00bc90d522b909c0a0d98e24c4c160dd7a14c63->enter($__internal_b30f9e7e87ddf5c8c7a25f10a00bc90d522b909c0a0d98e24c4c160dd7a14c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_b30f9e7e87ddf5c8c7a25f10a00bc90d522b909c0a0d98e24c4c160dd7a14c63->leave($__internal_b30f9e7e87ddf5c8c7a25f10a00bc90d522b909c0a0d98e24c4c160dd7a14c63_prof);

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
