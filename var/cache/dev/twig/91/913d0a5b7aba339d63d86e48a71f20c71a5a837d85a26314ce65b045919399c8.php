<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_17cc2623f0cdd81f61a71898ff34dd87f363c4466bf886949ec8e4079c4a4d04 extends Twig_Template
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
        $__internal_c9b0fe94868c5f859f8f3355d13bb0c0c14acd33968977481c3dae8205bd8c0f = $this->env->getExtension("native_profiler");
        $__internal_c9b0fe94868c5f859f8f3355d13bb0c0c14acd33968977481c3dae8205bd8c0f->enter($__internal_c9b0fe94868c5f859f8f3355d13bb0c0c14acd33968977481c3dae8205bd8c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c9b0fe94868c5f859f8f3355d13bb0c0c14acd33968977481c3dae8205bd8c0f->leave($__internal_c9b0fe94868c5f859f8f3355d13bb0c0c14acd33968977481c3dae8205bd8c0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
