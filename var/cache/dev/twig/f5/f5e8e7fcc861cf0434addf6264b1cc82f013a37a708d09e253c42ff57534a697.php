<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_47d784835740e82f1fb515d8c53ab134efa2dccd1b666b32c7b8b6cf1bf00028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_d13d94cb1d8d24e446a157a62be11e24cc61ad9a17fd945312e0408c2b26c510 = $this->env->getExtension("native_profiler");
        $__internal_d13d94cb1d8d24e446a157a62be11e24cc61ad9a17fd945312e0408c2b26c510->enter($__internal_d13d94cb1d8d24e446a157a62be11e24cc61ad9a17fd945312e0408c2b26c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13d94cb1d8d24e446a157a62be11e24cc61ad9a17fd945312e0408c2b26c510->leave($__internal_d13d94cb1d8d24e446a157a62be11e24cc61ad9a17fd945312e0408c2b26c510_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f98ab8572e9ee67064e3244b80912f9151c716c8acaa8c48881b840672606aea = $this->env->getExtension("native_profiler");
        $__internal_f98ab8572e9ee67064e3244b80912f9151c716c8acaa8c48881b840672606aea->enter($__internal_f98ab8572e9ee67064e3244b80912f9151c716c8acaa8c48881b840672606aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f98ab8572e9ee67064e3244b80912f9151c716c8acaa8c48881b840672606aea->leave($__internal_f98ab8572e9ee67064e3244b80912f9151c716c8acaa8c48881b840672606aea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
