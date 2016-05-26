<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_dc3c881e22c970ef568ee25ef58f6175d6009f5e3d0464ba096ebf875b854c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_9ba77000efa6982bacf660b1e63ceea5fec77e27287d38ed09d2118bb031f953 = $this->env->getExtension("native_profiler");
        $__internal_9ba77000efa6982bacf660b1e63ceea5fec77e27287d38ed09d2118bb031f953->enter($__internal_9ba77000efa6982bacf660b1e63ceea5fec77e27287d38ed09d2118bb031f953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba77000efa6982bacf660b1e63ceea5fec77e27287d38ed09d2118bb031f953->leave($__internal_9ba77000efa6982bacf660b1e63ceea5fec77e27287d38ed09d2118bb031f953_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_307d5f8f8530c134aa05e7cfe550126fd11164242d21cefd5832046ced22e330 = $this->env->getExtension("native_profiler");
        $__internal_307d5f8f8530c134aa05e7cfe550126fd11164242d21cefd5832046ced22e330->enter($__internal_307d5f8f8530c134aa05e7cfe550126fd11164242d21cefd5832046ced22e330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_307d5f8f8530c134aa05e7cfe550126fd11164242d21cefd5832046ced22e330->leave($__internal_307d5f8f8530c134aa05e7cfe550126fd11164242d21cefd5832046ced22e330_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
