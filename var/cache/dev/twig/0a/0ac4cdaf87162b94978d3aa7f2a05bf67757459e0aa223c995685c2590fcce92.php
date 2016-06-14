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
        $__internal_66c2e578ada033328ff2ddaa42656db6bee7622a09d02818fa9ca088782a7dcd = $this->env->getExtension("native_profiler");
        $__internal_66c2e578ada033328ff2ddaa42656db6bee7622a09d02818fa9ca088782a7dcd->enter($__internal_66c2e578ada033328ff2ddaa42656db6bee7622a09d02818fa9ca088782a7dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c2e578ada033328ff2ddaa42656db6bee7622a09d02818fa9ca088782a7dcd->leave($__internal_66c2e578ada033328ff2ddaa42656db6bee7622a09d02818fa9ca088782a7dcd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b674875a2da7537cd6e35dd6c3476945b7e6508769051296e82948ce0b82dc48 = $this->env->getExtension("native_profiler");
        $__internal_b674875a2da7537cd6e35dd6c3476945b7e6508769051296e82948ce0b82dc48->enter($__internal_b674875a2da7537cd6e35dd6c3476945b7e6508769051296e82948ce0b82dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b674875a2da7537cd6e35dd6c3476945b7e6508769051296e82948ce0b82dc48->leave($__internal_b674875a2da7537cd6e35dd6c3476945b7e6508769051296e82948ce0b82dc48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64b7f97977549caa6d1b8176bf53875de1da869b4312882e0b79609c0281ff8c = $this->env->getExtension("native_profiler");
        $__internal_64b7f97977549caa6d1b8176bf53875de1da869b4312882e0b79609c0281ff8c->enter($__internal_64b7f97977549caa6d1b8176bf53875de1da869b4312882e0b79609c0281ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_64b7f97977549caa6d1b8176bf53875de1da869b4312882e0b79609c0281ff8c->leave($__internal_64b7f97977549caa6d1b8176bf53875de1da869b4312882e0b79609c0281ff8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33bbed9950a54c518743fa36215c921184e76b08545600f98a2372b1155e9273 = $this->env->getExtension("native_profiler");
        $__internal_33bbed9950a54c518743fa36215c921184e76b08545600f98a2372b1155e9273->enter($__internal_33bbed9950a54c518743fa36215c921184e76b08545600f98a2372b1155e9273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33bbed9950a54c518743fa36215c921184e76b08545600f98a2372b1155e9273->leave($__internal_33bbed9950a54c518743fa36215c921184e76b08545600f98a2372b1155e9273_prof);

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
