<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0949443477bd9a5d5e4caff7a88e3e8dc14039e33de48d425601e234b2e4b75e extends Twig_Template
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
        $__internal_7dc9fdd63b35fb23d3119b589deaf3c0ded86a4f9dbeb688afad4508637b235d = $this->env->getExtension("native_profiler");
        $__internal_7dc9fdd63b35fb23d3119b589deaf3c0ded86a4f9dbeb688afad4508637b235d->enter($__internal_7dc9fdd63b35fb23d3119b589deaf3c0ded86a4f9dbeb688afad4508637b235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7dc9fdd63b35fb23d3119b589deaf3c0ded86a4f9dbeb688afad4508637b235d->leave($__internal_7dc9fdd63b35fb23d3119b589deaf3c0ded86a4f9dbeb688afad4508637b235d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_710351876c124f898221a96d5b8e553fcc067f0c0bd6d6d632221be47b9d9552 = $this->env->getExtension("native_profiler");
        $__internal_710351876c124f898221a96d5b8e553fcc067f0c0bd6d6d632221be47b9d9552->enter($__internal_710351876c124f898221a96d5b8e553fcc067f0c0bd6d6d632221be47b9d9552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_710351876c124f898221a96d5b8e553fcc067f0c0bd6d6d632221be47b9d9552->leave($__internal_710351876c124f898221a96d5b8e553fcc067f0c0bd6d6d632221be47b9d9552_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
