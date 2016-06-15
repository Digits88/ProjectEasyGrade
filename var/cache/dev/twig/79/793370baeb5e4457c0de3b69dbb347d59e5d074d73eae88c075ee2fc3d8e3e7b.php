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
        $__internal_01b97397c65cb65a663ae59c582df1529ec89019fff93a754437406e302213e9 = $this->env->getExtension("native_profiler");
        $__internal_01b97397c65cb65a663ae59c582df1529ec89019fff93a754437406e302213e9->enter($__internal_01b97397c65cb65a663ae59c582df1529ec89019fff93a754437406e302213e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_01b97397c65cb65a663ae59c582df1529ec89019fff93a754437406e302213e9->leave($__internal_01b97397c65cb65a663ae59c582df1529ec89019fff93a754437406e302213e9_prof);

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
