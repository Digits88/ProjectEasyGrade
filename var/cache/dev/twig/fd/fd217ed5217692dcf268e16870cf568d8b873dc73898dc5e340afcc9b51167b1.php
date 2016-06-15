<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_97b406d5dbc7c401f512d515fc5d543bdedf29e40ed9821f3ef2cf9f30d18a67 extends Twig_Template
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
        $__internal_0df02e067fc77e0d5d6798e84bea15b8ab268322c81451e338607ffe5fb7eb91 = $this->env->getExtension("native_profiler");
        $__internal_0df02e067fc77e0d5d6798e84bea15b8ab268322c81451e338607ffe5fb7eb91->enter($__internal_0df02e067fc77e0d5d6798e84bea15b8ab268322c81451e338607ffe5fb7eb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0df02e067fc77e0d5d6798e84bea15b8ab268322c81451e338607ffe5fb7eb91->leave($__internal_0df02e067fc77e0d5d6798e84bea15b8ab268322c81451e338607ffe5fb7eb91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c63b06db8b640ae1064e56d157332902dfcaca29f8847b73cd4e695d59860494 = $this->env->getExtension("native_profiler");
        $__internal_c63b06db8b640ae1064e56d157332902dfcaca29f8847b73cd4e695d59860494->enter($__internal_c63b06db8b640ae1064e56d157332902dfcaca29f8847b73cd4e695d59860494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_c63b06db8b640ae1064e56d157332902dfcaca29f8847b73cd4e695d59860494->leave($__internal_c63b06db8b640ae1064e56d157332902dfcaca29f8847b73cd4e695d59860494_prof);

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
