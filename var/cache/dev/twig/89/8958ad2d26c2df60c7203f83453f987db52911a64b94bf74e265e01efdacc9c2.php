<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d6c49c8c520fa3c2943f3f5a74df2576611aeed13f201087455b2751b40ab321 extends Twig_Template
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
        $__internal_f6a8eadf3d1d5f739c0205dea13ebcd25e03eb925dc4e77810020d9e0fcbb94e = $this->env->getExtension("native_profiler");
        $__internal_f6a8eadf3d1d5f739c0205dea13ebcd25e03eb925dc4e77810020d9e0fcbb94e->enter($__internal_f6a8eadf3d1d5f739c0205dea13ebcd25e03eb925dc4e77810020d9e0fcbb94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f6a8eadf3d1d5f739c0205dea13ebcd25e03eb925dc4e77810020d9e0fcbb94e->leave($__internal_f6a8eadf3d1d5f739c0205dea13ebcd25e03eb925dc4e77810020d9e0fcbb94e_prof);

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
