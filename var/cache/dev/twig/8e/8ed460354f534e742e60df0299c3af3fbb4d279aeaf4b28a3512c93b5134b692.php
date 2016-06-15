<?php

/* :submission:edit.html.twig */
class __TwigTemplate_c170daf379d9e3f8499dcd19bb964ce7bfbd8efdaf4c7a2ea675893c378d9d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":submission:edit.html.twig", 1);
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
        $__internal_fc957f4390b8bfc8b2a1ee6e744f89d4fdb4239390a286fc8fdc8838bc6bc524 = $this->env->getExtension("native_profiler");
        $__internal_fc957f4390b8bfc8b2a1ee6e744f89d4fdb4239390a286fc8fdc8838bc6bc524->enter($__internal_fc957f4390b8bfc8b2a1ee6e744f89d4fdb4239390a286fc8fdc8838bc6bc524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":submission:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc957f4390b8bfc8b2a1ee6e744f89d4fdb4239390a286fc8fdc8838bc6bc524->leave($__internal_fc957f4390b8bfc8b2a1ee6e744f89d4fdb4239390a286fc8fdc8838bc6bc524_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_78cf102f409ba66a5bbc7b07fce978eeb5f814ab08ef5f0f98a69ae67f40284a = $this->env->getExtension("native_profiler");
        $__internal_78cf102f409ba66a5bbc7b07fce978eeb5f814ab08ef5f0f98a69ae67f40284a->enter($__internal_78cf102f409ba66a5bbc7b07fce978eeb5f814ab08ef5f0f98a69ae67f40284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_78cf102f409ba66a5bbc7b07fce978eeb5f814ab08ef5f0f98a69ae67f40284a->leave($__internal_78cf102f409ba66a5bbc7b07fce978eeb5f814ab08ef5f0f98a69ae67f40284a_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_f33308a5d93cab7479c70f329027908cf6f2334c20bde74c8f3cd9cafbe6ffd3 = $this->env->getExtension("native_profiler");
        $__internal_f33308a5d93cab7479c70f329027908cf6f2334c20bde74c8f3cd9cafbe6ffd3->enter($__internal_f33308a5d93cab7479c70f329027908cf6f2334c20bde74c8f3cd9cafbe6ffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f33308a5d93cab7479c70f329027908cf6f2334c20bde74c8f3cd9cafbe6ffd3->leave($__internal_f33308a5d93cab7479c70f329027908cf6f2334c20bde74c8f3cd9cafbe6ffd3_prof);

    }

    public function getTemplateName()
    {
        return ":submission:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  79 => 17,  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
