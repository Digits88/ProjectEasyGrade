<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_00160474b3f8ba2069f1cc1c26298ed2c60e905cb2161523a7f0f8c7ff7a7560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_cc0f8b7f47123609db942e2dbf8eade5ef1ce4855791c64ea765ed049eaac66c = $this->env->getExtension("native_profiler");
        $__internal_cc0f8b7f47123609db942e2dbf8eade5ef1ce4855791c64ea765ed049eaac66c->enter($__internal_cc0f8b7f47123609db942e2dbf8eade5ef1ce4855791c64ea765ed049eaac66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0f8b7f47123609db942e2dbf8eade5ef1ce4855791c64ea765ed049eaac66c->leave($__internal_cc0f8b7f47123609db942e2dbf8eade5ef1ce4855791c64ea765ed049eaac66c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c489c508ef1f2a802dfcc1797881d841b8ca148edb46a1c89677f971356ba17a = $this->env->getExtension("native_profiler");
        $__internal_c489c508ef1f2a802dfcc1797881d841b8ca148edb46a1c89677f971356ba17a->enter($__internal_c489c508ef1f2a802dfcc1797881d841b8ca148edb46a1c89677f971356ba17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c489c508ef1f2a802dfcc1797881d841b8ca148edb46a1c89677f971356ba17a->leave($__internal_c489c508ef1f2a802dfcc1797881d841b8ca148edb46a1c89677f971356ba17a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
