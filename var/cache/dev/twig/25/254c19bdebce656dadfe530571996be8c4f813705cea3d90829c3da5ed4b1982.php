<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_671ef10c66b2121ecdb0d9aff22ebd7962b67a2dd6b6b1d42b5816a6baa3daf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c98a4f4593f4fb44d039c553f644e92c95668ff4f8b810182732d0703ad3f5c5 = $this->env->getExtension("native_profiler");
        $__internal_c98a4f4593f4fb44d039c553f644e92c95668ff4f8b810182732d0703ad3f5c5->enter($__internal_c98a4f4593f4fb44d039c553f644e92c95668ff4f8b810182732d0703ad3f5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98a4f4593f4fb44d039c553f644e92c95668ff4f8b810182732d0703ad3f5c5->leave($__internal_c98a4f4593f4fb44d039c553f644e92c95668ff4f8b810182732d0703ad3f5c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_250de09e26731a3ccf8f95f156b19fce84299914a7bdeaac22379b78c617a596 = $this->env->getExtension("native_profiler");
        $__internal_250de09e26731a3ccf8f95f156b19fce84299914a7bdeaac22379b78c617a596->enter($__internal_250de09e26731a3ccf8f95f156b19fce84299914a7bdeaac22379b78c617a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_250de09e26731a3ccf8f95f156b19fce84299914a7bdeaac22379b78c617a596->leave($__internal_250de09e26731a3ccf8f95f156b19fce84299914a7bdeaac22379b78c617a596_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
