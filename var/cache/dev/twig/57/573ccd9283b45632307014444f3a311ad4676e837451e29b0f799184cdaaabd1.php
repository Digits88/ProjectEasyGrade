<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b6b6c751ddc3f9c7e5e04cef109449d269e655bee71a3468afaccf2d7c2e11cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_eba67caa953ec1e3fce09c775d853dce73e599ff1e40af35d1f4c9ccb5658777 = $this->env->getExtension("native_profiler");
        $__internal_eba67caa953ec1e3fce09c775d853dce73e599ff1e40af35d1f4c9ccb5658777->enter($__internal_eba67caa953ec1e3fce09c775d853dce73e599ff1e40af35d1f4c9ccb5658777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba67caa953ec1e3fce09c775d853dce73e599ff1e40af35d1f4c9ccb5658777->leave($__internal_eba67caa953ec1e3fce09c775d853dce73e599ff1e40af35d1f4c9ccb5658777_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36560b1911b4f1941e5f8fc42c415dc8038098c6bcc76ca99678583aebc1552f = $this->env->getExtension("native_profiler");
        $__internal_36560b1911b4f1941e5f8fc42c415dc8038098c6bcc76ca99678583aebc1552f->enter($__internal_36560b1911b4f1941e5f8fc42c415dc8038098c6bcc76ca99678583aebc1552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_36560b1911b4f1941e5f8fc42c415dc8038098c6bcc76ca99678583aebc1552f->leave($__internal_36560b1911b4f1941e5f8fc42c415dc8038098c6bcc76ca99678583aebc1552f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
