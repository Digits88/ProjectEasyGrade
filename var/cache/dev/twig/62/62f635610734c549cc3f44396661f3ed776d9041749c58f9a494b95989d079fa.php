<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_765f9f3d6a9a0196a48637a061a80f64c276bbc9d4e551c77d1eb2b80073c6be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12f48fc1833dd81f2991e315e19843a2cf2818d0d32825ea24a8503df27168ff = $this->env->getExtension("native_profiler");
        $__internal_12f48fc1833dd81f2991e315e19843a2cf2818d0d32825ea24a8503df27168ff->enter($__internal_12f48fc1833dd81f2991e315e19843a2cf2818d0d32825ea24a8503df27168ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_12f48fc1833dd81f2991e315e19843a2cf2818d0d32825ea24a8503df27168ff->leave($__internal_12f48fc1833dd81f2991e315e19843a2cf2818d0d32825ea24a8503df27168ff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e828244139aaeba5d6a05fdffeb164bd37221a53f368bf2361cc68ee8d906db = $this->env->getExtension("native_profiler");
        $__internal_0e828244139aaeba5d6a05fdffeb164bd37221a53f368bf2361cc68ee8d906db->enter($__internal_0e828244139aaeba5d6a05fdffeb164bd37221a53f368bf2361cc68ee8d906db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0e828244139aaeba5d6a05fdffeb164bd37221a53f368bf2361cc68ee8d906db->leave($__internal_0e828244139aaeba5d6a05fdffeb164bd37221a53f368bf2361cc68ee8d906db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
