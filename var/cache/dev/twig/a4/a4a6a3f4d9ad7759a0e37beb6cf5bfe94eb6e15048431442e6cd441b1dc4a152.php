<?php

/* assignment/new.html.twig */
class __TwigTemplate_e8599bf3e28222cbd9c576ab1caafd30964e700b937653763308da9c414dd587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/new.html.twig", 1);
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
        $__internal_d48f99b6b17e322a85cd60ad1ab92cc1766a30d4b1c3192c50f5209505cd6397 = $this->env->getExtension("native_profiler");
        $__internal_d48f99b6b17e322a85cd60ad1ab92cc1766a30d4b1c3192c50f5209505cd6397->enter($__internal_d48f99b6b17e322a85cd60ad1ab92cc1766a30d4b1c3192c50f5209505cd6397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48f99b6b17e322a85cd60ad1ab92cc1766a30d4b1c3192c50f5209505cd6397->leave($__internal_d48f99b6b17e322a85cd60ad1ab92cc1766a30d4b1c3192c50f5209505cd6397_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_9b1c18ed97d5354665cf25b19d87dd595cbc4bb4875eab62637e35b6e4c278f7 = $this->env->getExtension("native_profiler");
        $__internal_9b1c18ed97d5354665cf25b19d87dd595cbc4bb4875eab62637e35b6e4c278f7->enter($__internal_9b1c18ed97d5354665cf25b19d87dd595cbc4bb4875eab62637e35b6e4c278f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_9b1c18ed97d5354665cf25b19d87dd595cbc4bb4875eab62637e35b6e4c278f7->leave($__internal_9b1c18ed97d5354665cf25b19d87dd595cbc4bb4875eab62637e35b6e4c278f7_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_a6b58c64792de5d8350e74b7c2d209693799182a883907b175ccc998eb4e1c1a = $this->env->getExtension("native_profiler");
        $__internal_a6b58c64792de5d8350e74b7c2d209693799182a883907b175ccc998eb4e1c1a->enter($__internal_a6b58c64792de5d8350e74b7c2d209693799182a883907b175ccc998eb4e1c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a6b58c64792de5d8350e74b7c2d209693799182a883907b175ccc998eb4e1c1a->leave($__internal_a6b58c64792de5d8350e74b7c2d209693799182a883907b175ccc998eb4e1c1a_prof);

    }

    public function getTemplateName()
    {
        return "assignment/new.html.twig";
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
/*             <br><a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
