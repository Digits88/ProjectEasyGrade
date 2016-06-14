<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_da81a4c27f6cbae33fc415371014a6208035df5d62c7fd47b678422634c054dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b567b36f7522794cb40e24b45a9a1a2aeb40f1bc6cfd26f45e8b087d5a4581e5 = $this->env->getExtension("native_profiler");
        $__internal_b567b36f7522794cb40e24b45a9a1a2aeb40f1bc6cfd26f45e8b087d5a4581e5->enter($__internal_b567b36f7522794cb40e24b45a9a1a2aeb40f1bc6cfd26f45e8b087d5a4581e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b567b36f7522794cb40e24b45a9a1a2aeb40f1bc6cfd26f45e8b087d5a4581e5->leave($__internal_b567b36f7522794cb40e24b45a9a1a2aeb40f1bc6cfd26f45e8b087d5a4581e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5261190b48c63de4e25db711f0926aa09b562be67e480464789a899cefafb83c = $this->env->getExtension("native_profiler");
        $__internal_5261190b48c63de4e25db711f0926aa09b562be67e480464789a899cefafb83c->enter($__internal_5261190b48c63de4e25db711f0926aa09b562be67e480464789a899cefafb83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5261190b48c63de4e25db711f0926aa09b562be67e480464789a899cefafb83c->leave($__internal_5261190b48c63de4e25db711f0926aa09b562be67e480464789a899cefafb83c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
