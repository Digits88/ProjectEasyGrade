<?php

/* assignment/show.html.twig */
class __TwigTemplate_353e813dfd7fd3bb780a54876729fb495f12bbcb996cc50695df71405d09daa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/show.html.twig", 1);
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
        $__internal_e6a37ca2c6b9861b03a4fe40473a601c39720925ce43351bcde5e36444c9f52d = $this->env->getExtension("native_profiler");
        $__internal_e6a37ca2c6b9861b03a4fe40473a601c39720925ce43351bcde5e36444c9f52d->enter($__internal_e6a37ca2c6b9861b03a4fe40473a601c39720925ce43351bcde5e36444c9f52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6a37ca2c6b9861b03a4fe40473a601c39720925ce43351bcde5e36444c9f52d->leave($__internal_e6a37ca2c6b9861b03a4fe40473a601c39720925ce43351bcde5e36444c9f52d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_489c2fe9a420550e918d668413294af1c07dc747aec9ea6d29062ebf924d9cef = $this->env->getExtension("native_profiler");
        $__internal_489c2fe9a420550e918d668413294af1c07dc747aec9ea6d29062ebf924d9cef->enter($__internal_489c2fe9a420550e918d668413294af1c07dc747aec9ea6d29062ebf924d9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Assignment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Assignmentid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Assignmentname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Assignmentdescription</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentdescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createddate</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "createddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "createddate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("assignment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_edit", array("id" => $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_489c2fe9a420550e918d668413294af1c07dc747aec9ea6d29062ebf924d9cef->leave($__internal_489c2fe9a420550e918d668413294af1c07dc747aec9ea6d29062ebf924d9cef_prof);

    }

    public function getTemplateName()
    {
        return "assignment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  100 => 39,  94 => 36,  88 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Assignment</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ assignment.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Assignmentid</th>*/
/*                 <td>{{ assignment.assignmentid }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Assignmentname</th>*/
/*                 <td>{{ assignment.assignmentname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Assignmentdescription</th>*/
/*                 <td>{{ assignment.assignmentdescription }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createddate</th>*/
/*                 <td>{% if assignment.createddate %}{{ assignment.createddate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('assignment_edit', { 'id': assignment.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
