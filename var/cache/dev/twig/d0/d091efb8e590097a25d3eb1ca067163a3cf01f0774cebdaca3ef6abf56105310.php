<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_04212b9c958c8804d7aec596fdce7a6c0dfbd8da6c338554c884768137c46e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9fe8513de87f44d05ada4593a39b19307b6aeb94cc1b1ee9946714e2a7562f9f = $this->env->getExtension("native_profiler");
        $__internal_9fe8513de87f44d05ada4593a39b19307b6aeb94cc1b1ee9946714e2a7562f9f->enter($__internal_9fe8513de87f44d05ada4593a39b19307b6aeb94cc1b1ee9946714e2a7562f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe8513de87f44d05ada4593a39b19307b6aeb94cc1b1ee9946714e2a7562f9f->leave($__internal_9fe8513de87f44d05ada4593a39b19307b6aeb94cc1b1ee9946714e2a7562f9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28c5dffc3d9059fa4bda52b305f7df50e9e49414f8da42c283b9361eaff9902c = $this->env->getExtension("native_profiler");
        $__internal_28c5dffc3d9059fa4bda52b305f7df50e9e49414f8da42c283b9361eaff9902c->enter($__internal_28c5dffc3d9059fa4bda52b305f7df50e9e49414f8da42c283b9361eaff9902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_28c5dffc3d9059fa4bda52b305f7df50e9e49414f8da42c283b9361eaff9902c->leave($__internal_28c5dffc3d9059fa4bda52b305f7df50e9e49414f8da42c283b9361eaff9902c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
