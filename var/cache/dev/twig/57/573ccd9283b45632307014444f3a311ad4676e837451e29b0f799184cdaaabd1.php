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
        $__internal_f4ee9a98bd365635247b6aa93e1aea215c59a09627dd8c75634a33b42883799c = $this->env->getExtension("native_profiler");
        $__internal_f4ee9a98bd365635247b6aa93e1aea215c59a09627dd8c75634a33b42883799c->enter($__internal_f4ee9a98bd365635247b6aa93e1aea215c59a09627dd8c75634a33b42883799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4ee9a98bd365635247b6aa93e1aea215c59a09627dd8c75634a33b42883799c->leave($__internal_f4ee9a98bd365635247b6aa93e1aea215c59a09627dd8c75634a33b42883799c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa268329ad821dba606107e886ce72311b7e82867a8a6604632cffea5419536e = $this->env->getExtension("native_profiler");
        $__internal_fa268329ad821dba606107e886ce72311b7e82867a8a6604632cffea5419536e->enter($__internal_fa268329ad821dba606107e886ce72311b7e82867a8a6604632cffea5419536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_fa268329ad821dba606107e886ce72311b7e82867a8a6604632cffea5419536e->leave($__internal_fa268329ad821dba606107e886ce72311b7e82867a8a6604632cffea5419536e_prof);

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
