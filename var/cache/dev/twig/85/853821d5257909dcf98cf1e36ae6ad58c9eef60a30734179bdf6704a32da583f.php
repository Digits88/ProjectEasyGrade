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
        $__internal_a52aab8235f1c1c16f66f6142a686ee2d6c941b7a9d0cc40dff095cf55003883 = $this->env->getExtension("native_profiler");
        $__internal_a52aab8235f1c1c16f66f6142a686ee2d6c941b7a9d0cc40dff095cf55003883->enter($__internal_a52aab8235f1c1c16f66f6142a686ee2d6c941b7a9d0cc40dff095cf55003883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52aab8235f1c1c16f66f6142a686ee2d6c941b7a9d0cc40dff095cf55003883->leave($__internal_a52aab8235f1c1c16f66f6142a686ee2d6c941b7a9d0cc40dff095cf55003883_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52b5de79017f1d45913028397a0fa19a1bd8e61ef73b31107124128112f133ca = $this->env->getExtension("native_profiler");
        $__internal_52b5de79017f1d45913028397a0fa19a1bd8e61ef73b31107124128112f133ca->enter($__internal_52b5de79017f1d45913028397a0fa19a1bd8e61ef73b31107124128112f133ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_52b5de79017f1d45913028397a0fa19a1bd8e61ef73b31107124128112f133ca->leave($__internal_52b5de79017f1d45913028397a0fa19a1bd8e61ef73b31107124128112f133ca_prof);

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
