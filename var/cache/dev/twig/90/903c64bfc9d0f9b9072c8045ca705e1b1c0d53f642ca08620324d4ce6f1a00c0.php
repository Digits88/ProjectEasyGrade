<?php

/* :course:new.html.twig */
class __TwigTemplate_2efaf1be1b5526f68778d547c62ca99df2785d5b7f32786a695d7d76fd1d5dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:new.html.twig", 1);
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
        $__internal_df2174482989f725546c0bc72cdb0df60233be3a2caec8356196a29026390b0b = $this->env->getExtension("native_profiler");
        $__internal_df2174482989f725546c0bc72cdb0df60233be3a2caec8356196a29026390b0b->enter($__internal_df2174482989f725546c0bc72cdb0df60233be3a2caec8356196a29026390b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2174482989f725546c0bc72cdb0df60233be3a2caec8356196a29026390b0b->leave($__internal_df2174482989f725546c0bc72cdb0df60233be3a2caec8356196a29026390b0b_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_5d98be633cd32f2328e29c7101a3edd02b9bba889950697704ee0a16be799819 = $this->env->getExtension("native_profiler");
        $__internal_5d98be633cd32f2328e29c7101a3edd02b9bba889950697704ee0a16be799819->enter($__internal_5d98be633cd32f2328e29c7101a3edd02b9bba889950697704ee0a16be799819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_5d98be633cd32f2328e29c7101a3edd02b9bba889950697704ee0a16be799819->leave($__internal_5d98be633cd32f2328e29c7101a3edd02b9bba889950697704ee0a16be799819_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_edc104c74b83e44c1ed082aea816b6d9267e5c2fe20bcc1db5154df4412b20f3 = $this->env->getExtension("native_profiler");
        $__internal_edc104c74b83e44c1ed082aea816b6d9267e5c2fe20bcc1db5154df4412b20f3->enter($__internal_edc104c74b83e44c1ed082aea816b6d9267e5c2fe20bcc1db5154df4412b20f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_edc104c74b83e44c1ed082aea816b6d9267e5c2fe20bcc1db5154df4412b20f3->leave($__internal_edc104c74b83e44c1ed082aea816b6d9267e5c2fe20bcc1db5154df4412b20f3_prof);

    }

    public function getTemplateName()
    {
        return ":course:new.html.twig";
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
