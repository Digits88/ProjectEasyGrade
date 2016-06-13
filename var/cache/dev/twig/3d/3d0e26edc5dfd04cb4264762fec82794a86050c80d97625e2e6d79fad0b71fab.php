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
        $__internal_f484fe08409fcd5ac89fa86f680ef8ff18beb21a68ba0fb65050434ee404dc14 = $this->env->getExtension("native_profiler");
        $__internal_f484fe08409fcd5ac89fa86f680ef8ff18beb21a68ba0fb65050434ee404dc14->enter($__internal_f484fe08409fcd5ac89fa86f680ef8ff18beb21a68ba0fb65050434ee404dc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f484fe08409fcd5ac89fa86f680ef8ff18beb21a68ba0fb65050434ee404dc14->leave($__internal_f484fe08409fcd5ac89fa86f680ef8ff18beb21a68ba0fb65050434ee404dc14_prof);

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
