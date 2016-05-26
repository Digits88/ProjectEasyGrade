<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_31c308a0a49efc0321f4b1b8bf65e463b4d124899472842d897f0c4c7d941b20 extends Twig_Template
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
        $__internal_f7b517d64e1f1b5ff894c8834c4bc424b7c4c43b27b4bc0f1d2c53a33cae2df8 = $this->env->getExtension("native_profiler");
        $__internal_f7b517d64e1f1b5ff894c8834c4bc424b7c4c43b27b4bc0f1d2c53a33cae2df8->enter($__internal_f7b517d64e1f1b5ff894c8834c4bc424b7c4c43b27b4bc0f1d2c53a33cae2df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f7b517d64e1f1b5ff894c8834c4bc424b7c4c43b27b4bc0f1d2c53a33cae2df8->leave($__internal_f7b517d64e1f1b5ff894c8834c4bc424b7c4c43b27b4bc0f1d2c53a33cae2df8_prof);

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
