<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_450779b65638acf1c2dfd02f9a0e8428063d6b91c48e6497e20c738b48492bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b644e5fbcbfb946201277d383369208de80f6fb1d54d65eb03c789102c998753 = $this->env->getExtension("native_profiler");
        $__internal_b644e5fbcbfb946201277d383369208de80f6fb1d54d65eb03c789102c998753->enter($__internal_b644e5fbcbfb946201277d383369208de80f6fb1d54d65eb03c789102c998753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b644e5fbcbfb946201277d383369208de80f6fb1d54d65eb03c789102c998753->leave($__internal_b644e5fbcbfb946201277d383369208de80f6fb1d54d65eb03c789102c998753_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b9f5f3adeee06f1b1d9b45a1c6c272eecc51f0ce6d448e9d7ba3e63d82a8604 = $this->env->getExtension("native_profiler");
        $__internal_9b9f5f3adeee06f1b1d9b45a1c6c272eecc51f0ce6d448e9d7ba3e63d82a8604->enter($__internal_9b9f5f3adeee06f1b1d9b45a1c6c272eecc51f0ce6d448e9d7ba3e63d82a8604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b9f5f3adeee06f1b1d9b45a1c6c272eecc51f0ce6d448e9d7ba3e63d82a8604->leave($__internal_9b9f5f3adeee06f1b1d9b45a1c6c272eecc51f0ce6d448e9d7ba3e63d82a8604_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eea66211e563a7bf4395edf389db5d8c84f89a86ec3a6ee93109f5be3c83deff = $this->env->getExtension("native_profiler");
        $__internal_eea66211e563a7bf4395edf389db5d8c84f89a86ec3a6ee93109f5be3c83deff->enter($__internal_eea66211e563a7bf4395edf389db5d8c84f89a86ec3a6ee93109f5be3c83deff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eea66211e563a7bf4395edf389db5d8c84f89a86ec3a6ee93109f5be3c83deff->leave($__internal_eea66211e563a7bf4395edf389db5d8c84f89a86ec3a6ee93109f5be3c83deff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_212ad9c0e50b685b7fbdb32afff89a1307961ecdba2679121f27655a190920c7 = $this->env->getExtension("native_profiler");
        $__internal_212ad9c0e50b685b7fbdb32afff89a1307961ecdba2679121f27655a190920c7->enter($__internal_212ad9c0e50b685b7fbdb32afff89a1307961ecdba2679121f27655a190920c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_212ad9c0e50b685b7fbdb32afff89a1307961ecdba2679121f27655a190920c7->leave($__internal_212ad9c0e50b685b7fbdb32afff89a1307961ecdba2679121f27655a190920c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
