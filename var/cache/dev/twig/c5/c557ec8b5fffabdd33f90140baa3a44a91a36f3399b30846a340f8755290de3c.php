<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_da81a4c27f6cbae33fc415371014a6208035df5d62c7fd47b678422634c054dd extends Twig_Template
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
        $__internal_7801763679ac72782857ae81023aa6cc619b662c9d0415285ee5cff8771c8bc8 = $this->env->getExtension("native_profiler");
        $__internal_7801763679ac72782857ae81023aa6cc619b662c9d0415285ee5cff8771c8bc8->enter($__internal_7801763679ac72782857ae81023aa6cc619b662c9d0415285ee5cff8771c8bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7801763679ac72782857ae81023aa6cc619b662c9d0415285ee5cff8771c8bc8->leave($__internal_7801763679ac72782857ae81023aa6cc619b662c9d0415285ee5cff8771c8bc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e54e9e066c30474cef5d485c1bc9414bf7756ef95142cfaf4d201712e7da46d2 = $this->env->getExtension("native_profiler");
        $__internal_e54e9e066c30474cef5d485c1bc9414bf7756ef95142cfaf4d201712e7da46d2->enter($__internal_e54e9e066c30474cef5d485c1bc9414bf7756ef95142cfaf4d201712e7da46d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e54e9e066c30474cef5d485c1bc9414bf7756ef95142cfaf4d201712e7da46d2->leave($__internal_e54e9e066c30474cef5d485c1bc9414bf7756ef95142cfaf4d201712e7da46d2_prof);

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
