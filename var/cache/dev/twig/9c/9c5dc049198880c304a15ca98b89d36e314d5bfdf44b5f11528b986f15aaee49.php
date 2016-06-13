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
        $__internal_7acdec3b1f82271be6c01990a8bdee1f9fa1cfbbfab499639d73d8dfc08c0f7a = $this->env->getExtension("native_profiler");
        $__internal_7acdec3b1f82271be6c01990a8bdee1f9fa1cfbbfab499639d73d8dfc08c0f7a->enter($__internal_7acdec3b1f82271be6c01990a8bdee1f9fa1cfbbfab499639d73d8dfc08c0f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7acdec3b1f82271be6c01990a8bdee1f9fa1cfbbfab499639d73d8dfc08c0f7a->leave($__internal_7acdec3b1f82271be6c01990a8bdee1f9fa1cfbbfab499639d73d8dfc08c0f7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9177c4a7f8d4686f6f2d4e14c32b1477267cdc382476c806b3573ff6f7c41f3d = $this->env->getExtension("native_profiler");
        $__internal_9177c4a7f8d4686f6f2d4e14c32b1477267cdc382476c806b3573ff6f7c41f3d->enter($__internal_9177c4a7f8d4686f6f2d4e14c32b1477267cdc382476c806b3573ff6f7c41f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9177c4a7f8d4686f6f2d4e14c32b1477267cdc382476c806b3573ff6f7c41f3d->leave($__internal_9177c4a7f8d4686f6f2d4e14c32b1477267cdc382476c806b3573ff6f7c41f3d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7c5fe9a5259122ae88c2303f9949b83362497b6a2c7222ad0ca264597a71922 = $this->env->getExtension("native_profiler");
        $__internal_d7c5fe9a5259122ae88c2303f9949b83362497b6a2c7222ad0ca264597a71922->enter($__internal_d7c5fe9a5259122ae88c2303f9949b83362497b6a2c7222ad0ca264597a71922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7c5fe9a5259122ae88c2303f9949b83362497b6a2c7222ad0ca264597a71922->leave($__internal_d7c5fe9a5259122ae88c2303f9949b83362497b6a2c7222ad0ca264597a71922_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_756eab90d9ada6e3296185702e3a5b36f6a4c5ebf35b96098670f6cacc602167 = $this->env->getExtension("native_profiler");
        $__internal_756eab90d9ada6e3296185702e3a5b36f6a4c5ebf35b96098670f6cacc602167->enter($__internal_756eab90d9ada6e3296185702e3a5b36f6a4c5ebf35b96098670f6cacc602167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_756eab90d9ada6e3296185702e3a5b36f6a4c5ebf35b96098670f6cacc602167->leave($__internal_756eab90d9ada6e3296185702e3a5b36f6a4c5ebf35b96098670f6cacc602167_prof);

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
