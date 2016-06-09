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
        $__internal_de0acb81ca4fe2af78995287d8568d87a0772c75055b19d2c486e88e8a4949c8 = $this->env->getExtension("native_profiler");
        $__internal_de0acb81ca4fe2af78995287d8568d87a0772c75055b19d2c486e88e8a4949c8->enter($__internal_de0acb81ca4fe2af78995287d8568d87a0772c75055b19d2c486e88e8a4949c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0acb81ca4fe2af78995287d8568d87a0772c75055b19d2c486e88e8a4949c8->leave($__internal_de0acb81ca4fe2af78995287d8568d87a0772c75055b19d2c486e88e8a4949c8_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_21db16168b624d83adf15700a237f384ac120439c29695b84fca2f131640f6c3 = $this->env->getExtension("native_profiler");
        $__internal_21db16168b624d83adf15700a237f384ac120439c29695b84fca2f131640f6c3->enter($__internal_21db16168b624d83adf15700a237f384ac120439c29695b84fca2f131640f6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_21db16168b624d83adf15700a237f384ac120439c29695b84fca2f131640f6c3->leave($__internal_21db16168b624d83adf15700a237f384ac120439c29695b84fca2f131640f6c3_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_528c9d351fc4902a8d62224b5db3676e12dbbdf38c47c692f6cb999efa21c79a = $this->env->getExtension("native_profiler");
        $__internal_528c9d351fc4902a8d62224b5db3676e12dbbdf38c47c692f6cb999efa21c79a->enter($__internal_528c9d351fc4902a8d62224b5db3676e12dbbdf38c47c692f6cb999efa21c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("assignment_new");
        echo "\" class=\"btn btn-warning\">Create a new Assignment</a>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("course_index");
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
                    <th>Createddate</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assignments"]) ? $context["assignments"] : $this->getContext($context, "assignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submissions_all", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentname", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentdescription", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            if ($this->getAttribute($context["assignment"], "createddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["assignment"], "createddate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 44
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
        // line 50
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_528c9d351fc4902a8d62224b5db3676e12dbbdf38c47c692f6cb999efa21c79a->leave($__internal_528c9d351fc4902a8d62224b5db3676e12dbbdf38c47c692f6cb999efa21c79a_prof);

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
        return array (  139 => 50,  127 => 44,  121 => 41,  112 => 37,  108 => 36,  102 => 35,  98 => 34,  94 => 33,  91 => 32,  87 => 31,  63 => 10,  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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
/*             <a href="{{ path('course_index') }}" class="btn btn-primary">Back</a>*/
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
/*                         <td>{{ assignment.id }}</td>*/
/*                         <td>{{ assignment.assignmentid }}</td>*/
/*                         <td><a href="{{ path('submissions_all', { 'id': assignment.id }) }}">{{ assignment.assignmentname }}</a></td>*/
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
