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
        $__internal_08fb778f70d43fd241fb9f6b96d824677c83c6b17d12b34ada9c32372aa06929 = $this->env->getExtension("native_profiler");
        $__internal_08fb778f70d43fd241fb9f6b96d824677c83c6b17d12b34ada9c32372aa06929->enter($__internal_08fb778f70d43fd241fb9f6b96d824677c83c6b17d12b34ada9c32372aa06929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_08fb778f70d43fd241fb9f6b96d824677c83c6b17d12b34ada9c32372aa06929->leave($__internal_08fb778f70d43fd241fb9f6b96d824677c83c6b17d12b34ada9c32372aa06929_prof);

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
