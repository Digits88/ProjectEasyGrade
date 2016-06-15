<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ebdbfb0f4b4a8c0502a471f03784b22a37c2ece7eeab6eeb659af02f186ec7b7 extends Twig_Template
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
        $__internal_11d8f510ba9d0ea173d27fdf38a708ae0b07479bfd4160ed145513be25c2244f = $this->env->getExtension("native_profiler");
        $__internal_11d8f510ba9d0ea173d27fdf38a708ae0b07479bfd4160ed145513be25c2244f->enter($__internal_11d8f510ba9d0ea173d27fdf38a708ae0b07479bfd4160ed145513be25c2244f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11d8f510ba9d0ea173d27fdf38a708ae0b07479bfd4160ed145513be25c2244f->leave($__internal_11d8f510ba9d0ea173d27fdf38a708ae0b07479bfd4160ed145513be25c2244f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da6841b2ea80440413af253bd7f0e4831b096643a18a7e0aa02e28531e5dc478 = $this->env->getExtension("native_profiler");
        $__internal_da6841b2ea80440413af253bd7f0e4831b096643a18a7e0aa02e28531e5dc478->enter($__internal_da6841b2ea80440413af253bd7f0e4831b096643a18a7e0aa02e28531e5dc478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_da6841b2ea80440413af253bd7f0e4831b096643a18a7e0aa02e28531e5dc478->leave($__internal_da6841b2ea80440413af253bd7f0e4831b096643a18a7e0aa02e28531e5dc478_prof);

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
