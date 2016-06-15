<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_1b31e2f9872c3e04cc5f4d18d35d573310cf86e82a50ace3f8ed78d59c381132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_73d1925d6b168918fa30ea589feaf970306cca3e4bad64b9f11643664ecd9666 = $this->env->getExtension("native_profiler");
        $__internal_73d1925d6b168918fa30ea589feaf970306cca3e4bad64b9f11643664ecd9666->enter($__internal_73d1925d6b168918fa30ea589feaf970306cca3e4bad64b9f11643664ecd9666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d1925d6b168918fa30ea589feaf970306cca3e4bad64b9f11643664ecd9666->leave($__internal_73d1925d6b168918fa30ea589feaf970306cca3e4bad64b9f11643664ecd9666_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25dd11d446da1828415d231d10755e8e1a3b02f9b1a06d49b6340d834da748f2 = $this->env->getExtension("native_profiler");
        $__internal_25dd11d446da1828415d231d10755e8e1a3b02f9b1a06d49b6340d834da748f2->enter($__internal_25dd11d446da1828415d231d10755e8e1a3b02f9b1a06d49b6340d834da748f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_25dd11d446da1828415d231d10755e8e1a3b02f9b1a06d49b6340d834da748f2->leave($__internal_25dd11d446da1828415d231d10755e8e1a3b02f9b1a06d49b6340d834da748f2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
