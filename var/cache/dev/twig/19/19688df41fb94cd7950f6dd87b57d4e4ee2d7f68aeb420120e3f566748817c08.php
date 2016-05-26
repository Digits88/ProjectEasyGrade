<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9be6472a6e74366cefe06c769ef0745c66a2e596764f7844cb7e5215ffce728d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e8fa292520e226b466ecaf1c51095c7e8023080ecb2a6ddc863720e96f13f402 = $this->env->getExtension("native_profiler");
        $__internal_e8fa292520e226b466ecaf1c51095c7e8023080ecb2a6ddc863720e96f13f402->enter($__internal_e8fa292520e226b466ecaf1c51095c7e8023080ecb2a6ddc863720e96f13f402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8fa292520e226b466ecaf1c51095c7e8023080ecb2a6ddc863720e96f13f402->leave($__internal_e8fa292520e226b466ecaf1c51095c7e8023080ecb2a6ddc863720e96f13f402_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66eb3c27e27c8706f02069994bc03d84ce4092a894057c853a7c3e9dbbcd2d07 = $this->env->getExtension("native_profiler");
        $__internal_66eb3c27e27c8706f02069994bc03d84ce4092a894057c853a7c3e9dbbcd2d07->enter($__internal_66eb3c27e27c8706f02069994bc03d84ce4092a894057c853a7c3e9dbbcd2d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_66eb3c27e27c8706f02069994bc03d84ce4092a894057c853a7c3e9dbbcd2d07->leave($__internal_66eb3c27e27c8706f02069994bc03d84ce4092a894057c853a7c3e9dbbcd2d07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
