<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ca409588e2b0e40b81119722cfe062c15ceb99f6cc6b975f02173d67ac21a11f extends Twig_Template
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
        $__internal_8fd50697dc7fe149fe7efaeb2c166d9f4dc032f38070b9e666c99a51e51652e2 = $this->env->getExtension("native_profiler");
        $__internal_8fd50697dc7fe149fe7efaeb2c166d9f4dc032f38070b9e666c99a51e51652e2->enter($__internal_8fd50697dc7fe149fe7efaeb2c166d9f4dc032f38070b9e666c99a51e51652e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8fd50697dc7fe149fe7efaeb2c166d9f4dc032f38070b9e666c99a51e51652e2->leave($__internal_8fd50697dc7fe149fe7efaeb2c166d9f4dc032f38070b9e666c99a51e51652e2_prof);

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
