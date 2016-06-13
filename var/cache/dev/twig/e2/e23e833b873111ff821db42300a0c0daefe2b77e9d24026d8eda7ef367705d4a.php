<?php

/* :assignment:new.html.twig */
class __TwigTemplate_83346ecec6d022bd5d4e2df6cb5d68dd6340abc70ddd279cd39d21ab09293329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assignment:new.html.twig", 1);
        $this->blocks = array(
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_412e0b229ea6285c35fb0fd99218ccc1f277010833a13052060674d3e817dd8d = $this->env->getExtension("native_profiler");
        $__internal_412e0b229ea6285c35fb0fd99218ccc1f277010833a13052060674d3e817dd8d->enter($__internal_412e0b229ea6285c35fb0fd99218ccc1f277010833a13052060674d3e817dd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assignment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_412e0b229ea6285c35fb0fd99218ccc1f277010833a13052060674d3e817dd8d->leave($__internal_412e0b229ea6285c35fb0fd99218ccc1f277010833a13052060674d3e817dd8d_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_b0fc58629e2ef36550fb89b79da6935f3aafefcb634a27f1d2f68add8b02239d = $this->env->getExtension("native_profiler");
        $__internal_b0fc58629e2ef36550fb89b79da6935f3aafefcb634a27f1d2f68add8b02239d->enter($__internal_b0fc58629e2ef36550fb89b79da6935f3aafefcb634a27f1d2f68add8b02239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_b0fc58629e2ef36550fb89b79da6935f3aafefcb634a27f1d2f68add8b02239d->leave($__internal_b0fc58629e2ef36550fb89b79da6935f3aafefcb634a27f1d2f68add8b02239d_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_9aeeeb667baa0ee4f49a2f1c886cc0418c59545e420a0c48fa529c72e15d464f = $this->env->getExtension("native_profiler");
        $__internal_9aeeeb667baa0ee4f49a2f1c886cc0418c59545e420a0c48fa529c72e15d464f->enter($__internal_9aeeeb667baa0ee4f49a2f1c886cc0418c59545e420a0c48fa529c72e15d464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input type=\"submit\" value=\"Create\" class=\"btn btn-success\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("assignment_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9aeeeb667baa0ee4f49a2f1c886cc0418c59545e420a0c48fa529c72e15d464f->leave($__internal_9aeeeb667baa0ee4f49a2f1c886cc0418c59545e420a0c48fa529c72e15d464f_prof);

    }

    public function getTemplateName()
    {
        return ":assignment:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Assignment creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input type="submit" value="Create" class="btn btn-success" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('assignment_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
