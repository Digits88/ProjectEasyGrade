<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_36f48635dafaa725c7f178cb94d0cd0c70bca3d131b97779dcc73957c6fcf9ec extends Twig_Template
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
        $__internal_d82a19cca9768ae400b00dc3d0994f136e3702eec9eddb862bdc84ebea0396de = $this->env->getExtension("native_profiler");
        $__internal_d82a19cca9768ae400b00dc3d0994f136e3702eec9eddb862bdc84ebea0396de->enter($__internal_d82a19cca9768ae400b00dc3d0994f136e3702eec9eddb862bdc84ebea0396de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d82a19cca9768ae400b00dc3d0994f136e3702eec9eddb862bdc84ebea0396de->leave($__internal_d82a19cca9768ae400b00dc3d0994f136e3702eec9eddb862bdc84ebea0396de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
