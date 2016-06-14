<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_34b2848d6a9603724c1a781d54fea7da7deae70ae164f229535f23347ae793eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8d5349d65b4f7132f45604c1651134313dab17e4597406d24951a810e78b7b7f = $this->env->getExtension("native_profiler");
        $__internal_8d5349d65b4f7132f45604c1651134313dab17e4597406d24951a810e78b7b7f->enter($__internal_8d5349d65b4f7132f45604c1651134313dab17e4597406d24951a810e78b7b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d5349d65b4f7132f45604c1651134313dab17e4597406d24951a810e78b7b7f->leave($__internal_8d5349d65b4f7132f45604c1651134313dab17e4597406d24951a810e78b7b7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_056e991893382f643aa36f1c199c005168d205d4951a3c31557667713e9e5b0a = $this->env->getExtension("native_profiler");
        $__internal_056e991893382f643aa36f1c199c005168d205d4951a3c31557667713e9e5b0a->enter($__internal_056e991893382f643aa36f1c199c005168d205d4951a3c31557667713e9e5b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_056e991893382f643aa36f1c199c005168d205d4951a3c31557667713e9e5b0a->leave($__internal_056e991893382f643aa36f1c199c005168d205d4951a3c31557667713e9e5b0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_990e57fb16492cf5c0bd5cd4c43f36347a0cf7671a6fb6282619e7cc1f766847 = $this->env->getExtension("native_profiler");
        $__internal_990e57fb16492cf5c0bd5cd4c43f36347a0cf7671a6fb6282619e7cc1f766847->enter($__internal_990e57fb16492cf5c0bd5cd4c43f36347a0cf7671a6fb6282619e7cc1f766847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_990e57fb16492cf5c0bd5cd4c43f36347a0cf7671a6fb6282619e7cc1f766847->leave($__internal_990e57fb16492cf5c0bd5cd4c43f36347a0cf7671a6fb6282619e7cc1f766847_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8402e72ad723a4048d5b62991e3b22a9582ef972ba03c1e80c0db98166af7d9e = $this->env->getExtension("native_profiler");
        $__internal_8402e72ad723a4048d5b62991e3b22a9582ef972ba03c1e80c0db98166af7d9e->enter($__internal_8402e72ad723a4048d5b62991e3b22a9582ef972ba03c1e80c0db98166af7d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8402e72ad723a4048d5b62991e3b22a9582ef972ba03c1e80c0db98166af7d9e->leave($__internal_8402e72ad723a4048d5b62991e3b22a9582ef972ba03c1e80c0db98166af7d9e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
