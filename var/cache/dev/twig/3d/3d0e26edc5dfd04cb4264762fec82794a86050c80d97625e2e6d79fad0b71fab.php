<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_db8c83d6d7c55144c6ae8c5156e20c664e3c9e694c8798be8e7ce758555cd1a8 extends Twig_Template
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
        $__internal_01e32d70acc86c5408d0d2c2f2b17f8266cb166899897c3f7ab17c216c015fe2 = $this->env->getExtension("native_profiler");
        $__internal_01e32d70acc86c5408d0d2c2f2b17f8266cb166899897c3f7ab17c216c015fe2->enter($__internal_01e32d70acc86c5408d0d2c2f2b17f8266cb166899897c3f7ab17c216c015fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_01e32d70acc86c5408d0d2c2f2b17f8266cb166899897c3f7ab17c216c015fe2->leave($__internal_01e32d70acc86c5408d0d2c2f2b17f8266cb166899897c3f7ab17c216c015fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
