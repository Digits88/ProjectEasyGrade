<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_35f9da2fe4dca39a5cbf4b2838a5fe971489e10fd5ed6a964aef4939a72abaea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_07a7656a54a8e85bdde66cce02a8e8518d12755eee2e0fc3800e5b3dd53cc0e3 = $this->env->getExtension("native_profiler");
        $__internal_07a7656a54a8e85bdde66cce02a8e8518d12755eee2e0fc3800e5b3dd53cc0e3->enter($__internal_07a7656a54a8e85bdde66cce02a8e8518d12755eee2e0fc3800e5b3dd53cc0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a7656a54a8e85bdde66cce02a8e8518d12755eee2e0fc3800e5b3dd53cc0e3->leave($__internal_07a7656a54a8e85bdde66cce02a8e8518d12755eee2e0fc3800e5b3dd53cc0e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c57611cfd207ecb9ce923dd6f803d0a7d0444b3b360a118da1956c5b03f0e7e = $this->env->getExtension("native_profiler");
        $__internal_3c57611cfd207ecb9ce923dd6f803d0a7d0444b3b360a118da1956c5b03f0e7e->enter($__internal_3c57611cfd207ecb9ce923dd6f803d0a7d0444b3b360a118da1956c5b03f0e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_3c57611cfd207ecb9ce923dd6f803d0a7d0444b3b360a118da1956c5b03f0e7e->leave($__internal_3c57611cfd207ecb9ce923dd6f803d0a7d0444b3b360a118da1956c5b03f0e7e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
