<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7530e5dae8026285e15c2c4d3d6afdd5f0344be4fe0d8bc70c072c97a002adbe extends Twig_Template
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
        $__internal_2df115398accfffa64748e665be59ac37d3b939e054dd4d040b2fde49d0fa3cd = $this->env->getExtension("native_profiler");
        $__internal_2df115398accfffa64748e665be59ac37d3b939e054dd4d040b2fde49d0fa3cd->enter($__internal_2df115398accfffa64748e665be59ac37d3b939e054dd4d040b2fde49d0fa3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2df115398accfffa64748e665be59ac37d3b939e054dd4d040b2fde49d0fa3cd->leave($__internal_2df115398accfffa64748e665be59ac37d3b939e054dd4d040b2fde49d0fa3cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
