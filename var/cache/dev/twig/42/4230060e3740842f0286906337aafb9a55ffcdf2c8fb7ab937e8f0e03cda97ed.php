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
        $__internal_a527b6f72c62019e2cb03e127c00c966a8bb298e0803681db8f2bbbbf2fb08fd = $this->env->getExtension("native_profiler");
        $__internal_a527b6f72c62019e2cb03e127c00c966a8bb298e0803681db8f2bbbbf2fb08fd->enter($__internal_a527b6f72c62019e2cb03e127c00c966a8bb298e0803681db8f2bbbbf2fb08fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a527b6f72c62019e2cb03e127c00c966a8bb298e0803681db8f2bbbbf2fb08fd->leave($__internal_a527b6f72c62019e2cb03e127c00c966a8bb298e0803681db8f2bbbbf2fb08fd_prof);

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
