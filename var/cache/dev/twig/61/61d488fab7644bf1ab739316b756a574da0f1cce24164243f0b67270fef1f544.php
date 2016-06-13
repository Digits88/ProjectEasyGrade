<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a317c2dc3c83f7be530e743a1c3eebd755ffc3d0bee59083fab9099663d00ae7 extends Twig_Template
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
        $__internal_8f8b425cc38814e05933683216843ce8aea8ae66fc098f296af35ea0a7134463 = $this->env->getExtension("native_profiler");
        $__internal_8f8b425cc38814e05933683216843ce8aea8ae66fc098f296af35ea0a7134463->enter($__internal_8f8b425cc38814e05933683216843ce8aea8ae66fc098f296af35ea0a7134463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8f8b425cc38814e05933683216843ce8aea8ae66fc098f296af35ea0a7134463->leave($__internal_8f8b425cc38814e05933683216843ce8aea8ae66fc098f296af35ea0a7134463_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
