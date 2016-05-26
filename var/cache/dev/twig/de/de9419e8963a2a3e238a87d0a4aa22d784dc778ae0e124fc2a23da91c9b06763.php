<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7e5691a3eaf02d6af57523219a34aebf852de85d3dfe9e0cf81b766318e681a8 extends Twig_Template
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
        $__internal_be3cd213030553629e1662a2a0fbbbda15e8f0e8c7c2893f925e42c6ea56584f = $this->env->getExtension("native_profiler");
        $__internal_be3cd213030553629e1662a2a0fbbbda15e8f0e8c7c2893f925e42c6ea56584f->enter($__internal_be3cd213030553629e1662a2a0fbbbda15e8f0e8c7c2893f925e42c6ea56584f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be3cd213030553629e1662a2a0fbbbda15e8f0e8c7c2893f925e42c6ea56584f->leave($__internal_be3cd213030553629e1662a2a0fbbbda15e8f0e8c7c2893f925e42c6ea56584f_prof);

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
