<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7a98efd7fa5da89e35b7a2252ab3f0e7e4fb9bdf11fb3c95b1dfcf60bf189ab2 extends Twig_Template
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
        $__internal_73a6ea3f6888e9eadc7c722337688c3704d4b732c2dfd3f8b2b2c22e3d574886 = $this->env->getExtension("native_profiler");
        $__internal_73a6ea3f6888e9eadc7c722337688c3704d4b732c2dfd3f8b2b2c22e3d574886->enter($__internal_73a6ea3f6888e9eadc7c722337688c3704d4b732c2dfd3f8b2b2c22e3d574886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_73a6ea3f6888e9eadc7c722337688c3704d4b732c2dfd3f8b2b2c22e3d574886->leave($__internal_73a6ea3f6888e9eadc7c722337688c3704d4b732c2dfd3f8b2b2c22e3d574886_prof);

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
