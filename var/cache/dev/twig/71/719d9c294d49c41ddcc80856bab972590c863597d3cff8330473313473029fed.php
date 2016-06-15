<?php

/* course/new.html.twig */
class __TwigTemplate_2200a941ee6bf8bbf2514f0d5a11b3af00a717c0593ece9ba56e30a853f2e272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/new.html.twig", 1);
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
        $__internal_e63b76869c02e6be0cbfa4163f1f0f0a87fbf05b138e83d5f83af8a80028e27a = $this->env->getExtension("native_profiler");
        $__internal_e63b76869c02e6be0cbfa4163f1f0f0a87fbf05b138e83d5f83af8a80028e27a->enter($__internal_e63b76869c02e6be0cbfa4163f1f0f0a87fbf05b138e83d5f83af8a80028e27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63b76869c02e6be0cbfa4163f1f0f0a87fbf05b138e83d5f83af8a80028e27a->leave($__internal_e63b76869c02e6be0cbfa4163f1f0f0a87fbf05b138e83d5f83af8a80028e27a_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_0e785ce465a0fa151abe2c082ac28538a94c8087e3184d32b74bd9a587692463 = $this->env->getExtension("native_profiler");
        $__internal_0e785ce465a0fa151abe2c082ac28538a94c8087e3184d32b74bd9a587692463->enter($__internal_0e785ce465a0fa151abe2c082ac28538a94c8087e3184d32b74bd9a587692463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_0e785ce465a0fa151abe2c082ac28538a94c8087e3184d32b74bd9a587692463->leave($__internal_0e785ce465a0fa151abe2c082ac28538a94c8087e3184d32b74bd9a587692463_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_a4375c5a3206fe10b09b6228ce0b9dfb60fe7a73cbb4f74bcd5b1600e5f593a0 = $this->env->getExtension("native_profiler");
        $__internal_a4375c5a3206fe10b09b6228ce0b9dfb60fe7a73cbb4f74bcd5b1600e5f593a0->enter($__internal_a4375c5a3206fe10b09b6228ce0b9dfb60fe7a73cbb4f74bcd5b1600e5f593a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a4375c5a3206fe10b09b6228ce0b9dfb60fe7a73cbb4f74bcd5b1600e5f593a0->leave($__internal_a4375c5a3206fe10b09b6228ce0b9dfb60fe7a73cbb4f74bcd5b1600e5f593a0_prof);

    }

    public function getTemplateName()
    {
        return "course/new.html.twig";
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
/*     <h1>Course creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input type="submit" value="Create" class="btn btn-success" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
