<?php

/* submission/new.html.twig */
class __TwigTemplate_e46d0be768505f8bcc892c64e7ea5ead37a8a6f6b3edce6660007893281c57cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/new.html.twig", 1);
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
        $__internal_0787dd598fc764f60b0d5a278130feab02087fbde719c89831804b4fbbf3781a = $this->env->getExtension("native_profiler");
        $__internal_0787dd598fc764f60b0d5a278130feab02087fbde719c89831804b4fbbf3781a->enter($__internal_0787dd598fc764f60b0d5a278130feab02087fbde719c89831804b4fbbf3781a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0787dd598fc764f60b0d5a278130feab02087fbde719c89831804b4fbbf3781a->leave($__internal_0787dd598fc764f60b0d5a278130feab02087fbde719c89831804b4fbbf3781a_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_25ca06defbb53cf4602e94c710c6953f15e9183f51ab815764da97da2ab288be = $this->env->getExtension("native_profiler");
        $__internal_25ca06defbb53cf4602e94c710c6953f15e9183f51ab815764da97da2ab288be->enter($__internal_25ca06defbb53cf4602e94c710c6953f15e9183f51ab815764da97da2ab288be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_25ca06defbb53cf4602e94c710c6953f15e9183f51ab815764da97da2ab288be->leave($__internal_25ca06defbb53cf4602e94c710c6953f15e9183f51ab815764da97da2ab288be_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_0c01cd76de84dc34e8c5008a3b948f7712050bb90f3c8ad930def3e8e2a1cdb9 = $this->env->getExtension("native_profiler");
        $__internal_0c01cd76de84dc34e8c5008a3b948f7712050bb90f3c8ad930def3e8e2a1cdb9->enter($__internal_0c01cd76de84dc34e8c5008a3b948f7712050bb90f3c8ad930def3e8e2a1cdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0c01cd76de84dc34e8c5008a3b948f7712050bb90f3c8ad930def3e8e2a1cdb9->leave($__internal_0c01cd76de84dc34e8c5008a3b948f7712050bb90f3c8ad930def3e8e2a1cdb9_prof);

    }

    public function getTemplateName()
    {
        return "submission/new.html.twig";
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
/*     <h1>Submission creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
