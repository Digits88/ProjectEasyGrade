<?php

/* testcase/show.html.twig */
class __TwigTemplate_3527c59e33c4707336bdbab25dc91b7d9697f43484b36af100d1b7a1e30d830b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testcase/show.html.twig", 1);
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
        $__internal_e1d520bd5db3d33e04d67937dc60b29dbecd37e7c34f5225c57a5c11b63b030e = $this->env->getExtension("native_profiler");
        $__internal_e1d520bd5db3d33e04d67937dc60b29dbecd37e7c34f5225c57a5c11b63b030e->enter($__internal_e1d520bd5db3d33e04d67937dc60b29dbecd37e7c34f5225c57a5c11b63b030e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testcase/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d520bd5db3d33e04d67937dc60b29dbecd37e7c34f5225c57a5c11b63b030e->leave($__internal_e1d520bd5db3d33e04d67937dc60b29dbecd37e7c34f5225c57a5c11b63b030e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bc3351f653e12bfc8769ba46b7010248489105f97b2344ea7c0ee0f9b67a7b4 = $this->env->getExtension("native_profiler");
        $__internal_1bc3351f653e12bfc8769ba46b7010248489105f97b2344ea7c0ee0f9b67a7b4->enter($__internal_1bc3351f653e12bfc8769ba46b7010248489105f97b2344ea7c0ee0f9b67a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1bc3351f653e12bfc8769ba46b7010248489105f97b2344ea7c0ee0f9b67a7b4->leave($__internal_1bc3351f653e12bfc8769ba46b7010248489105f97b2344ea7c0ee0f9b67a7b4_prof);

    }

    public function getTemplateName()
    {
        return "testcase/show.html.twig";
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
