<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_37d2db148cd3a414c46b285334b401ec54e88e6ee7b6fb37498f13f6e2066b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f72095d9f580c3d831022c5808791b2ebcd3f782a49d7fc4d87f6f680d23835c = $this->env->getExtension("native_profiler");
        $__internal_f72095d9f580c3d831022c5808791b2ebcd3f782a49d7fc4d87f6f680d23835c->enter($__internal_f72095d9f580c3d831022c5808791b2ebcd3f782a49d7fc4d87f6f680d23835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72095d9f580c3d831022c5808791b2ebcd3f782a49d7fc4d87f6f680d23835c->leave($__internal_f72095d9f580c3d831022c5808791b2ebcd3f782a49d7fc4d87f6f680d23835c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e92af65e852448ed5e3af5bef4ba2965230c0f237fed4f9518e1fc7f857999b = $this->env->getExtension("native_profiler");
        $__internal_5e92af65e852448ed5e3af5bef4ba2965230c0f237fed4f9518e1fc7f857999b->enter($__internal_5e92af65e852448ed5e3af5bef4ba2965230c0f237fed4f9518e1fc7f857999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5e92af65e852448ed5e3af5bef4ba2965230c0f237fed4f9518e1fc7f857999b->leave($__internal_5e92af65e852448ed5e3af5bef4ba2965230c0f237fed4f9518e1fc7f857999b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
