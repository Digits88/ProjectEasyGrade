<?php

/* user/new.html.twig */
class __TwigTemplate_63381a52628d9846f209c40b6aa77534eefcb6a994825a5d773c45b4739e1b76 extends Twig_Template
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
        $__internal_cf6b4f54e3a9529bb31a9b033cc72578c5bd43318568d089d8a2effa7acca237 = $this->env->getExtension("native_profiler");
        $__internal_cf6b4f54e3a9529bb31a9b033cc72578c5bd43318568d089d8a2effa7acca237->enter($__internal_cf6b4f54e3a9529bb31a9b033cc72578c5bd43318568d089d8a2effa7acca237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf6b4f54e3a9529bb31a9b033cc72578c5bd43318568d089d8a2effa7acca237->leave($__internal_cf6b4f54e3a9529bb31a9b033cc72578c5bd43318568d089d8a2effa7acca237_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_531362f8c81f23b840928aac96780cd3ab956cf1a64d5cdbf048e2ad4a4ba28f = $this->env->getExtension("native_profiler");
        $__internal_531362f8c81f23b840928aac96780cd3ab956cf1a64d5cdbf048e2ad4a4ba28f->enter($__internal_531362f8c81f23b840928aac96780cd3ab956cf1a64d5cdbf048e2ad4a4ba28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_531362f8c81f23b840928aac96780cd3ab956cf1a64d5cdbf048e2ad4a4ba28f->leave($__internal_531362f8c81f23b840928aac96780cd3ab956cf1a64d5cdbf048e2ad4a4ba28f_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c2573008fade86194ed8304ae181a685e4e56b08c420be04add7c07c688100cf = $this->env->getExtension("native_profiler");
        $__internal_c2573008fade86194ed8304ae181a685e4e56b08c420be04add7c07c688100cf->enter($__internal_c2573008fade86194ed8304ae181a685e4e56b08c420be04add7c07c688100cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_c2573008fade86194ed8304ae181a685e4e56b08c420be04add7c07c688100cf->leave($__internal_c2573008fade86194ed8304ae181a685e4e56b08c420be04add7c07c688100cf_prof);

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
