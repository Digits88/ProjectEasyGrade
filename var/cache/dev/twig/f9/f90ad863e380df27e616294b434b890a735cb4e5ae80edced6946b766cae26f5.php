<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_5a0e66b3e02d67720132d6f61aac6a1aa9f1e1503022b5318d3e06d823407055 extends Twig_Template
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
        $__internal_b2c2b11b930e1cb2a15904c275f112a210479f542e7496e1aa7c7f4b56f6aad0 = $this->env->getExtension("native_profiler");
        $__internal_b2c2b11b930e1cb2a15904c275f112a210479f542e7496e1aa7c7f4b56f6aad0->enter($__internal_b2c2b11b930e1cb2a15904c275f112a210479f542e7496e1aa7c7f4b56f6aad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b2c2b11b930e1cb2a15904c275f112a210479f542e7496e1aa7c7f4b56f6aad0->leave($__internal_b2c2b11b930e1cb2a15904c275f112a210479f542e7496e1aa7c7f4b56f6aad0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  44 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* [exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}*/
/* [message] {{ exception.message }}*/
/* {% for i, e in exception.toarray %}*/
/* [{{ i + 1 }}] {{ e.class }}: {{ e.message }}*/
/* {% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}*/
/* */
/* {% endfor %}*/
/* */