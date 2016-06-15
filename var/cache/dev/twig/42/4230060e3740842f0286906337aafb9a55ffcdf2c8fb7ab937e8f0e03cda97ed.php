<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8d8e5a78d60547f230014ecc981a5a738b3d02efce3da19b300630645b3a5df0 extends Twig_Template
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
        $__internal_6fd3c1f8b18d06781faccc260a3bbc181283ae40ef6d9a1e3faf7f471f1e585f = $this->env->getExtension("native_profiler");
        $__internal_6fd3c1f8b18d06781faccc260a3bbc181283ae40ef6d9a1e3faf7f471f1e585f->enter($__internal_6fd3c1f8b18d06781faccc260a3bbc181283ae40ef6d9a1e3faf7f471f1e585f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6fd3c1f8b18d06781faccc260a3bbc181283ae40ef6d9a1e3faf7f471f1e585f->leave($__internal_6fd3c1f8b18d06781faccc260a3bbc181283ae40ef6d9a1e3faf7f471f1e585f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
