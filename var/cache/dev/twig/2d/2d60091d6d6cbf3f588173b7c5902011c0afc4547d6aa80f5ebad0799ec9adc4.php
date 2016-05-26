<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5f90bcf86c6b1b725ad63b7ec51877f80a5525b937d2b0af7e0b2b5a90baef5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_209bc81c8e3af67f45ddd2a9d67c4fbbd236d7ad94299b29c53ce0a0e620d9f6 = $this->env->getExtension("native_profiler");
        $__internal_209bc81c8e3af67f45ddd2a9d67c4fbbd236d7ad94299b29c53ce0a0e620d9f6->enter($__internal_209bc81c8e3af67f45ddd2a9d67c4fbbd236d7ad94299b29c53ce0a0e620d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209bc81c8e3af67f45ddd2a9d67c4fbbd236d7ad94299b29c53ce0a0e620d9f6->leave($__internal_209bc81c8e3af67f45ddd2a9d67c4fbbd236d7ad94299b29c53ce0a0e620d9f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bb3c43cef031bcfe23ead11fdd5c9dce2eb993f278f0e1927b44cc3b3a3c4a9 = $this->env->getExtension("native_profiler");
        $__internal_0bb3c43cef031bcfe23ead11fdd5c9dce2eb993f278f0e1927b44cc3b3a3c4a9->enter($__internal_0bb3c43cef031bcfe23ead11fdd5c9dce2eb993f278f0e1927b44cc3b3a3c4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0bb3c43cef031bcfe23ead11fdd5c9dce2eb993f278f0e1927b44cc3b3a3c4a9->leave($__internal_0bb3c43cef031bcfe23ead11fdd5c9dce2eb993f278f0e1927b44cc3b3a3c4a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
