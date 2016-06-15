<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8088c7c221e097cd71e36925acc96adc55dfb2d8fb86105699de61c2bd6c9c1a extends Twig_Template
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
        $__internal_bcf47d8341448425550c2c4ac1ea7dc62a3c88c4e385115d3a89e808f98393cf = $this->env->getExtension("native_profiler");
        $__internal_bcf47d8341448425550c2c4ac1ea7dc62a3c88c4e385115d3a89e808f98393cf->enter($__internal_bcf47d8341448425550c2c4ac1ea7dc62a3c88c4e385115d3a89e808f98393cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bcf47d8341448425550c2c4ac1ea7dc62a3c88c4e385115d3a89e808f98393cf->leave($__internal_bcf47d8341448425550c2c4ac1ea7dc62a3c88c4e385115d3a89e808f98393cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
