<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a2cd8849e578fbd18406fde2aef8071fc0d746f09bcdf0ecb4ba0fb0514ea85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9cb4f37a081e8114f317e811b7c6d04a8ee23b657fdfaa2f5ad7716b29d95172 = $this->env->getExtension("native_profiler");
        $__internal_9cb4f37a081e8114f317e811b7c6d04a8ee23b657fdfaa2f5ad7716b29d95172->enter($__internal_9cb4f37a081e8114f317e811b7c6d04a8ee23b657fdfaa2f5ad7716b29d95172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb4f37a081e8114f317e811b7c6d04a8ee23b657fdfaa2f5ad7716b29d95172->leave($__internal_9cb4f37a081e8114f317e811b7c6d04a8ee23b657fdfaa2f5ad7716b29d95172_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfcf3d1046f64f600fd774ae2a28cbc6575a14cc13fde6dcc82bddda804c956d = $this->env->getExtension("native_profiler");
        $__internal_cfcf3d1046f64f600fd774ae2a28cbc6575a14cc13fde6dcc82bddda804c956d->enter($__internal_cfcf3d1046f64f600fd774ae2a28cbc6575a14cc13fde6dcc82bddda804c956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cfcf3d1046f64f600fd774ae2a28cbc6575a14cc13fde6dcc82bddda804c956d->leave($__internal_cfcf3d1046f64f600fd774ae2a28cbc6575a14cc13fde6dcc82bddda804c956d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
