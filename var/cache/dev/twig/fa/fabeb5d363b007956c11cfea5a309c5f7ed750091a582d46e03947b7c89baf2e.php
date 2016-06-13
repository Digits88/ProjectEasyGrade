<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_104f5f7b636fdee03850da2f8114a300b15ab5e07cb13520aa5bdcf819381edc extends Twig_Template
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
        $__internal_e86e884229dcff09813e4ff05aacf8174143d1a4e44e46711f6935e7b4b7112b = $this->env->getExtension("native_profiler");
        $__internal_e86e884229dcff09813e4ff05aacf8174143d1a4e44e46711f6935e7b4b7112b->enter($__internal_e86e884229dcff09813e4ff05aacf8174143d1a4e44e46711f6935e7b4b7112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e86e884229dcff09813e4ff05aacf8174143d1a4e44e46711f6935e7b4b7112b->leave($__internal_e86e884229dcff09813e4ff05aacf8174143d1a4e44e46711f6935e7b4b7112b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
