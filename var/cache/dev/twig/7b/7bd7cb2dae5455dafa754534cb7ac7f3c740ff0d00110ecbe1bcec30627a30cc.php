<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_8aaa152163eb9a3d9918ddbc20b68521ed93824c824cfe0d85a8b32bd6eed7b7 extends Twig_Template
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
        $__internal_8aa8be6f5ac171afa16db93a86e2b6a8d99faf1b3bdd19c649f481b2fcc551b0 = $this->env->getExtension("native_profiler");
        $__internal_8aa8be6f5ac171afa16db93a86e2b6a8d99faf1b3bdd19c649f481b2fcc551b0->enter($__internal_8aa8be6f5ac171afa16db93a86e2b6a8d99faf1b3bdd19c649f481b2fcc551b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa8be6f5ac171afa16db93a86e2b6a8d99faf1b3bdd19c649f481b2fcc551b0->leave($__internal_8aa8be6f5ac171afa16db93a86e2b6a8d99faf1b3bdd19c649f481b2fcc551b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c55b6247cfb33905df66726cff79c1c225f25c4fa5bca5f41b67ecd431adb22a = $this->env->getExtension("native_profiler");
        $__internal_c55b6247cfb33905df66726cff79c1c225f25c4fa5bca5f41b67ecd431adb22a->enter($__internal_c55b6247cfb33905df66726cff79c1c225f25c4fa5bca5f41b67ecd431adb22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c55b6247cfb33905df66726cff79c1c225f25c4fa5bca5f41b67ecd431adb22a->leave($__internal_c55b6247cfb33905df66726cff79c1c225f25c4fa5bca5f41b67ecd431adb22a_prof);

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
