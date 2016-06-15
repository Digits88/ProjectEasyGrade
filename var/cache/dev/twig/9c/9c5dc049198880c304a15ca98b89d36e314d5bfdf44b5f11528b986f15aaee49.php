<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4a0dc4b761ab2ea4e2697db797a9cdf8c12283d6eb9c44451908ae075c0aac8d extends Twig_Template
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
        $__internal_ba49cc3d23a3a27793989c1065497ae6c17e3069cc5f6b28b604f1beaf55eb0f = $this->env->getExtension("native_profiler");
        $__internal_ba49cc3d23a3a27793989c1065497ae6c17e3069cc5f6b28b604f1beaf55eb0f->enter($__internal_ba49cc3d23a3a27793989c1065497ae6c17e3069cc5f6b28b604f1beaf55eb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba49cc3d23a3a27793989c1065497ae6c17e3069cc5f6b28b604f1beaf55eb0f->leave($__internal_ba49cc3d23a3a27793989c1065497ae6c17e3069cc5f6b28b604f1beaf55eb0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a31d6eaf68f9025bd1388126e27746fde621ff32e6be293883f80b86893dc3b = $this->env->getExtension("native_profiler");
        $__internal_3a31d6eaf68f9025bd1388126e27746fde621ff32e6be293883f80b86893dc3b->enter($__internal_3a31d6eaf68f9025bd1388126e27746fde621ff32e6be293883f80b86893dc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a31d6eaf68f9025bd1388126e27746fde621ff32e6be293883f80b86893dc3b->leave($__internal_3a31d6eaf68f9025bd1388126e27746fde621ff32e6be293883f80b86893dc3b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16c9c3ec9a2360e885f5f5ba6104ebdcab9ec0e6985f2fe7a7579084a9cf2cde = $this->env->getExtension("native_profiler");
        $__internal_16c9c3ec9a2360e885f5f5ba6104ebdcab9ec0e6985f2fe7a7579084a9cf2cde->enter($__internal_16c9c3ec9a2360e885f5f5ba6104ebdcab9ec0e6985f2fe7a7579084a9cf2cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16c9c3ec9a2360e885f5f5ba6104ebdcab9ec0e6985f2fe7a7579084a9cf2cde->leave($__internal_16c9c3ec9a2360e885f5f5ba6104ebdcab9ec0e6985f2fe7a7579084a9cf2cde_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28b2e1d751787b0f16c3888619a2703e88283e3053590be2388b0e93962e33b2 = $this->env->getExtension("native_profiler");
        $__internal_28b2e1d751787b0f16c3888619a2703e88283e3053590be2388b0e93962e33b2->enter($__internal_28b2e1d751787b0f16c3888619a2703e88283e3053590be2388b0e93962e33b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_28b2e1d751787b0f16c3888619a2703e88283e3053590be2388b0e93962e33b2->leave($__internal_28b2e1d751787b0f16c3888619a2703e88283e3053590be2388b0e93962e33b2_prof);

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
