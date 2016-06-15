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
        $__internal_0b837d0be6eb24040816458d3d7cd725b9ca638e29446863295b816a3de44413 = $this->env->getExtension("native_profiler");
        $__internal_0b837d0be6eb24040816458d3d7cd725b9ca638e29446863295b816a3de44413->enter($__internal_0b837d0be6eb24040816458d3d7cd725b9ca638e29446863295b816a3de44413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b837d0be6eb24040816458d3d7cd725b9ca638e29446863295b816a3de44413->leave($__internal_0b837d0be6eb24040816458d3d7cd725b9ca638e29446863295b816a3de44413_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1708aa16c02a73139af4573c2fd39ff0e9583d3e11b634e7688a15ae0d58bca1 = $this->env->getExtension("native_profiler");
        $__internal_1708aa16c02a73139af4573c2fd39ff0e9583d3e11b634e7688a15ae0d58bca1->enter($__internal_1708aa16c02a73139af4573c2fd39ff0e9583d3e11b634e7688a15ae0d58bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_1708aa16c02a73139af4573c2fd39ff0e9583d3e11b634e7688a15ae0d58bca1->leave($__internal_1708aa16c02a73139af4573c2fd39ff0e9583d3e11b634e7688a15ae0d58bca1_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_d9ac28d4d92c123309a600f0ccfecda79a48516819aed4da408bc4db91bd91d8 = $this->env->getExtension("native_profiler");
        $__internal_d9ac28d4d92c123309a600f0ccfecda79a48516819aed4da408bc4db91bd91d8->enter($__internal_d9ac28d4d92c123309a600f0ccfecda79a48516819aed4da408bc4db91bd91d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
    <input class=\"btn btn-success\" type=\"submit\" value=\"Save\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
            <br>
        </li>
    </ul>
";
        
        $__internal_d9ac28d4d92c123309a600f0ccfecda79a48516819aed4da408bc4db91bd91d8->leave($__internal_d9ac28d4d92c123309a600f0ccfecda79a48516819aed4da408bc4db91bd91d8_prof);

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
/*     <input class="btn btn-success" type="submit" value="Save" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_homepage') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
