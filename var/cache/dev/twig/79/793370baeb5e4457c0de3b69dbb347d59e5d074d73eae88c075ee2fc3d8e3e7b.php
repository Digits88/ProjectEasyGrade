<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9397074f6216f36d58af74d90de8d6f6371b230cdb3115194b5975995fcd1baa extends Twig_Template
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
        $__internal_8849722f5b8c5a7f949e5e5295f47291a14cffb40a4ae0880f0f857fe63fac2c = $this->env->getExtension("native_profiler");
        $__internal_8849722f5b8c5a7f949e5e5295f47291a14cffb40a4ae0880f0f857fe63fac2c->enter($__internal_8849722f5b8c5a7f949e5e5295f47291a14cffb40a4ae0880f0f857fe63fac2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8849722f5b8c5a7f949e5e5295f47291a14cffb40a4ae0880f0f857fe63fac2c->leave($__internal_8849722f5b8c5a7f949e5e5295f47291a14cffb40a4ae0880f0f857fe63fac2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
