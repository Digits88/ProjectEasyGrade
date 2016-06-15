<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fe652ef937c144fa825ec809cf14b25d8e15350225d6586795e7bd53ea4661d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_e1d4d8daf5920d3bad1481ea6c25dee666426a9a10ebfcf484b8c0a627de1a78 = $this->env->getExtension("native_profiler");
        $__internal_e1d4d8daf5920d3bad1481ea6c25dee666426a9a10ebfcf484b8c0a627de1a78->enter($__internal_e1d4d8daf5920d3bad1481ea6c25dee666426a9a10ebfcf484b8c0a627de1a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d4d8daf5920d3bad1481ea6c25dee666426a9a10ebfcf484b8c0a627de1a78->leave($__internal_e1d4d8daf5920d3bad1481ea6c25dee666426a9a10ebfcf484b8c0a627de1a78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e29a0f5a71293ba750b4c2dbebbbd3caa15eec7cd3109e874d80ea7c3c3efa80 = $this->env->getExtension("native_profiler");
        $__internal_e29a0f5a71293ba750b4c2dbebbbd3caa15eec7cd3109e874d80ea7c3c3efa80->enter($__internal_e29a0f5a71293ba750b4c2dbebbbd3caa15eec7cd3109e874d80ea7c3c3efa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e29a0f5a71293ba750b4c2dbebbbd3caa15eec7cd3109e874d80ea7c3c3efa80->leave($__internal_e29a0f5a71293ba750b4c2dbebbbd3caa15eec7cd3109e874d80ea7c3c3efa80_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
