<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b100d995f5d28713ba09ee80b3dbeeecd49216cb99c2a21041ace5443d249455 extends Twig_Template
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
        $__internal_6dc7996f46d9967f00c33dedabf1e7467e503543554a5defb17ca4fa037d2e11 = $this->env->getExtension("native_profiler");
        $__internal_6dc7996f46d9967f00c33dedabf1e7467e503543554a5defb17ca4fa037d2e11->enter($__internal_6dc7996f46d9967f00c33dedabf1e7467e503543554a5defb17ca4fa037d2e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6dc7996f46d9967f00c33dedabf1e7467e503543554a5defb17ca4fa037d2e11->leave($__internal_6dc7996f46d9967f00c33dedabf1e7467e503543554a5defb17ca4fa037d2e11_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9731c4e983054ddb9b8bdb022d521da76fd4a806c52f4ba54a342f12970b2d83 = $this->env->getExtension("native_profiler");
        $__internal_9731c4e983054ddb9b8bdb022d521da76fd4a806c52f4ba54a342f12970b2d83->enter($__internal_9731c4e983054ddb9b8bdb022d521da76fd4a806c52f4ba54a342f12970b2d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9731c4e983054ddb9b8bdb022d521da76fd4a806c52f4ba54a342f12970b2d83->leave($__internal_9731c4e983054ddb9b8bdb022d521da76fd4a806c52f4ba54a342f12970b2d83_prof);

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
