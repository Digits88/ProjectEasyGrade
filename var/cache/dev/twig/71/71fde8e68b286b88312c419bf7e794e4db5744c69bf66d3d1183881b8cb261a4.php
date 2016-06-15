<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_73a052d1387e4fd05d76912e868d1747fd12a0c34e2c09f75d3eb868843617c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 2);
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
        $__internal_731c0129527bf8f874da4ce23b895204314c4564a5fea1e53c094a47391567ae = $this->env->getExtension("native_profiler");
        $__internal_731c0129527bf8f874da4ce23b895204314c4564a5fea1e53c094a47391567ae->enter($__internal_731c0129527bf8f874da4ce23b895204314c4564a5fea1e53c094a47391567ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_731c0129527bf8f874da4ce23b895204314c4564a5fea1e53c094a47391567ae->leave($__internal_731c0129527bf8f874da4ce23b895204314c4564a5fea1e53c094a47391567ae_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_617b05d60dd86d574b9fc4f8d626d0d142d49e5bf47c4a58f7d7aadde843c108 = $this->env->getExtension("native_profiler");
        $__internal_617b05d60dd86d574b9fc4f8d626d0d142d49e5bf47c4a58f7d7aadde843c108->enter($__internal_617b05d60dd86d574b9fc4f8d626d0d142d49e5bf47c4a58f7d7aadde843c108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_617b05d60dd86d574b9fc4f8d626d0d142d49e5bf47c4a58f7d7aadde843c108->leave($__internal_617b05d60dd86d574b9fc4f8d626d0d142d49e5bf47c4a58f7d7aadde843c108_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
