<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a76d95e1cd3073465eec673199a1bc148ec8e876a5d17d497e7a690375f2129c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b6668dd9524f3abb362f08301412f10fdb5a5ef0cef466f8db3d69f2824ba8b = $this->env->getExtension("native_profiler");
        $__internal_2b6668dd9524f3abb362f08301412f10fdb5a5ef0cef466f8db3d69f2824ba8b->enter($__internal_2b6668dd9524f3abb362f08301412f10fdb5a5ef0cef466f8db3d69f2824ba8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6668dd9524f3abb362f08301412f10fdb5a5ef0cef466f8db3d69f2824ba8b->leave($__internal_2b6668dd9524f3abb362f08301412f10fdb5a5ef0cef466f8db3d69f2824ba8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8617c903675591fd05549a367ea227f73c176406fdbc6f1e3f8ec59489e36732 = $this->env->getExtension("native_profiler");
        $__internal_8617c903675591fd05549a367ea227f73c176406fdbc6f1e3f8ec59489e36732->enter($__internal_8617c903675591fd05549a367ea227f73c176406fdbc6f1e3f8ec59489e36732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8617c903675591fd05549a367ea227f73c176406fdbc6f1e3f8ec59489e36732->leave($__internal_8617c903675591fd05549a367ea227f73c176406fdbc6f1e3f8ec59489e36732_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
