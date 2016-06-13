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
        $__internal_892805be6019a08352994354e7dfa63db2d215dd2a183bec84747dd1b0c9b8e1 = $this->env->getExtension("native_profiler");
        $__internal_892805be6019a08352994354e7dfa63db2d215dd2a183bec84747dd1b0c9b8e1->enter($__internal_892805be6019a08352994354e7dfa63db2d215dd2a183bec84747dd1b0c9b8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_892805be6019a08352994354e7dfa63db2d215dd2a183bec84747dd1b0c9b8e1->leave($__internal_892805be6019a08352994354e7dfa63db2d215dd2a183bec84747dd1b0c9b8e1_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_ab2586d1d4fba00b4c1803aa8f95e32215ba1c3743a58e3e7339f0e7bb426043 = $this->env->getExtension("native_profiler");
        $__internal_ab2586d1d4fba00b4c1803aa8f95e32215ba1c3743a58e3e7339f0e7bb426043->enter($__internal_ab2586d1d4fba00b4c1803aa8f95e32215ba1c3743a58e3e7339f0e7bb426043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_ab2586d1d4fba00b4c1803aa8f95e32215ba1c3743a58e3e7339f0e7bb426043->leave($__internal_ab2586d1d4fba00b4c1803aa8f95e32215ba1c3743a58e3e7339f0e7bb426043_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_d16fb5720ebc8029f2422720d904fd2644db29c842ae611aab3ed03b458ff5cb = $this->env->getExtension("native_profiler");
        $__internal_d16fb5720ebc8029f2422720d904fd2644db29c842ae611aab3ed03b458ff5cb->enter($__internal_d16fb5720ebc8029f2422720d904fd2644db29c842ae611aab3ed03b458ff5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d16fb5720ebc8029f2422720d904fd2644db29c842ae611aab3ed03b458ff5cb->leave($__internal_d16fb5720ebc8029f2422720d904fd2644db29c842ae611aab3ed03b458ff5cb_prof);

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
/*             <br><a href="{{ path('submission_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
