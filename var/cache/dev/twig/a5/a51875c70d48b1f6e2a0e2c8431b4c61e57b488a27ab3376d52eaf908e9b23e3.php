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
        $__internal_7a66b9dbdfaae2cb49d156ab87b6c0244b09aadae6a9af014832806f464d3b2e = $this->env->getExtension("native_profiler");
        $__internal_7a66b9dbdfaae2cb49d156ab87b6c0244b09aadae6a9af014832806f464d3b2e->enter($__internal_7a66b9dbdfaae2cb49d156ab87b6c0244b09aadae6a9af014832806f464d3b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7a66b9dbdfaae2cb49d156ab87b6c0244b09aadae6a9af014832806f464d3b2e->leave($__internal_7a66b9dbdfaae2cb49d156ab87b6c0244b09aadae6a9af014832806f464d3b2e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c289e3845d5a88c4f385ba8a79f3e28a42486f2766e24f6f057b518ad7431e92 = $this->env->getExtension("native_profiler");
        $__internal_c289e3845d5a88c4f385ba8a79f3e28a42486f2766e24f6f057b518ad7431e92->enter($__internal_c289e3845d5a88c4f385ba8a79f3e28a42486f2766e24f6f057b518ad7431e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c289e3845d5a88c4f385ba8a79f3e28a42486f2766e24f6f057b518ad7431e92->leave($__internal_c289e3845d5a88c4f385ba8a79f3e28a42486f2766e24f6f057b518ad7431e92_prof);

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
