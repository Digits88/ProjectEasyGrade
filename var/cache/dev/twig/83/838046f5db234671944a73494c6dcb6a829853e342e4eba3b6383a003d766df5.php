<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1d499731eb6c8c809814107df7d02148db5478b72cbea02ba266b0573522e209 extends Twig_Template
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
        $__internal_2ec9b361daf7fbec7875cea2bd29842a28ac3a175b32070592f971c502a26e86 = $this->env->getExtension("native_profiler");
        $__internal_2ec9b361daf7fbec7875cea2bd29842a28ac3a175b32070592f971c502a26e86->enter($__internal_2ec9b361daf7fbec7875cea2bd29842a28ac3a175b32070592f971c502a26e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2ec9b361daf7fbec7875cea2bd29842a28ac3a175b32070592f971c502a26e86->leave($__internal_2ec9b361daf7fbec7875cea2bd29842a28ac3a175b32070592f971c502a26e86_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
