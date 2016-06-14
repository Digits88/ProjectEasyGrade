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
        $__internal_063c50205c5a8159f97084ec700e1e380d80e079cdebe97e158e28d98840a1ae = $this->env->getExtension("native_profiler");
        $__internal_063c50205c5a8159f97084ec700e1e380d80e079cdebe97e158e28d98840a1ae->enter($__internal_063c50205c5a8159f97084ec700e1e380d80e079cdebe97e158e28d98840a1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063c50205c5a8159f97084ec700e1e380d80e079cdebe97e158e28d98840a1ae->leave($__internal_063c50205c5a8159f97084ec700e1e380d80e079cdebe97e158e28d98840a1ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14f2cff338fd65bf8e0eb4c510d70407d608f371ecfce5a42752f7db70201f5b = $this->env->getExtension("native_profiler");
        $__internal_14f2cff338fd65bf8e0eb4c510d70407d608f371ecfce5a42752f7db70201f5b->enter($__internal_14f2cff338fd65bf8e0eb4c510d70407d608f371ecfce5a42752f7db70201f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_14f2cff338fd65bf8e0eb4c510d70407d608f371ecfce5a42752f7db70201f5b->leave($__internal_14f2cff338fd65bf8e0eb4c510d70407d608f371ecfce5a42752f7db70201f5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_087106d702299762e8bd78c676b02d5455ce8a7ca692a3cbd54b1c1f94edd6bd = $this->env->getExtension("native_profiler");
        $__internal_087106d702299762e8bd78c676b02d5455ce8a7ca692a3cbd54b1c1f94edd6bd->enter($__internal_087106d702299762e8bd78c676b02d5455ce8a7ca692a3cbd54b1c1f94edd6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_087106d702299762e8bd78c676b02d5455ce8a7ca692a3cbd54b1c1f94edd6bd->leave($__internal_087106d702299762e8bd78c676b02d5455ce8a7ca692a3cbd54b1c1f94edd6bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ea7ba50589edf9dbd73349f945072fa13cac09cc0d5db5cd53a266f5ab0feee = $this->env->getExtension("native_profiler");
        $__internal_4ea7ba50589edf9dbd73349f945072fa13cac09cc0d5db5cd53a266f5ab0feee->enter($__internal_4ea7ba50589edf9dbd73349f945072fa13cac09cc0d5db5cd53a266f5ab0feee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4ea7ba50589edf9dbd73349f945072fa13cac09cc0d5db5cd53a266f5ab0feee->leave($__internal_4ea7ba50589edf9dbd73349f945072fa13cac09cc0d5db5cd53a266f5ab0feee_prof);

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
