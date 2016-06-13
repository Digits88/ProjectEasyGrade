<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e6c7fdda717fcc01e074f4bbb37ec06fc575a9e7227448b593a89569312d62cd extends Twig_Template
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
        $__internal_038986c19d270b7b77edff5c5cacf47cc7f1794463819ecee324e802def26f83 = $this->env->getExtension("native_profiler");
        $__internal_038986c19d270b7b77edff5c5cacf47cc7f1794463819ecee324e802def26f83->enter($__internal_038986c19d270b7b77edff5c5cacf47cc7f1794463819ecee324e802def26f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_038986c19d270b7b77edff5c5cacf47cc7f1794463819ecee324e802def26f83->leave($__internal_038986c19d270b7b77edff5c5cacf47cc7f1794463819ecee324e802def26f83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
