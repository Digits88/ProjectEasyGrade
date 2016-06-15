<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b79138e12fb6a631f3728c9367514a97dfbf987fb0e14b2de53737c56ef2eda6 extends Twig_Template
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
        $__internal_efcccb08c0ee18fa45e3c90f576facefb4ff1048fbd0875bc546a46874da4fdd = $this->env->getExtension("native_profiler");
        $__internal_efcccb08c0ee18fa45e3c90f576facefb4ff1048fbd0875bc546a46874da4fdd->enter($__internal_efcccb08c0ee18fa45e3c90f576facefb4ff1048fbd0875bc546a46874da4fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_efcccb08c0ee18fa45e3c90f576facefb4ff1048fbd0875bc546a46874da4fdd->leave($__internal_efcccb08c0ee18fa45e3c90f576facefb4ff1048fbd0875bc546a46874da4fdd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
