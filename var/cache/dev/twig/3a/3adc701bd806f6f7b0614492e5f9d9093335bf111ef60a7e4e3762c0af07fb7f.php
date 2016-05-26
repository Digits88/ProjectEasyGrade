<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_3dca13e6b3d49c1f45459e75bfbf972b7c9958f590431f19550f6a955ed1d161 extends Twig_Template
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
        $__internal_e9f62fe97f841a57b87540c9d65e0edb6354ba82f78c60f816d5f6387562d5bd = $this->env->getExtension("native_profiler");
        $__internal_e9f62fe97f841a57b87540c9d65e0edb6354ba82f78c60f816d5f6387562d5bd->enter($__internal_e9f62fe97f841a57b87540c9d65e0edb6354ba82f78c60f816d5f6387562d5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e9f62fe97f841a57b87540c9d65e0edb6354ba82f78c60f816d5f6387562d5bd->leave($__internal_e9f62fe97f841a57b87540c9d65e0edb6354ba82f78c60f816d5f6387562d5bd_prof);

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
