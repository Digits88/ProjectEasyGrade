<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2093a3328fa1a2468bff48a4a603fc4ead536efea1920d88e6913acb194df1ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_03182394d7e3cf34e712d78aced3bbcd782f0489f59ba2154d299d55e239cd61 = $this->env->getExtension("native_profiler");
        $__internal_03182394d7e3cf34e712d78aced3bbcd782f0489f59ba2154d299d55e239cd61->enter($__internal_03182394d7e3cf34e712d78aced3bbcd782f0489f59ba2154d299d55e239cd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03182394d7e3cf34e712d78aced3bbcd782f0489f59ba2154d299d55e239cd61->leave($__internal_03182394d7e3cf34e712d78aced3bbcd782f0489f59ba2154d299d55e239cd61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d47386fa30122dd9246b3db4f58f8903e1f68f8ef4bfc2f3bbee84397cd0173 = $this->env->getExtension("native_profiler");
        $__internal_9d47386fa30122dd9246b3db4f58f8903e1f68f8ef4bfc2f3bbee84397cd0173->enter($__internal_9d47386fa30122dd9246b3db4f58f8903e1f68f8ef4bfc2f3bbee84397cd0173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9d47386fa30122dd9246b3db4f58f8903e1f68f8ef4bfc2f3bbee84397cd0173->leave($__internal_9d47386fa30122dd9246b3db4f58f8903e1f68f8ef4bfc2f3bbee84397cd0173_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
