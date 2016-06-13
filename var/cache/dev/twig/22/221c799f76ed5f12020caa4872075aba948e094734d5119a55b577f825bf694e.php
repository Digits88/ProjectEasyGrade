<?php

/* :assignment:show.html.twig */
class __TwigTemplate_11496dccc2cac2adf12868e65efc2cbceb217150750fa8982838d623c8cd7858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assignment:show.html.twig", 1);
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
        $__internal_21bf47d491bce7a83f096c033b68278b3601d5d46c77efed9d8b9ce6f33b7cd4 = $this->env->getExtension("native_profiler");
        $__internal_21bf47d491bce7a83f096c033b68278b3601d5d46c77efed9d8b9ce6f33b7cd4->enter($__internal_21bf47d491bce7a83f096c033b68278b3601d5d46c77efed9d8b9ce6f33b7cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assignment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21bf47d491bce7a83f096c033b68278b3601d5d46c77efed9d8b9ce6f33b7cd4->leave($__internal_21bf47d491bce7a83f096c033b68278b3601d5d46c77efed9d8b9ce6f33b7cd4_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_737a9deff0af14147f08531bfa287d27950e126429d693a40996a6a45bf0ff3d = $this->env->getExtension("native_profiler");
        $__internal_737a9deff0af14147f08531bfa287d27950e126429d693a40996a6a45bf0ff3d->enter($__internal_737a9deff0af14147f08531bfa287d27950e126429d693a40996a6a45bf0ff3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_737a9deff0af14147f08531bfa287d27950e126429d693a40996a6a45bf0ff3d->leave($__internal_737a9deff0af14147f08531bfa287d27950e126429d693a40996a6a45bf0ff3d_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_a855d36b8731cfcbfdf72df25e757a7237691eebf25e69ebc70b6a647a5a023a = $this->env->getExtension("native_profiler");
        $__internal_a855d36b8731cfcbfdf72df25e757a7237691eebf25e69ebc70b6a647a5a023a->enter($__internal_a855d36b8731cfcbfdf72df25e757a7237691eebf25e69ebc70b6a647a5a023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_a855d36b8731cfcbfdf72df25e757a7237691eebf25e69ebc70b6a647a5a023a->leave($__internal_a855d36b8731cfcbfdf72df25e757a7237691eebf25e69ebc70b6a647a5a023a_prof);

    }

    public function getTemplateName()
    {
        return ":assignment:show.html.twig";
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
