<?php

/* testcase/new.html.twig */
class __TwigTemplate_194329f5fdbd52612d759e0f2d5b6cb89a41acd539e4403165f956066199c0aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testcase/new.html.twig", 1);
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
        $__internal_ce0dd0c53cf4abc497cea413c5c4326fb947ee7ce076bd4966de0a7a4d6b6f71 = $this->env->getExtension("native_profiler");
        $__internal_ce0dd0c53cf4abc497cea413c5c4326fb947ee7ce076bd4966de0a7a4d6b6f71->enter($__internal_ce0dd0c53cf4abc497cea413c5c4326fb947ee7ce076bd4966de0a7a4d6b6f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testcase/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce0dd0c53cf4abc497cea413c5c4326fb947ee7ce076bd4966de0a7a4d6b6f71->leave($__internal_ce0dd0c53cf4abc497cea413c5c4326fb947ee7ce076bd4966de0a7a4d6b6f71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_848b2fee838c8790a538b6f2f5238a72b2a6bce9b16b43a5e06fe8b87b74b20f = $this->env->getExtension("native_profiler");
        $__internal_848b2fee838c8790a538b6f2f5238a72b2a6bce9b16b43a5e06fe8b87b74b20f->enter($__internal_848b2fee838c8790a538b6f2f5238a72b2a6bce9b16b43a5e06fe8b87b74b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TestCase creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("testcase_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_848b2fee838c8790a538b6f2f5238a72b2a6bce9b16b43a5e06fe8b87b74b20f->leave($__internal_848b2fee838c8790a538b6f2f5238a72b2a6bce9b16b43a5e06fe8b87b74b20f_prof);

    }

    public function getTemplateName()
    {
        return "testcase/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TestCase creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('testcase_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
