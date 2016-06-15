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
        $__internal_9439e40f18e8c1571a45c86cdc66c75cd3d89440ebe5416c289cc79c8bde3bec = $this->env->getExtension("native_profiler");
        $__internal_9439e40f18e8c1571a45c86cdc66c75cd3d89440ebe5416c289cc79c8bde3bec->enter($__internal_9439e40f18e8c1571a45c86cdc66c75cd3d89440ebe5416c289cc79c8bde3bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9439e40f18e8c1571a45c86cdc66c75cd3d89440ebe5416c289cc79c8bde3bec->leave($__internal_9439e40f18e8c1571a45c86cdc66c75cd3d89440ebe5416c289cc79c8bde3bec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_324ba97aeb2892a2045ff614f5f6c8e1e3351d4b7e1284e682bbea524d083b11 = $this->env->getExtension("native_profiler");
        $__internal_324ba97aeb2892a2045ff614f5f6c8e1e3351d4b7e1284e682bbea524d083b11->enter($__internal_324ba97aeb2892a2045ff614f5f6c8e1e3351d4b7e1284e682bbea524d083b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_324ba97aeb2892a2045ff614f5f6c8e1e3351d4b7e1284e682bbea524d083b11->leave($__internal_324ba97aeb2892a2045ff614f5f6c8e1e3351d4b7e1284e682bbea524d083b11_prof);

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
