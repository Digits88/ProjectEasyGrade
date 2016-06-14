<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_97659e966fb887d08d89c67f5b3dce72331f5fa1776d71b355997028de2f3c7d extends Twig_Template
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
        $__internal_8e08de3ec1834bc35d6c44cb8e614304d6119b1968c53668271a0441b677377a = $this->env->getExtension("native_profiler");
        $__internal_8e08de3ec1834bc35d6c44cb8e614304d6119b1968c53668271a0441b677377a->enter($__internal_8e08de3ec1834bc35d6c44cb8e614304d6119b1968c53668271a0441b677377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8e08de3ec1834bc35d6c44cb8e614304d6119b1968c53668271a0441b677377a->leave($__internal_8e08de3ec1834bc35d6c44cb8e614304d6119b1968c53668271a0441b677377a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
