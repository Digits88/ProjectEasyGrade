<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9a537e540a525de4ca079c2da1eb724ed086d86733b7eaa2c1a9dc477aef13f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_818210a0c741d8f50ab595eebd74d6c2f87a3c4191fe6bba9e49bbe795d4f67b = $this->env->getExtension("native_profiler");
        $__internal_818210a0c741d8f50ab595eebd74d6c2f87a3c4191fe6bba9e49bbe795d4f67b->enter($__internal_818210a0c741d8f50ab595eebd74d6c2f87a3c4191fe6bba9e49bbe795d4f67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818210a0c741d8f50ab595eebd74d6c2f87a3c4191fe6bba9e49bbe795d4f67b->leave($__internal_818210a0c741d8f50ab595eebd74d6c2f87a3c4191fe6bba9e49bbe795d4f67b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5f8fc64dbf5746c67b2b0b9d5687159ce558a1f5a6a66a6495030080132e919 = $this->env->getExtension("native_profiler");
        $__internal_f5f8fc64dbf5746c67b2b0b9d5687159ce558a1f5a6a66a6495030080132e919->enter($__internal_f5f8fc64dbf5746c67b2b0b9d5687159ce558a1f5a6a66a6495030080132e919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f5f8fc64dbf5746c67b2b0b9d5687159ce558a1f5a6a66a6495030080132e919->leave($__internal_f5f8fc64dbf5746c67b2b0b9d5687159ce558a1f5a6a66a6495030080132e919_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_807c970e3c7669eb4fe623eef4cfad1f3443e61ec6122a70df07a390f3e51787 = $this->env->getExtension("native_profiler");
        $__internal_807c970e3c7669eb4fe623eef4cfad1f3443e61ec6122a70df07a390f3e51787->enter($__internal_807c970e3c7669eb4fe623eef4cfad1f3443e61ec6122a70df07a390f3e51787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_807c970e3c7669eb4fe623eef4cfad1f3443e61ec6122a70df07a390f3e51787->leave($__internal_807c970e3c7669eb4fe623eef4cfad1f3443e61ec6122a70df07a390f3e51787_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_228b2254a97136d19a921e17552f95eaecc245ae84f389f7da037503395aed98 = $this->env->getExtension("native_profiler");
        $__internal_228b2254a97136d19a921e17552f95eaecc245ae84f389f7da037503395aed98->enter($__internal_228b2254a97136d19a921e17552f95eaecc245ae84f389f7da037503395aed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_228b2254a97136d19a921e17552f95eaecc245ae84f389f7da037503395aed98->leave($__internal_228b2254a97136d19a921e17552f95eaecc245ae84f389f7da037503395aed98_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
