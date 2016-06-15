<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_290bc0e02d813afb023412d88f2365375fab83002a39ec88b513ebff3057cbf1 extends Twig_Template
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
        $__internal_33c940a9274003c6efbf0341e433b801b39843310b6812ec076bcff9978e1995 = $this->env->getExtension("native_profiler");
        $__internal_33c940a9274003c6efbf0341e433b801b39843310b6812ec076bcff9978e1995->enter($__internal_33c940a9274003c6efbf0341e433b801b39843310b6812ec076bcff9978e1995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_33c940a9274003c6efbf0341e433b801b39843310b6812ec076bcff9978e1995->leave($__internal_33c940a9274003c6efbf0341e433b801b39843310b6812ec076bcff9978e1995_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
