<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_be6e7c5aaf1b3fb6203760369714f89c97df63193ef424c812edfae230c2c1c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_564e8f6d6743c25660f1737050e92e2a920577b3cc9c4d8b684e1dc3e80da3ad = $this->env->getExtension("native_profiler");
        $__internal_564e8f6d6743c25660f1737050e92e2a920577b3cc9c4d8b684e1dc3e80da3ad->enter($__internal_564e8f6d6743c25660f1737050e92e2a920577b3cc9c4d8b684e1dc3e80da3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564e8f6d6743c25660f1737050e92e2a920577b3cc9c4d8b684e1dc3e80da3ad->leave($__internal_564e8f6d6743c25660f1737050e92e2a920577b3cc9c4d8b684e1dc3e80da3ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bbebc84c2b2471eac1cf71589182c64709e224d58bd67b7e2ad2b76040409f2 = $this->env->getExtension("native_profiler");
        $__internal_7bbebc84c2b2471eac1cf71589182c64709e224d58bd67b7e2ad2b76040409f2->enter($__internal_7bbebc84c2b2471eac1cf71589182c64709e224d58bd67b7e2ad2b76040409f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7bbebc84c2b2471eac1cf71589182c64709e224d58bd67b7e2ad2b76040409f2->leave($__internal_7bbebc84c2b2471eac1cf71589182c64709e224d58bd67b7e2ad2b76040409f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
