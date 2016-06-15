<?php

/* :user:new.html.twig */
class __TwigTemplate_ae6531312008e28d00389f60e70cfd38633c793d4f1b6f341c868172aadf8c86 extends Twig_Template
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
        $__internal_ba3d3e1e71cd1c0829208744defd63a78567a92bbb8535b75d07b40492b2e1ea = $this->env->getExtension("native_profiler");
        $__internal_ba3d3e1e71cd1c0829208744defd63a78567a92bbb8535b75d07b40492b2e1ea->enter($__internal_ba3d3e1e71cd1c0829208744defd63a78567a92bbb8535b75d07b40492b2e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba3d3e1e71cd1c0829208744defd63a78567a92bbb8535b75d07b40492b2e1ea->leave($__internal_ba3d3e1e71cd1c0829208744defd63a78567a92bbb8535b75d07b40492b2e1ea_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_28d2a1a970e76ab595e9d07d20032e46e96a4b6151cdead7566babd75866f839 = $this->env->getExtension("native_profiler");
        $__internal_28d2a1a970e76ab595e9d07d20032e46e96a4b6151cdead7566babd75866f839->enter($__internal_28d2a1a970e76ab595e9d07d20032e46e96a4b6151cdead7566babd75866f839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_28d2a1a970e76ab595e9d07d20032e46e96a4b6151cdead7566babd75866f839->leave($__internal_28d2a1a970e76ab595e9d07d20032e46e96a4b6151cdead7566babd75866f839_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_cb90e6152fee6f90d11d91f2696142e7f2197ad502a848b91794083468233225 = $this->env->getExtension("native_profiler");
        $__internal_cb90e6152fee6f90d11d91f2696142e7f2197ad502a848b91794083468233225->enter($__internal_cb90e6152fee6f90d11d91f2696142e7f2197ad502a848b91794083468233225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cb90e6152fee6f90d11d91f2696142e7f2197ad502a848b91794083468233225->leave($__internal_cb90e6152fee6f90d11d91f2696142e7f2197ad502a848b91794083468233225_prof);

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
/*         <br><input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_homepage') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
