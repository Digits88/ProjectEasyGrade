<?php

/* assignment/show.html.twig */
class __TwigTemplate_947d544a7b242abb495e76d8c165b0c453258cb3049478a768067e3926432f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/show.html.twig", 1);
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
        $__internal_d06af41a5c5c0cb6a7c5569d13edded5e1de28568da0e8c77dab07abd3fb8108 = $this->env->getExtension("native_profiler");
        $__internal_d06af41a5c5c0cb6a7c5569d13edded5e1de28568da0e8c77dab07abd3fb8108->enter($__internal_d06af41a5c5c0cb6a7c5569d13edded5e1de28568da0e8c77dab07abd3fb8108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d06af41a5c5c0cb6a7c5569d13edded5e1de28568da0e8c77dab07abd3fb8108->leave($__internal_d06af41a5c5c0cb6a7c5569d13edded5e1de28568da0e8c77dab07abd3fb8108_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_8e7db6bcd3bc486ae0fc624743eb0d56fa95f910462e6c8d74254cc0d7a2adea = $this->env->getExtension("native_profiler");
        $__internal_8e7db6bcd3bc486ae0fc624743eb0d56fa95f910462e6c8d74254cc0d7a2adea->enter($__internal_8e7db6bcd3bc486ae0fc624743eb0d56fa95f910462e6c8d74254cc0d7a2adea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_8e7db6bcd3bc486ae0fc624743eb0d56fa95f910462e6c8d74254cc0d7a2adea->leave($__internal_8e7db6bcd3bc486ae0fc624743eb0d56fa95f910462e6c8d74254cc0d7a2adea_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_8882b7ffa3cd9a7d8574de004020285ac7c81986a98c175b078b1fb5ff977510 = $this->env->getExtension("native_profiler");
        $__internal_8882b7ffa3cd9a7d8574de004020285ac7c81986a98c175b078b1fb5ff977510->enter($__internal_8882b7ffa3cd9a7d8574de004020285ac7c81986a98c175b078b1fb5ff977510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Assignmentid</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Assignmentname</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Assignmentdescription</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentdescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createddate</th>
                <td>";
        // line 27
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
        // line 34
        echo $this->env->getExtension('routing')->getPath("assignment_index");
        echo "\" class=\"btn btn-warning\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_edit", array("id" => $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
        </li>
        <li>
            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-success\">
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8882b7ffa3cd9a7d8574de004020285ac7c81986a98c175b078b1fb5ff977510->leave($__internal_8882b7ffa3cd9a7d8574de004020285ac7c81986a98c175b078b1fb5ff977510_prof);

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
        return array (  118 => 42,  113 => 40,  107 => 37,  101 => 34,  89 => 27,  82 => 23,  75 => 19,  68 => 15,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
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
/*             <a href="{{ path('assignment_index') }}" class="btn btn-warning">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('assignment_edit', { 'id': assignment.id }) }}" class="btn btn-primary">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete" class="btn btn-success">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
