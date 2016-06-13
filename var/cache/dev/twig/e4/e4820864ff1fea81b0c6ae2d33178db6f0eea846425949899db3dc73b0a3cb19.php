<?php

/* :user:edit.html.twig */
class __TwigTemplate_52b2fc53502c48841149b403582513647b5c925a03d5f9dd962da7b9ba885b93 extends Twig_Template
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
        $__internal_4ecd3157e7cf991b765e505909661e7f216b077d32b42a29d6af9b25b62c0c8b = $this->env->getExtension("native_profiler");
        $__internal_4ecd3157e7cf991b765e505909661e7f216b077d32b42a29d6af9b25b62c0c8b->enter($__internal_4ecd3157e7cf991b765e505909661e7f216b077d32b42a29d6af9b25b62c0c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ecd3157e7cf991b765e505909661e7f216b077d32b42a29d6af9b25b62c0c8b->leave($__internal_4ecd3157e7cf991b765e505909661e7f216b077d32b42a29d6af9b25b62c0c8b_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_2908a8b56ceaf97ca3c83074ab8a63f1d48e90d8dd5a3790fcf16cd84fca654e = $this->env->getExtension("native_profiler");
        $__internal_2908a8b56ceaf97ca3c83074ab8a63f1d48e90d8dd5a3790fcf16cd84fca654e->enter($__internal_2908a8b56ceaf97ca3c83074ab8a63f1d48e90d8dd5a3790fcf16cd84fca654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_2908a8b56ceaf97ca3c83074ab8a63f1d48e90d8dd5a3790fcf16cd84fca654e->leave($__internal_2908a8b56ceaf97ca3c83074ab8a63f1d48e90d8dd5a3790fcf16cd84fca654e_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_1b8e03c723bad6a5566945caedbd00a0966ea8d96e36e2cc8d50f25b6b9e7b94 = $this->env->getExtension("native_profiler");
        $__internal_1b8e03c723bad6a5566945caedbd00a0966ea8d96e36e2cc8d50f25b6b9e7b94->enter($__internal_1b8e03c723bad6a5566945caedbd00a0966ea8d96e36e2cc8d50f25b6b9e7b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
    <input class=\"btn btn-success\" type=\"submit\" value=\"Edit\" />
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
    </ul>
";
        
        $__internal_1b8e03c723bad6a5566945caedbd00a0966ea8d96e36e2cc8d50f25b6b9e7b94->leave($__internal_1b8e03c723bad6a5566945caedbd00a0966ea8d96e36e2cc8d50f25b6b9e7b94_prof);

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
        return array (  74 => 16,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
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
/*     <input class="btn btn-success" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
