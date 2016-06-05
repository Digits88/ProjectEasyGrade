<?php

/* assignment/index.html.twig */
class __TwigTemplate_fbc6cac1c36dfea9755f4e7092b55db90f12d12200cb798211ff9bdacb68f3aa extends Twig_Template
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
        $__internal_78fd2f83d922a75519e0f7c6b0d5bbdfd5436ef5269bfc9ef5384683f5e0504d = $this->env->getExtension("native_profiler");
        $__internal_78fd2f83d922a75519e0f7c6b0d5bbdfd5436ef5269bfc9ef5384683f5e0504d->enter($__internal_78fd2f83d922a75519e0f7c6b0d5bbdfd5436ef5269bfc9ef5384683f5e0504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fd2f83d922a75519e0f7c6b0d5bbdfd5436ef5269bfc9ef5384683f5e0504d->leave($__internal_78fd2f83d922a75519e0f7c6b0d5bbdfd5436ef5269bfc9ef5384683f5e0504d_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1f6beda313975a45099e5fab98fccb5aab1b22060866d85ea128155c7fb71409 = $this->env->getExtension("native_profiler");
        $__internal_1f6beda313975a45099e5fab98fccb5aab1b22060866d85ea128155c7fb71409->enter($__internal_1f6beda313975a45099e5fab98fccb5aab1b22060866d85ea128155c7fb71409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_1f6beda313975a45099e5fab98fccb5aab1b22060866d85ea128155c7fb71409->leave($__internal_1f6beda313975a45099e5fab98fccb5aab1b22060866d85ea128155c7fb71409_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_43ecd6221b9c9f53d6996385e61bde92477e922c5a20f77151230763457c22bc = $this->env->getExtension("native_profiler");
        $__internal_43ecd6221b9c9f53d6996385e61bde92477e922c5a20f77151230763457c22bc->enter($__internal_43ecd6221b9c9f53d6996385e61bde92477e922c5a20f77151230763457c22bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("assignment_new");
        echo "\" class=\"btn btn-warning\">Create a new Assignment</a>
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
                    <th>Createddate</th>
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
                        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentname", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentdescription", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            if ($this->getAttribute($context["assignment"], "createddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["assignment"], "createddate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 43
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
        // line 49
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_43ecd6221b9c9f53d6996385e61bde92477e922c5a20f77151230763457c22bc->leave($__internal_43ecd6221b9c9f53d6996385e61bde92477e922c5a20f77151230763457c22bc_prof);

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
        return array (  137 => 49,  125 => 43,  119 => 40,  110 => 36,  106 => 35,  100 => 34,  96 => 33,  90 => 32,  87 => 31,  83 => 30,  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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
/*             <a href="{{ path('assignment_new') }}" class="btn btn-warning">Create a new Assignment</a>*/
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
/*                     <th>Createddate</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for assignment in assignments %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('assignment_show', { 'id': assignment.id }) }}">{{ assignment.id }}</a></td>*/
/*                         <td>{{ assignment.assignmentid }}</td>*/
/*                         <td><a href="{{ path('course_show', { 'id': assignment.id }) }}">{{ assignment.assignmentname }}</a></td>*/
/*                         <td>{{ assignment.assignmentdescription }}</td>*/
/*                         <td>{% if assignment.createddate %}{{ assignment.createddate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
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
