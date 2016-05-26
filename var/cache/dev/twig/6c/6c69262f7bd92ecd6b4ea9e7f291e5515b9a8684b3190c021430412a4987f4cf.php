<?php

/* :user:edit.html.twig */
class __TwigTemplate_f01f51847910cb7206242c6032f4752506b9b4816e061c1dd87c881f04387bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_96c00b09463349f9a99c0cfd2faf69714ea48ce9aee2cbaa505f04696cb5c2c0 = $this->env->getExtension("native_profiler");
        $__internal_96c00b09463349f9a99c0cfd2faf69714ea48ce9aee2cbaa505f04696cb5c2c0->enter($__internal_96c00b09463349f9a99c0cfd2faf69714ea48ce9aee2cbaa505f04696cb5c2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c00b09463349f9a99c0cfd2faf69714ea48ce9aee2cbaa505f04696cb5c2c0->leave($__internal_96c00b09463349f9a99c0cfd2faf69714ea48ce9aee2cbaa505f04696cb5c2c0_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_15d78163f0329cecd0f5d2fa7b6231c79e144f2d76febd640ac03f1b6e88cd9d = $this->env->getExtension("native_profiler");
        $__internal_15d78163f0329cecd0f5d2fa7b6231c79e144f2d76febd640ac03f1b6e88cd9d->enter($__internal_15d78163f0329cecd0f5d2fa7b6231c79e144f2d76febd640ac03f1b6e88cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_15d78163f0329cecd0f5d2fa7b6231c79e144f2d76febd640ac03f1b6e88cd9d->leave($__internal_15d78163f0329cecd0f5d2fa7b6231c79e144f2d76febd640ac03f1b6e88cd9d_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_9a051a971ab708675b659abf3fef1c4cf7a9d52d2e2c2c67dcbcdc9a44c5f57d = $this->env->getExtension("native_profiler");
        $__internal_9a051a971ab708675b659abf3fef1c4cf7a9d52d2e2c2c67dcbcdc9a44c5f57d->enter($__internal_9a051a971ab708675b659abf3fef1c4cf7a9d52d2e2c2c67dcbcdc9a44c5f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "    <h1>User edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
            <br>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9a051a971ab708675b659abf3fef1c4cf7a9d52d2e2c2c67dcbcdc9a44c5f57d->leave($__internal_9a051a971ab708675b659abf3fef1c4cf7a9d52d2e2c2c67dcbcdc9a44c5f57d_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  81 => 20,  74 => 16,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*     {{ form_widget(edit_form) }}*/
/*     <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*             <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
