<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_778c547203adc10200883448e43c837acd7fcbad5b183361f54a5aeed60c1967 extends Twig_Template
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
        $__internal_68ada0e9486d1eb5b29766cbee76fb339910a370f823b38a041536db4a8d39fc = $this->env->getExtension("native_profiler");
        $__internal_68ada0e9486d1eb5b29766cbee76fb339910a370f823b38a041536db4a8d39fc->enter($__internal_68ada0e9486d1eb5b29766cbee76fb339910a370f823b38a041536db4a8d39fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_68ada0e9486d1eb5b29766cbee76fb339910a370f823b38a041536db4a8d39fc->leave($__internal_68ada0e9486d1eb5b29766cbee76fb339910a370f823b38a041536db4a8d39fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
