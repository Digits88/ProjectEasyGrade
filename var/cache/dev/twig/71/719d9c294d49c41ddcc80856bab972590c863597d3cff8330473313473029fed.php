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
        $__internal_ab26c5117e11e5d21e7b8d153e1a7cbdb6aa90b1c2c4f70b56cd8a854769f0bb = $this->env->getExtension("native_profiler");
        $__internal_ab26c5117e11e5d21e7b8d153e1a7cbdb6aa90b1c2c4f70b56cd8a854769f0bb->enter($__internal_ab26c5117e11e5d21e7b8d153e1a7cbdb6aa90b1c2c4f70b56cd8a854769f0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab26c5117e11e5d21e7b8d153e1a7cbdb6aa90b1c2c4f70b56cd8a854769f0bb->leave($__internal_ab26c5117e11e5d21e7b8d153e1a7cbdb6aa90b1c2c4f70b56cd8a854769f0bb_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_a19db793a179e92695d0d6f55d48807c28bce5d4bc9433c6b84e14a8cb03b1d4 = $this->env->getExtension("native_profiler");
        $__internal_a19db793a179e92695d0d6f55d48807c28bce5d4bc9433c6b84e14a8cb03b1d4->enter($__internal_a19db793a179e92695d0d6f55d48807c28bce5d4bc9433c6b84e14a8cb03b1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_a19db793a179e92695d0d6f55d48807c28bce5d4bc9433c6b84e14a8cb03b1d4->leave($__internal_a19db793a179e92695d0d6f55d48807c28bce5d4bc9433c6b84e14a8cb03b1d4_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_ac4fc5f340763fcb1cb6c18efe7d0f7c68977f231b9fd190f282e981ddb1afeb = $this->env->getExtension("native_profiler");
        $__internal_ac4fc5f340763fcb1cb6c18efe7d0f7c68977f231b9fd190f282e981ddb1afeb->enter($__internal_ac4fc5f340763fcb1cb6c18efe7d0f7c68977f231b9fd190f282e981ddb1afeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ac4fc5f340763fcb1cb6c18efe7d0f7c68977f231b9fd190f282e981ddb1afeb->leave($__internal_ac4fc5f340763fcb1cb6c18efe7d0f7c68977f231b9fd190f282e981ddb1afeb_prof);

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
/*             <br><a href="{{ path('course_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
