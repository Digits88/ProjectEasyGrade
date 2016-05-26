<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5fd255a0c8e5fb67730db70d4d62280d0b155a4afcfecec9f833b30c70015394 extends Twig_Template
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
        $__internal_e905d819d7efa51b10dab26c787c676fa3af44026b11a5d800ebe10d79095653 = $this->env->getExtension("native_profiler");
        $__internal_e905d819d7efa51b10dab26c787c676fa3af44026b11a5d800ebe10d79095653->enter($__internal_e905d819d7efa51b10dab26c787c676fa3af44026b11a5d800ebe10d79095653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e905d819d7efa51b10dab26c787c676fa3af44026b11a5d800ebe10d79095653->leave($__internal_e905d819d7efa51b10dab26c787c676fa3af44026b11a5d800ebe10d79095653_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
