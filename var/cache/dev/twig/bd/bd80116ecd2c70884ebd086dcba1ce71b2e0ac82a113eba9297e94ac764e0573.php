<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f6df2630e3831c4d3876ed6d46bed630ac2a1c1df91c1efc931641530bef1476 extends Twig_Template
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
        $__internal_ed295e6ff192cd8df9dd64e90b04bf15087b0ac2d2fbb23ae6a451fd0fa4435b = $this->env->getExtension("native_profiler");
        $__internal_ed295e6ff192cd8df9dd64e90b04bf15087b0ac2d2fbb23ae6a451fd0fa4435b->enter($__internal_ed295e6ff192cd8df9dd64e90b04bf15087b0ac2d2fbb23ae6a451fd0fa4435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ed295e6ff192cd8df9dd64e90b04bf15087b0ac2d2fbb23ae6a451fd0fa4435b->leave($__internal_ed295e6ff192cd8df9dd64e90b04bf15087b0ac2d2fbb23ae6a451fd0fa4435b_prof);

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
