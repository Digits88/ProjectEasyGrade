<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_237841a343910bc27371b8d894a30f688dc2748b5e1d86b33167cf07ba254c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/edit_content.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e174ada41d6666334850757f5529e94f30861796dd327cc92d895756db771056 = $this->env->getExtension("native_profiler");
        $__internal_e174ada41d6666334850757f5529e94f30861796dd327cc92d895756db771056->enter($__internal_e174ada41d6666334850757f5529e94f30861796dd327cc92d895756db771056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e174ada41d6666334850757f5529e94f30861796dd327cc92d895756db771056->leave($__internal_e174ada41d6666334850757f5529e94f30861796dd327cc92d895756db771056_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a36d72710a82793a5481cb3012bd172b36fbae30d3df525e71842ad92cd6c19f = $this->env->getExtension("native_profiler");
        $__internal_a36d72710a82793a5481cb3012bd172b36fbae30d3df525e71842ad92cd6c19f->enter($__internal_a36d72710a82793a5481cb3012bd172b36fbae30d3df525e71842ad92cd6c19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_a36d72710a82793a5481cb3012bd172b36fbae30d3df525e71842ad92cd6c19f->leave($__internal_a36d72710a82793a5481cb3012bd172b36fbae30d3df525e71842ad92cd6c19f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  52 => 9,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
/* {% endblock body %}*/
/* */
