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
        $__internal_fce6c89e815d057916dc6561f72eaec78e5fadf56332c1d63c3491d175927da7 = $this->env->getExtension("native_profiler");
        $__internal_fce6c89e815d057916dc6561f72eaec78e5fadf56332c1d63c3491d175927da7->enter($__internal_fce6c89e815d057916dc6561f72eaec78e5fadf56332c1d63c3491d175927da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fce6c89e815d057916dc6561f72eaec78e5fadf56332c1d63c3491d175927da7->leave($__internal_fce6c89e815d057916dc6561f72eaec78e5fadf56332c1d63c3491d175927da7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f443bd48969752000ac1ba0841f350f12f289620c2d72ec322fba70e3852b166 = $this->env->getExtension("native_profiler");
        $__internal_f443bd48969752000ac1ba0841f350f12f289620c2d72ec322fba70e3852b166->enter($__internal_f443bd48969752000ac1ba0841f350f12f289620c2d72ec322fba70e3852b166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f443bd48969752000ac1ba0841f350f12f289620c2d72ec322fba70e3852b166->leave($__internal_f443bd48969752000ac1ba0841f350f12f289620c2d72ec322fba70e3852b166_prof);

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
