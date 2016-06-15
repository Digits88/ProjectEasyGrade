<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5610a3cf5249a1c0cc26bd524799bfedf1f34db8506ca6164f1b2d087b4ceb9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e5657eb81ab3a30bffc118d14d41905fee9cc9b27ec7eb9c013c8e08499bc424 = $this->env->getExtension("native_profiler");
        $__internal_e5657eb81ab3a30bffc118d14d41905fee9cc9b27ec7eb9c013c8e08499bc424->enter($__internal_e5657eb81ab3a30bffc118d14d41905fee9cc9b27ec7eb9c013c8e08499bc424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5657eb81ab3a30bffc118d14d41905fee9cc9b27ec7eb9c013c8e08499bc424->leave($__internal_e5657eb81ab3a30bffc118d14d41905fee9cc9b27ec7eb9c013c8e08499bc424_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfac29b99c2b644a91e6337cc728073935044fd7e58efa8c7c1a328eeb0df98f = $this->env->getExtension("native_profiler");
        $__internal_dfac29b99c2b644a91e6337cc728073935044fd7e58efa8c7c1a328eeb0df98f->enter($__internal_dfac29b99c2b644a91e6337cc728073935044fd7e58efa8c7c1a328eeb0df98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_dfac29b99c2b644a91e6337cc728073935044fd7e58efa8c7c1a328eeb0df98f->leave($__internal_dfac29b99c2b644a91e6337cc728073935044fd7e58efa8c7c1a328eeb0df98f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
