<?php

/* :user:new.html.twig */
class __TwigTemplate_dd2d2de9b6e9d48e940b7ee59944fdceb66444ff3603e36b34ef58e815a74773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_ced280ba82299a67104a81734f68c90ef43744c2bb9a03cf0c8c082b194d8f05 = $this->env->getExtension("native_profiler");
        $__internal_ced280ba82299a67104a81734f68c90ef43744c2bb9a03cf0c8c082b194d8f05->enter($__internal_ced280ba82299a67104a81734f68c90ef43744c2bb9a03cf0c8c082b194d8f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ced280ba82299a67104a81734f68c90ef43744c2bb9a03cf0c8c082b194d8f05->leave($__internal_ced280ba82299a67104a81734f68c90ef43744c2bb9a03cf0c8c082b194d8f05_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_5b7a787abae2c462c95c4418619df2797e731f00e3f2b638e066caf7920f3852 = $this->env->getExtension("native_profiler");
        $__internal_5b7a787abae2c462c95c4418619df2797e731f00e3f2b638e066caf7920f3852->enter($__internal_5b7a787abae2c462c95c4418619df2797e731f00e3f2b638e066caf7920f3852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_5b7a787abae2c462c95c4418619df2797e731f00e3f2b638e066caf7920f3852->leave($__internal_5b7a787abae2c462c95c4418619df2797e731f00e3f2b638e066caf7920f3852_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c8b8533f237c4f5dfc9e88a051fccf97792a32c828143da612f300df238c6224 = $this->env->getExtension("native_profiler");
        $__internal_c8b8533f237c4f5dfc9e88a051fccf97792a32c828143da612f300df238c6224->enter($__internal_c8b8533f237c4f5dfc9e88a051fccf97792a32c828143da612f300df238c6224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "    <h1>User creation</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c8b8533f237c4f5dfc9e88a051fccf97792a32c828143da612f300df238c6224->leave($__internal_c8b8533f237c4f5dfc9e88a051fccf97792a32c828143da612f300df238c6224_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
