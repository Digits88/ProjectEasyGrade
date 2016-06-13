<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d8ce026b52c08b99db703dbdca92f6d79e2a85b20475189ea3a9a837a8e35b5a extends Twig_Template
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
        $__internal_fc684f8d68b924e493b855d0b4ff1cb94a69bdd95dc14b6b256d7b7c7b13d09d = $this->env->getExtension("native_profiler");
        $__internal_fc684f8d68b924e493b855d0b4ff1cb94a69bdd95dc14b6b256d7b7c7b13d09d->enter($__internal_fc684f8d68b924e493b855d0b4ff1cb94a69bdd95dc14b6b256d7b7c7b13d09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc684f8d68b924e493b855d0b4ff1cb94a69bdd95dc14b6b256d7b7c7b13d09d->leave($__internal_fc684f8d68b924e493b855d0b4ff1cb94a69bdd95dc14b6b256d7b7c7b13d09d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b974cc63909a37433d4c7e5b8e5adef57886f91e38f687037393ab00a622e66e = $this->env->getExtension("native_profiler");
        $__internal_b974cc63909a37433d4c7e5b8e5adef57886f91e38f687037393ab00a622e66e->enter($__internal_b974cc63909a37433d4c7e5b8e5adef57886f91e38f687037393ab00a622e66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b974cc63909a37433d4c7e5b8e5adef57886f91e38f687037393ab00a622e66e->leave($__internal_b974cc63909a37433d4c7e5b8e5adef57886f91e38f687037393ab00a622e66e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4633c8970d6a442b7c017dbf710f1083cb27e57fbea6983432c53876d4bff26 = $this->env->getExtension("native_profiler");
        $__internal_b4633c8970d6a442b7c017dbf710f1083cb27e57fbea6983432c53876d4bff26->enter($__internal_b4633c8970d6a442b7c017dbf710f1083cb27e57fbea6983432c53876d4bff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4633c8970d6a442b7c017dbf710f1083cb27e57fbea6983432c53876d4bff26->leave($__internal_b4633c8970d6a442b7c017dbf710f1083cb27e57fbea6983432c53876d4bff26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b2a4dece0177a1c7908cb2a55c35020a5d53b972f2b23e4116eed97e37a440c = $this->env->getExtension("native_profiler");
        $__internal_5b2a4dece0177a1c7908cb2a55c35020a5d53b972f2b23e4116eed97e37a440c->enter($__internal_5b2a4dece0177a1c7908cb2a55c35020a5d53b972f2b23e4116eed97e37a440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b2a4dece0177a1c7908cb2a55c35020a5d53b972f2b23e4116eed97e37a440c->leave($__internal_5b2a4dece0177a1c7908cb2a55c35020a5d53b972f2b23e4116eed97e37a440c_prof);

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
