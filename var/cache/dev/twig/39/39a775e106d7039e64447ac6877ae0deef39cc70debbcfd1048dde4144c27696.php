<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_49319cbcefd80f0b836291cb6b93df45009edb13cb27d1b9f3e0deaa38ff3452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_b0527e21572317ddbaf9f67c0dc96f49f59cc62126f673a7a514d6f6a70b0ee2 = $this->env->getExtension("native_profiler");
        $__internal_b0527e21572317ddbaf9f67c0dc96f49f59cc62126f673a7a514d6f6a70b0ee2->enter($__internal_b0527e21572317ddbaf9f67c0dc96f49f59cc62126f673a7a514d6f6a70b0ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0527e21572317ddbaf9f67c0dc96f49f59cc62126f673a7a514d6f6a70b0ee2->leave($__internal_b0527e21572317ddbaf9f67c0dc96f49f59cc62126f673a7a514d6f6a70b0ee2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3d4e44514c30f9b78e97139ef620334c0bb5bae4ade702a696f8ad97c56b9a9 = $this->env->getExtension("native_profiler");
        $__internal_a3d4e44514c30f9b78e97139ef620334c0bb5bae4ade702a696f8ad97c56b9a9->enter($__internal_a3d4e44514c30f9b78e97139ef620334c0bb5bae4ade702a696f8ad97c56b9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3d4e44514c30f9b78e97139ef620334c0bb5bae4ade702a696f8ad97c56b9a9->leave($__internal_a3d4e44514c30f9b78e97139ef620334c0bb5bae4ade702a696f8ad97c56b9a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b861e49fa0780e4d704de6715dee360be4f7130b5427292c786695cafedc6a9 = $this->env->getExtension("native_profiler");
        $__internal_4b861e49fa0780e4d704de6715dee360be4f7130b5427292c786695cafedc6a9->enter($__internal_4b861e49fa0780e4d704de6715dee360be4f7130b5427292c786695cafedc6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b861e49fa0780e4d704de6715dee360be4f7130b5427292c786695cafedc6a9->leave($__internal_4b861e49fa0780e4d704de6715dee360be4f7130b5427292c786695cafedc6a9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdb7adc548eea67a9aac980673948cfd70cd4d5fc3fbcf4c0f7d8b8ea6a43ffd = $this->env->getExtension("native_profiler");
        $__internal_fdb7adc548eea67a9aac980673948cfd70cd4d5fc3fbcf4c0f7d8b8ea6a43ffd->enter($__internal_fdb7adc548eea67a9aac980673948cfd70cd4d5fc3fbcf4c0f7d8b8ea6a43ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fdb7adc548eea67a9aac980673948cfd70cd4d5fc3fbcf4c0f7d8b8ea6a43ffd->leave($__internal_fdb7adc548eea67a9aac980673948cfd70cd4d5fc3fbcf4c0f7d8b8ea6a43ffd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
