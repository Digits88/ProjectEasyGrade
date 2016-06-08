<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a021b3ba86a87dff39ef70ee3b9b1e0df32e68827bf3fe46bb8b1d67321943e3 extends Twig_Template
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
        $__internal_a8862af422ad815df1b0b85913726fd63c902699b026deee9880fe4ec8c73f4b = $this->env->getExtension("native_profiler");
        $__internal_a8862af422ad815df1b0b85913726fd63c902699b026deee9880fe4ec8c73f4b->enter($__internal_a8862af422ad815df1b0b85913726fd63c902699b026deee9880fe4ec8c73f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8862af422ad815df1b0b85913726fd63c902699b026deee9880fe4ec8c73f4b->leave($__internal_a8862af422ad815df1b0b85913726fd63c902699b026deee9880fe4ec8c73f4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11b96c2b47212ddd15388be0a0cd1aca1bee78c028ac923782d7d2b44331941e = $this->env->getExtension("native_profiler");
        $__internal_11b96c2b47212ddd15388be0a0cd1aca1bee78c028ac923782d7d2b44331941e->enter($__internal_11b96c2b47212ddd15388be0a0cd1aca1bee78c028ac923782d7d2b44331941e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11b96c2b47212ddd15388be0a0cd1aca1bee78c028ac923782d7d2b44331941e->leave($__internal_11b96c2b47212ddd15388be0a0cd1aca1bee78c028ac923782d7d2b44331941e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1081321654afb84c4de75488d8f8bbf4ffb3ba297867a1c96cfdcd3e3a21eb3e = $this->env->getExtension("native_profiler");
        $__internal_1081321654afb84c4de75488d8f8bbf4ffb3ba297867a1c96cfdcd3e3a21eb3e->enter($__internal_1081321654afb84c4de75488d8f8bbf4ffb3ba297867a1c96cfdcd3e3a21eb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1081321654afb84c4de75488d8f8bbf4ffb3ba297867a1c96cfdcd3e3a21eb3e->leave($__internal_1081321654afb84c4de75488d8f8bbf4ffb3ba297867a1c96cfdcd3e3a21eb3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc8b361c795ce8aa0c7f0b2753fd72f9576ce9472d26adcddc21fdb6644370a3 = $this->env->getExtension("native_profiler");
        $__internal_cc8b361c795ce8aa0c7f0b2753fd72f9576ce9472d26adcddc21fdb6644370a3->enter($__internal_cc8b361c795ce8aa0c7f0b2753fd72f9576ce9472d26adcddc21fdb6644370a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc8b361c795ce8aa0c7f0b2753fd72f9576ce9472d26adcddc21fdb6644370a3->leave($__internal_cc8b361c795ce8aa0c7f0b2753fd72f9576ce9472d26adcddc21fdb6644370a3_prof);

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
