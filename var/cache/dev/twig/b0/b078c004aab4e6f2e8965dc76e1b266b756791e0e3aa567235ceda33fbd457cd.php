<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_80706a6f94f21c0f0db81d2f58c7a96139fff15bdf9ac151e89e7ad5c8b07080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2eac825c95db873f11b12c8b916ee4d6ccff747aaa0b20b224ab298805266a87 = $this->env->getExtension("native_profiler");
        $__internal_2eac825c95db873f11b12c8b916ee4d6ccff747aaa0b20b224ab298805266a87->enter($__internal_2eac825c95db873f11b12c8b916ee4d6ccff747aaa0b20b224ab298805266a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eac825c95db873f11b12c8b916ee4d6ccff747aaa0b20b224ab298805266a87->leave($__internal_2eac825c95db873f11b12c8b916ee4d6ccff747aaa0b20b224ab298805266a87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4cd7eb5764c5f067e8fc0930c1361218b6fd782e616a06c1b8564996f6ced721 = $this->env->getExtension("native_profiler");
        $__internal_4cd7eb5764c5f067e8fc0930c1361218b6fd782e616a06c1b8564996f6ced721->enter($__internal_4cd7eb5764c5f067e8fc0930c1361218b6fd782e616a06c1b8564996f6ced721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4cd7eb5764c5f067e8fc0930c1361218b6fd782e616a06c1b8564996f6ced721->leave($__internal_4cd7eb5764c5f067e8fc0930c1361218b6fd782e616a06c1b8564996f6ced721_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2abcb69dadb9ccbb6e919718772b3f2e1caf1a31d3a235510f2230496edbb054 = $this->env->getExtension("native_profiler");
        $__internal_2abcb69dadb9ccbb6e919718772b3f2e1caf1a31d3a235510f2230496edbb054->enter($__internal_2abcb69dadb9ccbb6e919718772b3f2e1caf1a31d3a235510f2230496edbb054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2abcb69dadb9ccbb6e919718772b3f2e1caf1a31d3a235510f2230496edbb054->leave($__internal_2abcb69dadb9ccbb6e919718772b3f2e1caf1a31d3a235510f2230496edbb054_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7825973ae8a54c7490fd1a0c7ff2d548a4b692c47d3d980bd6d911fd00d2f403 = $this->env->getExtension("native_profiler");
        $__internal_7825973ae8a54c7490fd1a0c7ff2d548a4b692c47d3d980bd6d911fd00d2f403->enter($__internal_7825973ae8a54c7490fd1a0c7ff2d548a4b692c47d3d980bd6d911fd00d2f403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7825973ae8a54c7490fd1a0c7ff2d548a4b692c47d3d980bd6d911fd00d2f403->leave($__internal_7825973ae8a54c7490fd1a0c7ff2d548a4b692c47d3d980bd6d911fd00d2f403_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
