<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1e7ce39f14987e1f4f9d154b055b45dbc9afb8ec16e547a7ba0079c117ccb0dd extends Twig_Template
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
        $__internal_01cc09b8850b9128e89f9e0607d6bf94734addd1b7604780dcc63d91350a9043 = $this->env->getExtension("native_profiler");
        $__internal_01cc09b8850b9128e89f9e0607d6bf94734addd1b7604780dcc63d91350a9043->enter($__internal_01cc09b8850b9128e89f9e0607d6bf94734addd1b7604780dcc63d91350a9043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01cc09b8850b9128e89f9e0607d6bf94734addd1b7604780dcc63d91350a9043->leave($__internal_01cc09b8850b9128e89f9e0607d6bf94734addd1b7604780dcc63d91350a9043_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b06e742e71ca26f98fa464e8fd7b231686428cf894f029a8df0c6df6dc693846 = $this->env->getExtension("native_profiler");
        $__internal_b06e742e71ca26f98fa464e8fd7b231686428cf894f029a8df0c6df6dc693846->enter($__internal_b06e742e71ca26f98fa464e8fd7b231686428cf894f029a8df0c6df6dc693846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b06e742e71ca26f98fa464e8fd7b231686428cf894f029a8df0c6df6dc693846->leave($__internal_b06e742e71ca26f98fa464e8fd7b231686428cf894f029a8df0c6df6dc693846_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d626da4ed5585a4f2d06aa714afb68b16af7b688c08b46c795e24e5a4a8513a3 = $this->env->getExtension("native_profiler");
        $__internal_d626da4ed5585a4f2d06aa714afb68b16af7b688c08b46c795e24e5a4a8513a3->enter($__internal_d626da4ed5585a4f2d06aa714afb68b16af7b688c08b46c795e24e5a4a8513a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d626da4ed5585a4f2d06aa714afb68b16af7b688c08b46c795e24e5a4a8513a3->leave($__internal_d626da4ed5585a4f2d06aa714afb68b16af7b688c08b46c795e24e5a4a8513a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d6f25cbb47372383a4cae5556932a9e79379481ed7eb1a693e037ce74247865 = $this->env->getExtension("native_profiler");
        $__internal_8d6f25cbb47372383a4cae5556932a9e79379481ed7eb1a693e037ce74247865->enter($__internal_8d6f25cbb47372383a4cae5556932a9e79379481ed7eb1a693e037ce74247865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d6f25cbb47372383a4cae5556932a9e79379481ed7eb1a693e037ce74247865->leave($__internal_8d6f25cbb47372383a4cae5556932a9e79379481ed7eb1a693e037ce74247865_prof);

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
