<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fc4675495e37f72241a4f33d1238ae603762f42ee31f8b731dc16f458a42885c extends Twig_Template
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
        $__internal_1475ef034eb4fda764be8fb26603debd11c317dc9e54a35cf362cd7d97add1c5 = $this->env->getExtension("native_profiler");
        $__internal_1475ef034eb4fda764be8fb26603debd11c317dc9e54a35cf362cd7d97add1c5->enter($__internal_1475ef034eb4fda764be8fb26603debd11c317dc9e54a35cf362cd7d97add1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1475ef034eb4fda764be8fb26603debd11c317dc9e54a35cf362cd7d97add1c5->leave($__internal_1475ef034eb4fda764be8fb26603debd11c317dc9e54a35cf362cd7d97add1c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
