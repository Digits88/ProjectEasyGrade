<?php

/* user/new.html.twig */
class __TwigTemplate_c3a4fd3da9b4249c7b5e312d3a32c29aa0dbb0d83fa7f4be3b1548ed6bdefb30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_11a42aedbf07a8ea9ded032192e9fceebd991f94c2207d8aa0ff63137122f544 = $this->env->getExtension("native_profiler");
        $__internal_11a42aedbf07a8ea9ded032192e9fceebd991f94c2207d8aa0ff63137122f544->enter($__internal_11a42aedbf07a8ea9ded032192e9fceebd991f94c2207d8aa0ff63137122f544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a42aedbf07a8ea9ded032192e9fceebd991f94c2207d8aa0ff63137122f544->leave($__internal_11a42aedbf07a8ea9ded032192e9fceebd991f94c2207d8aa0ff63137122f544_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_c24d5b781ca94b1b1bd9a7a266a615a726adc4a8bf45879037c70b8821cf39bf = $this->env->getExtension("native_profiler");
        $__internal_c24d5b781ca94b1b1bd9a7a266a615a726adc4a8bf45879037c70b8821cf39bf->enter($__internal_c24d5b781ca94b1b1bd9a7a266a615a726adc4a8bf45879037c70b8821cf39bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_c24d5b781ca94b1b1bd9a7a266a615a726adc4a8bf45879037c70b8821cf39bf->leave($__internal_c24d5b781ca94b1b1bd9a7a266a615a726adc4a8bf45879037c70b8821cf39bf_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_49069be9a8f7e3670d3fd90f28af64610c43ba54e1dae622f830d6047201b6cf = $this->env->getExtension("native_profiler");
        $__internal_49069be9a8f7e3670d3fd90f28af64610c43ba54e1dae622f830d6047201b6cf->enter($__internal_49069be9a8f7e3670d3fd90f28af64610c43ba54e1dae622f830d6047201b6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_49069be9a8f7e3670d3fd90f28af64610c43ba54e1dae622f830d6047201b6cf->leave($__internal_49069be9a8f7e3670d3fd90f28af64610c43ba54e1dae622f830d6047201b6cf_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
/*         <br><input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
