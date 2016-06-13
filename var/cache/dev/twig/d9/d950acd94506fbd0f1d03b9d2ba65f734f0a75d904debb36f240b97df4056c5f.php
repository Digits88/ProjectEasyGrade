<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fe6f1f0d134f68079ad71b85dfd1ec5afb43344dd2c4daf8810bfeb6605204b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_df9bed94803838ef7c0445fbeae4f9d4901437a97208c419637b12ec7588f01d = $this->env->getExtension("native_profiler");
        $__internal_df9bed94803838ef7c0445fbeae4f9d4901437a97208c419637b12ec7588f01d->enter($__internal_df9bed94803838ef7c0445fbeae4f9d4901437a97208c419637b12ec7588f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df9bed94803838ef7c0445fbeae4f9d4901437a97208c419637b12ec7588f01d->leave($__internal_df9bed94803838ef7c0445fbeae4f9d4901437a97208c419637b12ec7588f01d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bdf6df37e9d8ee4f6d7c424a28266aea298abb27291778c5863cde46a146e0e = $this->env->getExtension("native_profiler");
        $__internal_1bdf6df37e9d8ee4f6d7c424a28266aea298abb27291778c5863cde46a146e0e->enter($__internal_1bdf6df37e9d8ee4f6d7c424a28266aea298abb27291778c5863cde46a146e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1bdf6df37e9d8ee4f6d7c424a28266aea298abb27291778c5863cde46a146e0e->leave($__internal_1bdf6df37e9d8ee4f6d7c424a28266aea298abb27291778c5863cde46a146e0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
