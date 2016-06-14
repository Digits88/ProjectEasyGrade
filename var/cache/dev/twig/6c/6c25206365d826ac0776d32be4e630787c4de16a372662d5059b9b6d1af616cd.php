<?php

/* :testcase:show.html.twig */
class __TwigTemplate_edf561cc9e1b8d7b2f2c1a51081f4428a07b1d3a01e14dffa7dc94f4e7c97791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":testcase:show.html.twig", 1);
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
        $__internal_0a51ab8257ec16388154cec09a8d77fd27f77d348f90d886f6d157ae2b3ff25f = $this->env->getExtension("native_profiler");
        $__internal_0a51ab8257ec16388154cec09a8d77fd27f77d348f90d886f6d157ae2b3ff25f->enter($__internal_0a51ab8257ec16388154cec09a8d77fd27f77d348f90d886f6d157ae2b3ff25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":testcase:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a51ab8257ec16388154cec09a8d77fd27f77d348f90d886f6d157ae2b3ff25f->leave($__internal_0a51ab8257ec16388154cec09a8d77fd27f77d348f90d886f6d157ae2b3ff25f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35ea7b7d53dbccece9ca378afa250dd8e85e4dbb462c7095b287cbfaffdd8daa = $this->env->getExtension("native_profiler");
        $__internal_35ea7b7d53dbccece9ca378afa250dd8e85e4dbb462c7095b287cbfaffdd8daa->enter($__internal_35ea7b7d53dbccece9ca378afa250dd8e85e4dbb462c7095b287cbfaffdd8daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TestCase</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testCase"]) ? $context["testCase"] : $this->getContext($context, "testCase")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagename</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testCase"]) ? $context["testCase"] : $this->getContext($context, "testCase")), "imageName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["testCase"]) ? $context["testCase"] : $this->getContext($context, "testCase")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["testCase"]) ? $context["testCase"] : $this->getContext($context, "testCase")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("testcase_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testcase_edit", array("id" => $this->getAttribute((isset($context["testCase"]) ? $context["testCase"] : $this->getContext($context, "testCase")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_35ea7b7d53dbccece9ca378afa250dd8e85e4dbb462c7095b287cbfaffdd8daa->leave($__internal_35ea7b7d53dbccece9ca378afa250dd8e85e4dbb462c7095b287cbfaffdd8daa_prof);

    }

    public function getTemplateName()
    {
        return ":testcase:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TestCase</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ testCase.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imagename</th>*/
/*                 <td>{{ testCase.imageName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updatedat</th>*/
/*                 <td>{% if testCase.updatedAt %}{{ testCase.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('testcase_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('testcase_edit', { 'id': testCase.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
