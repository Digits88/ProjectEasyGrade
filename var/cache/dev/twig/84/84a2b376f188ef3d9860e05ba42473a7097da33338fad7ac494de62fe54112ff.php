<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_67d5c4c83466b6e047d0f3b0bb0d65e54d48add7f101b887b9b9995ad1586ac4 extends Twig_Template
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
        $__internal_cc074541a81339b991998ca7a7237b9c7a87c0c8bca3874d66c3c93702a7af6e = $this->env->getExtension("native_profiler");
        $__internal_cc074541a81339b991998ca7a7237b9c7a87c0c8bca3874d66c3c93702a7af6e->enter($__internal_cc074541a81339b991998ca7a7237b9c7a87c0c8bca3874d66c3c93702a7af6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cc074541a81339b991998ca7a7237b9c7a87c0c8bca3874d66c3c93702a7af6e->leave($__internal_cc074541a81339b991998ca7a7237b9c7a87c0c8bca3874d66c3c93702a7af6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
