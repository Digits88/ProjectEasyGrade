<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c699e77bca6cffeeda4e653d8152ba05b2864d1eb642cf0accceb9a0672bb12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1c375459596e54491961a1a3b624ec537014df3bbdcdc9da257c593b516bc774 = $this->env->getExtension("native_profiler");
        $__internal_1c375459596e54491961a1a3b624ec537014df3bbdcdc9da257c593b516bc774->enter($__internal_1c375459596e54491961a1a3b624ec537014df3bbdcdc9da257c593b516bc774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c375459596e54491961a1a3b624ec537014df3bbdcdc9da257c593b516bc774->leave($__internal_1c375459596e54491961a1a3b624ec537014df3bbdcdc9da257c593b516bc774_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_247aebf57a1cbb3b1eab711eca128d55ded15d2e46814007cca40e722883ca77 = $this->env->getExtension("native_profiler");
        $__internal_247aebf57a1cbb3b1eab711eca128d55ded15d2e46814007cca40e722883ca77->enter($__internal_247aebf57a1cbb3b1eab711eca128d55ded15d2e46814007cca40e722883ca77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_247aebf57a1cbb3b1eab711eca128d55ded15d2e46814007cca40e722883ca77->leave($__internal_247aebf57a1cbb3b1eab711eca128d55ded15d2e46814007cca40e722883ca77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
