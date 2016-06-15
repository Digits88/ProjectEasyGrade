<?php

/* assignment/index.html.twig */
class __TwigTemplate_bdc0f9ced24b9956aa9877d4b26e68d3c58e7d42656128b3a28ade74a7a86f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/index.html.twig", 1);
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
        $__internal_f9168b2d05fdb2b19a17e42a824577fd25e39da0177018376ccede2a1d0d30d1 = $this->env->getExtension("native_profiler");
        $__internal_f9168b2d05fdb2b19a17e42a824577fd25e39da0177018376ccede2a1d0d30d1->enter($__internal_f9168b2d05fdb2b19a17e42a824577fd25e39da0177018376ccede2a1d0d30d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9168b2d05fdb2b19a17e42a824577fd25e39da0177018376ccede2a1d0d30d1->leave($__internal_f9168b2d05fdb2b19a17e42a824577fd25e39da0177018376ccede2a1d0d30d1_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_9ca40d61f26ed5d8a3f26acb4544a16e5db8a00bb461b81110c656773e82eb3e = $this->env->getExtension("native_profiler");
        $__internal_9ca40d61f26ed5d8a3f26acb4544a16e5db8a00bb461b81110c656773e82eb3e->enter($__internal_9ca40d61f26ed5d8a3f26acb4544a16e5db8a00bb461b81110c656773e82eb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_9ca40d61f26ed5d8a3f26acb4544a16e5db8a00bb461b81110c656773e82eb3e->leave($__internal_9ca40d61f26ed5d8a3f26acb4544a16e5db8a00bb461b81110c656773e82eb3e_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_08f140e98f665a7a09e714bb664333237a6dc49f145b499d45d0980184300944 = $this->env->getExtension("native_profiler");
        $__internal_08f140e98f665a7a09e714bb664333237a6dc49f145b499d45d0980184300944->enter($__internal_08f140e98f665a7a09e714bb664333237a6dc49f145b499d45d0980184300944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_new", array("cid" => (isset($context["cid"]) ? $context["cid"] : $this->getContext($context, "cid")))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Create a new Assignment</a>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back</a>
        </li>
    </ul>

    <!-- Zero Configuration Table -->
    <br><div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Assignment</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Assignmentid</th>
                    <th>Assignmentname</th>
                    <th>Assignmentdescription</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assignments"]) ? $context["assignments"] : $this->getContext($context, "assignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submissions_all", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentname", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentdescription", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_edit", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_08f140e98f665a7a09e714bb664333237a6dc49f145b499d45d0980184300944->leave($__internal_08f140e98f665a7a09e714bb664333237a6dc49f145b499d45d0980184300944_prof);

    }

    public function getTemplateName()
    {
        return "assignment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  120 => 42,  114 => 39,  107 => 35,  101 => 34,  97 => 33,  93 => 32,  90 => 31,  86 => 30,  63 => 10,  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Assignment list</h1>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_new',{ 'cid' : cid }) }}" class="btn btn-warning">Create a new Assignment</a>*/
/*             <a href="{{ path('user_courses') }}" class="btn btn-primary">Back</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <br><div class="panel panel-default">*/
/*         <div class="panel-heading">Your Assignment</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Assignmentid</th>*/
/*                     <th>Assignmentname</th>*/
/*                     <th>Assignmentdescription</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for assignment in assignments %}*/
/*                     <tr>*/
/*                         <td>{{ assignment.id }}</td>*/
/*                         <td>{{ assignment.assignmentid }}</td>*/
/*                         <td><a href="{{ path('submissions_all', { 'id': assignment.id }) }}">{{ assignment.assignmentname }}</a></td>*/
/*                         <td>{{ assignment.assignmentdescription }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('assignment_show', { 'id': assignment.id }) }}">show</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('assignment_edit', { 'id': assignment.id }) }}">edit</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock contentdetail %}*/
/* */
