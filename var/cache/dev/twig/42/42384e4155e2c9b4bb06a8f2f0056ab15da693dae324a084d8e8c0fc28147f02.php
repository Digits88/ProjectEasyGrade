<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f79d8eb22a1aeecf3617234bff90a426693cd2c414f7abe0b97f16f7eda6a575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_6bb865859f2b74e0c043caec94451b7cf5a9dfe78f3269f423b7e9b099b03af1 = $this->env->getExtension("native_profiler");
        $__internal_6bb865859f2b74e0c043caec94451b7cf5a9dfe78f3269f423b7e9b099b03af1->enter($__internal_6bb865859f2b74e0c043caec94451b7cf5a9dfe78f3269f423b7e9b099b03af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb865859f2b74e0c043caec94451b7cf5a9dfe78f3269f423b7e9b099b03af1->leave($__internal_6bb865859f2b74e0c043caec94451b7cf5a9dfe78f3269f423b7e9b099b03af1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e636ee721c7407c3916c57b2b420286f7e2a9623a9aed6ebb56d7c288fa009a1 = $this->env->getExtension("native_profiler");
        $__internal_e636ee721c7407c3916c57b2b420286f7e2a9623a9aed6ebb56d7c288fa009a1->enter($__internal_e636ee721c7407c3916c57b2b420286f7e2a9623a9aed6ebb56d7c288fa009a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e636ee721c7407c3916c57b2b420286f7e2a9623a9aed6ebb56d7c288fa009a1->leave($__internal_e636ee721c7407c3916c57b2b420286f7e2a9623a9aed6ebb56d7c288fa009a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
