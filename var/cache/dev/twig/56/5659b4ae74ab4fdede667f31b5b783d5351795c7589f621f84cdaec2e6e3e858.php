<?php

/* submission/show.html.twig */
class __TwigTemplate_3569b9deeebceb1f2241a0989558109862d090d29d740008a646afa64c7004c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/show.html.twig", 1);
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
        $__internal_23767a75f7d5c97f2f87fbcbdd48cb43ee6603d38a4b9a0177f2657b10761e5c = $this->env->getExtension("native_profiler");
        $__internal_23767a75f7d5c97f2f87fbcbdd48cb43ee6603d38a4b9a0177f2657b10761e5c->enter($__internal_23767a75f7d5c97f2f87fbcbdd48cb43ee6603d38a4b9a0177f2657b10761e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23767a75f7d5c97f2f87fbcbdd48cb43ee6603d38a4b9a0177f2657b10761e5c->leave($__internal_23767a75f7d5c97f2f87fbcbdd48cb43ee6603d38a4b9a0177f2657b10761e5c_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_b4cc32d46361defde381a52cf263ce58277fe72170331c96dcf464d4ba687599 = $this->env->getExtension("native_profiler");
        $__internal_b4cc32d46361defde381a52cf263ce58277fe72170331c96dcf464d4ba687599->enter($__internal_b4cc32d46361defde381a52cf263ce58277fe72170331c96dcf464d4ba687599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_b4cc32d46361defde381a52cf263ce58277fe72170331c96dcf464d4ba687599->leave($__internal_b4cc32d46361defde381a52cf263ce58277fe72170331c96dcf464d4ba687599_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_d1ddc9e1aaa0b137e2eb72a6282bfa40cc2b7be250428725fb1e656b903283d0 = $this->env->getExtension("native_profiler");
        $__internal_d1ddc9e1aaa0b137e2eb72a6282bfa40cc2b7be250428725fb1e656b903283d0->enter($__internal_d1ddc9e1aaa0b137e2eb72a6282bfa40cc2b7be250428725fb1e656b903283d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission</h1>

<!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Submissions</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>File Name</th>
                    <th>Uploaded at</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Execution Status</th>
                    <th>Output</th>
                    <th>Marks</th>
                    <th>Memory</th>
                    <th>Time</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "imageName", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 31
        if ($this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "imageName", array()), "html", null, true);
        echo "</td>
                        <td><button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal\">View Code</button></td>
                        <td>
                            ";
        // line 35
        if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 15)) {
            echo "Successful
                            ";
        } elseif (($this->getAttribute(        // line 36
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 11)) {
            echo "Compilation Error
                            ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 12)) {
            echo "Runtime Error
                            ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 13)) {
            echo "Time Limit Exceeded
                            ";
        } elseif (($this->getAttribute(        // line 39
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 17)) {
            echo "Memory Limit Exceeded
                            ";
        } elseif (($this->getAttribute(        // line 40
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 19)) {
            echo "Illegal System Call
                            ";
        } elseif (($this->getAttribute(        // line 41
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 20)) {
            echo "Internal Error
                            ";
        } elseif (($this->getAttribute(        // line 42
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 20)) {
            echo "Internal Error
                            ";
        } else {
            // line 43
            echo "Not Yet Executed
                            ";
        }
        // line 45
        echo "

                        </td>
                        <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "output", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "submissionmarks", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "memory", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "time", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
        <li>
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\" class=\"btn btn-warning\">
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>


    <!-- Modal -->
    <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modal Header</h4>
                </div>
                <div class=\"modal-body\">
                    <p>code should go here</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_d1ddc9e1aaa0b137e2eb72a6282bfa40cc2b7be250428725fb1e656b903283d0->leave($__internal_d1ddc9e1aaa0b137e2eb72a6282bfa40cc2b7be250428725fb1e656b903283d0_prof);

    }

    public function getTemplateName()
    {
        return "submission/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 67,  173 => 65,  167 => 62,  153 => 51,  149 => 50,  145 => 49,  141 => 48,  136 => 45,  132 => 43,  127 => 42,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  93 => 32,  87 => 31,  83 => 30,  79 => 29,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission</h1>*/
/* */
/* <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Submissions</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>File Name</th>*/
/*                     <th>Uploaded at</th>*/
/*                     <th>Code</th>*/
/*                     <th>Status</th>*/
/*                     <th>Execution Status</th>*/
/*                     <th>Output</th>*/
/*                     <th>Marks</th>*/
/*                     <th>Memory</th>*/
/*                     <th>Time</th>*/
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td>{{ submission.id }}</td>*/
/*                         <td>{{ submission.imageName }}</td>*/
/*                         <td>{% if submission.updatedAt %}{{ submission.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>{{ submission.imageName }}</td>*/
/*                         <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">View Code</button></td>*/
/*                         <td>*/
/*                             {% if submission.result == 15 %}Successful*/
/*                             {% elseif submission.result == 11 %}Compilation Error*/
/*                             {% elseif submission.result == 12 %}Runtime Error*/
/*                             {% elseif submission.result == 13 %}Time Limit Exceeded*/
/*                             {% elseif submission.result == 17 %}Memory Limit Exceeded*/
/*                             {% elseif submission.result == 19 %}Illegal System Call*/
/*                             {% elseif submission.result == 20 %}Internal Error*/
/*                             {% elseif submission.result == 20 %}Internal Error*/
/*                             {% else %}Not Yet Executed*/
/*                             {% endif %}*/
/* */
/* */
/*                         </td>*/
/*                         <td>{{ submission.output }}</td>*/
/*                         <td>{{ submission.submissionmarks }}</td>*/
/*                         <td>{{ submission.memory }}</td>*/
/*                         <td>{{ submission.time }}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*             <input type="submit" value="Delete" class="btn btn-warning">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/*     <!-- Modal -->*/
/*     <div id="myModal" class="modal fade" role="dialog">*/
/*         <div class="modal-dialog">*/
/* */
/*             <!-- Modal content-->*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                     <h4 class="modal-title">Modal Header</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p>code should go here</p>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock contentdetail%}*/
/* */
/* */
/* */
