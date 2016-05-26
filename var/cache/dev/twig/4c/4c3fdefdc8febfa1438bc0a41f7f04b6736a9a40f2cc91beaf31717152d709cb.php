<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_14028000250531a9761f7bbb66227a7eae9b9ceab8d28bd1e3ab133ca159c1d8 extends Twig_Template
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
        $__internal_165ccffc8f568888863cd19a523f2e73ac90c46e17592d62297000a90f479123 = $this->env->getExtension("native_profiler");
        $__internal_165ccffc8f568888863cd19a523f2e73ac90c46e17592d62297000a90f479123->enter($__internal_165ccffc8f568888863cd19a523f2e73ac90c46e17592d62297000a90f479123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_165ccffc8f568888863cd19a523f2e73ac90c46e17592d62297000a90f479123->leave($__internal_165ccffc8f568888863cd19a523f2e73ac90c46e17592d62297000a90f479123_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
