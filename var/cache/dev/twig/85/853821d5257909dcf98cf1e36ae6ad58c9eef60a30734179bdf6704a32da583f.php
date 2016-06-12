<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c699e77bca6cffeeda4e653d8152ba05b2864d1eb642cf0accceb9a0672bb12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f01872847d743d774d15eea76895c2312cbb7eacf12693b852debfea1c8f0ada = $this->env->getExtension("native_profiler");
        $__internal_f01872847d743d774d15eea76895c2312cbb7eacf12693b852debfea1c8f0ada->enter($__internal_f01872847d743d774d15eea76895c2312cbb7eacf12693b852debfea1c8f0ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f01872847d743d774d15eea76895c2312cbb7eacf12693b852debfea1c8f0ada->leave($__internal_f01872847d743d774d15eea76895c2312cbb7eacf12693b852debfea1c8f0ada_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f13fd2af4d10bb886e3df871b01a4101d72301fb6ab6bbc7f3041454594ff08a = $this->env->getExtension("native_profiler");
        $__internal_f13fd2af4d10bb886e3df871b01a4101d72301fb6ab6bbc7f3041454594ff08a->enter($__internal_f13fd2af4d10bb886e3df871b01a4101d72301fb6ab6bbc7f3041454594ff08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f13fd2af4d10bb886e3df871b01a4101d72301fb6ab6bbc7f3041454594ff08a->leave($__internal_f13fd2af4d10bb886e3df871b01a4101d72301fb6ab6bbc7f3041454594ff08a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
