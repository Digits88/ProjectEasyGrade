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
        $__internal_e605f62e2c4a77a4463c7e3f964611600c841cd993a822be0e348869c6d262b6 = $this->env->getExtension("native_profiler");
        $__internal_e605f62e2c4a77a4463c7e3f964611600c841cd993a822be0e348869c6d262b6->enter($__internal_e605f62e2c4a77a4463c7e3f964611600c841cd993a822be0e348869c6d262b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e605f62e2c4a77a4463c7e3f964611600c841cd993a822be0e348869c6d262b6->leave($__internal_e605f62e2c4a77a4463c7e3f964611600c841cd993a822be0e348869c6d262b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ce549809d64d072c1958685d268fae1e3950a033dc561d88cca8ca8b8d00bb2 = $this->env->getExtension("native_profiler");
        $__internal_2ce549809d64d072c1958685d268fae1e3950a033dc561d88cca8ca8b8d00bb2->enter($__internal_2ce549809d64d072c1958685d268fae1e3950a033dc561d88cca8ca8b8d00bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2ce549809d64d072c1958685d268fae1e3950a033dc561d88cca8ca8b8d00bb2->leave($__internal_2ce549809d64d072c1958685d268fae1e3950a033dc561d88cca8ca8b8d00bb2_prof);

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
