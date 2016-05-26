<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_25a11011ff7c3a965d1557d8900981222c5f09b88fe82ea72a321efb217ca7d6 extends Twig_Template
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
        $__internal_6c44d0b79dd574256f95f3234d8538ee67187e681755400310976814f998b777 = $this->env->getExtension("native_profiler");
        $__internal_6c44d0b79dd574256f95f3234d8538ee67187e681755400310976814f998b777->enter($__internal_6c44d0b79dd574256f95f3234d8538ee67187e681755400310976814f998b777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c44d0b79dd574256f95f3234d8538ee67187e681755400310976814f998b777->leave($__internal_6c44d0b79dd574256f95f3234d8538ee67187e681755400310976814f998b777_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a16be43778c4e5ac5aa822f3f3ef55864f3738bcc5791fa5157fdb652a3b0108 = $this->env->getExtension("native_profiler");
        $__internal_a16be43778c4e5ac5aa822f3f3ef55864f3738bcc5791fa5157fdb652a3b0108->enter($__internal_a16be43778c4e5ac5aa822f3f3ef55864f3738bcc5791fa5157fdb652a3b0108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a16be43778c4e5ac5aa822f3f3ef55864f3738bcc5791fa5157fdb652a3b0108->leave($__internal_a16be43778c4e5ac5aa822f3f3ef55864f3738bcc5791fa5157fdb652a3b0108_prof);

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
