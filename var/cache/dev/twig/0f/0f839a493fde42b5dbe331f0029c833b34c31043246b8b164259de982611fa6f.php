<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_9a8270738626f55fcc82fc805cb06d1b51e8b9e9917e5120cebedd5f1ea37437 extends Twig_Template
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
        $__internal_3119daf592a8d714039c9994accc6fd6a4bd421dc8874ded1ddc17b23caa4dd1 = $this->env->getExtension("native_profiler");
        $__internal_3119daf592a8d714039c9994accc6fd6a4bd421dc8874ded1ddc17b23caa4dd1->enter($__internal_3119daf592a8d714039c9994accc6fd6a4bd421dc8874ded1ddc17b23caa4dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3119daf592a8d714039c9994accc6fd6a4bd421dc8874ded1ddc17b23caa4dd1->leave($__internal_3119daf592a8d714039c9994accc6fd6a4bd421dc8874ded1ddc17b23caa4dd1_prof);

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
