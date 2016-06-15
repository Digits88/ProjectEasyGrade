<?php

/* submission/new.html.twig */
class __TwigTemplate_7ad41ddd84076f39c6860ae413bb66ca4dfdec9f0887cf5e51ada04bec9cd2e5 extends Twig_Template
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
        $__internal_1c25bdf724f046e8c2e7481c332573f6c2c96839b9ab647e9dd89850fba99dae = $this->env->getExtension("native_profiler");
        $__internal_1c25bdf724f046e8c2e7481c332573f6c2c96839b9ab647e9dd89850fba99dae->enter($__internal_1c25bdf724f046e8c2e7481c332573f6c2c96839b9ab647e9dd89850fba99dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c25bdf724f046e8c2e7481c332573f6c2c96839b9ab647e9dd89850fba99dae->leave($__internal_1c25bdf724f046e8c2e7481c332573f6c2c96839b9ab647e9dd89850fba99dae_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_59f4525af7899f25d19fc8af29a5e687bcb41345226fa10e31901dcbc16dbc2e = $this->env->getExtension("native_profiler");
        $__internal_59f4525af7899f25d19fc8af29a5e687bcb41345226fa10e31901dcbc16dbc2e->enter($__internal_59f4525af7899f25d19fc8af29a5e687bcb41345226fa10e31901dcbc16dbc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_59f4525af7899f25d19fc8af29a5e687bcb41345226fa10e31901dcbc16dbc2e->leave($__internal_59f4525af7899f25d19fc8af29a5e687bcb41345226fa10e31901dcbc16dbc2e_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_33b1d9280771db31772172903c9412fcae110829429ace6d935ce7495c36a6de = $this->env->getExtension("native_profiler");
        $__internal_33b1d9280771db31772172903c9412fcae110829429ace6d935ce7495c36a6de->enter($__internal_33b1d9280771db31772172903c9412fcae110829429ace6d935ce7495c36a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Upload\" />
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
        
        $__internal_33b1d9280771db31772172903c9412fcae110829429ace6d935ce7495c36a6de->leave($__internal_33b1d9280771db31772172903c9412fcae110829429ace6d935ce7495c36a6de_prof);

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
/*         <br><input class="btn btn-success" type="submit" value="Upload" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
