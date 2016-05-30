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
        $__internal_3293e12e593a478c6fb713c997644b9e4bee69eaed76f6c46eadd934ffc45183 = $this->env->getExtension("native_profiler");
        $__internal_3293e12e593a478c6fb713c997644b9e4bee69eaed76f6c46eadd934ffc45183->enter($__internal_3293e12e593a478c6fb713c997644b9e4bee69eaed76f6c46eadd934ffc45183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3293e12e593a478c6fb713c997644b9e4bee69eaed76f6c46eadd934ffc45183->leave($__internal_3293e12e593a478c6fb713c997644b9e4bee69eaed76f6c46eadd934ffc45183_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_31fdc5e716d9444921300404bb9b09fb70328255963f35b0a7c016e4df0e0647 = $this->env->getExtension("native_profiler");
        $__internal_31fdc5e716d9444921300404bb9b09fb70328255963f35b0a7c016e4df0e0647->enter($__internal_31fdc5e716d9444921300404bb9b09fb70328255963f35b0a7c016e4df0e0647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_31fdc5e716d9444921300404bb9b09fb70328255963f35b0a7c016e4df0e0647->leave($__internal_31fdc5e716d9444921300404bb9b09fb70328255963f35b0a7c016e4df0e0647_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_918e7d67ef541c199885bd27f79752601d7a41af04d50a0e3e2402367c341dd4 = $this->env->getExtension("native_profiler");
        $__internal_918e7d67ef541c199885bd27f79752601d7a41af04d50a0e3e2402367c341dd4->enter($__internal_918e7d67ef541c199885bd27f79752601d7a41af04d50a0e3e2402367c341dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment list</h1>

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assignments"]) ? $context["assignments"] : $this->getContext($context, "assignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 25
            echo "                    <tr>
                        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentdescription", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            if ($this->getAttribute($context["assignment"], "createddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["assignment"], "createddate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 37
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
        // line 43
        echo "                </tbody>
            </table>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("assignment_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_918e7d67ef541c199885bd27f79752601d7a41af04d50a0e3e2402367c341dd4->leave($__internal_918e7d67ef541c199885bd27f79752601d7a41af04d50a0e3e2402367c341dd4_prof);

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
        return array (  135 => 50,  126 => 43,  114 => 37,  108 => 34,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  81 => 26,  78 => 25,  74 => 24,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Assignment list</h1>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
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
/*                         <td>{{ assignment.assignmentname }}</td>*/
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
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
