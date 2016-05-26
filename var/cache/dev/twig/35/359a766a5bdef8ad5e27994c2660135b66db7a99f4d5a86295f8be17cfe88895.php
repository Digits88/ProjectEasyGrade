<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_76621bd645a3024b47574a5a8dbcc1728d0ed170b58b4fcc8cd615c38e55cd6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e1229e8b8af32e9b8cd0db5a787a336adc5573e0c67d5038db7cc4b6b0f5dc0 = $this->env->getExtension("native_profiler");
        $__internal_2e1229e8b8af32e9b8cd0db5a787a336adc5573e0c67d5038db7cc4b6b0f5dc0->enter($__internal_2e1229e8b8af32e9b8cd0db5a787a336adc5573e0c67d5038db7cc4b6b0f5dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1229e8b8af32e9b8cd0db5a787a336adc5573e0c67d5038db7cc4b6b0f5dc0->leave($__internal_2e1229e8b8af32e9b8cd0db5a787a336adc5573e0c67d5038db7cc4b6b0f5dc0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80e1127ae92c3874402cde4d2bc586dea908718487eb96e5f6e391afc02005f9 = $this->env->getExtension("native_profiler");
        $__internal_80e1127ae92c3874402cde4d2bc586dea908718487eb96e5f6e391afc02005f9->enter($__internal_80e1127ae92c3874402cde4d2bc586dea908718487eb96e5f6e391afc02005f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_80e1127ae92c3874402cde4d2bc586dea908718487eb96e5f6e391afc02005f9->leave($__internal_80e1127ae92c3874402cde4d2bc586dea908718487eb96e5f6e391afc02005f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ca8fb891d0e66319c7190c678bd37e58bc4bcc65c12df11116348f2381493ca = $this->env->getExtension("native_profiler");
        $__internal_4ca8fb891d0e66319c7190c678bd37e58bc4bcc65c12df11116348f2381493ca->enter($__internal_4ca8fb891d0e66319c7190c678bd37e58bc4bcc65c12df11116348f2381493ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4ca8fb891d0e66319c7190c678bd37e58bc4bcc65c12df11116348f2381493ca->leave($__internal_4ca8fb891d0e66319c7190c678bd37e58bc4bcc65c12df11116348f2381493ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f58c2ad206846f40177e52c0f7bba1e9cbf3dd727a6eca1ad56a78a1179bd625 = $this->env->getExtension("native_profiler");
        $__internal_f58c2ad206846f40177e52c0f7bba1e9cbf3dd727a6eca1ad56a78a1179bd625->enter($__internal_f58c2ad206846f40177e52c0f7bba1e9cbf3dd727a6eca1ad56a78a1179bd625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f58c2ad206846f40177e52c0f7bba1e9cbf3dd727a6eca1ad56a78a1179bd625->leave($__internal_f58c2ad206846f40177e52c0f7bba1e9cbf3dd727a6eca1ad56a78a1179bd625_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
