<?php

/* submission/index.html.twig */
class __TwigTemplate_d555d86742044ffe6c9949b7f97701478d6a0bbe2d2e51c46f27a43f5c59ffdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/index.html.twig", 1);
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
        $__internal_f820d9519f3d4c198a1c62eb253ea48f73ca9b282c039bc19657e583bd20bf33 = $this->env->getExtension("native_profiler");
        $__internal_f820d9519f3d4c198a1c62eb253ea48f73ca9b282c039bc19657e583bd20bf33->enter($__internal_f820d9519f3d4c198a1c62eb253ea48f73ca9b282c039bc19657e583bd20bf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f820d9519f3d4c198a1c62eb253ea48f73ca9b282c039bc19657e583bd20bf33->leave($__internal_f820d9519f3d4c198a1c62eb253ea48f73ca9b282c039bc19657e583bd20bf33_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_20c129f6644bf88d40317cb83fe2fa8c92852508ce030c548c8c92b0888bc6bd = $this->env->getExtension("native_profiler");
        $__internal_20c129f6644bf88d40317cb83fe2fa8c92852508ce030c548c8c92b0888bc6bd->enter($__internal_20c129f6644bf88d40317cb83fe2fa8c92852508ce030c548c8c92b0888bc6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_20c129f6644bf88d40317cb83fe2fa8c92852508ce030c548c8c92b0888bc6bd->leave($__internal_20c129f6644bf88d40317cb83fe2fa8c92852508ce030c548c8c92b0888bc6bd_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_39bce23aeebcd78a671ad7e3d5a559e32a67e9c6f0814bfd9ea74f25daddc69a = $this->env->getExtension("native_profiler");
        $__internal_39bce23aeebcd78a671ad7e3d5a559e32a67e9c6f0814bfd9ea74f25daddc69a->enter($__internal_39bce23aeebcd78a671ad7e3d5a559e32a67e9c6f0814bfd9ea74f25daddc69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission list</h1>

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Assignment</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Submission</th>
                        <th>Uploaded</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) ? $context["submissions"] : $this->getContext($context, "submissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
            // line 23
            echo "                <tr>
                    <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_show", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "imageName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            if ($this->getAttribute($context["submission"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["submission"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "status", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_show", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_edit", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_grade", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Grade</a>
                            </li>
                        </ul>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
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
        echo $this->env->getExtension('routing')->getPath("submission_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_39bce23aeebcd78a671ad7e3d5a559e32a67e9c6f0814bfd9ea74f25daddc69a->leave($__internal_39bce23aeebcd78a671ad7e3d5a559e32a67e9c6f0814bfd9ea74f25daddc69a_prof);

    }

    public function getTemplateName()
    {
        return "submission/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  126 => 43,  114 => 37,  108 => 34,  102 => 31,  95 => 27,  89 => 26,  85 => 25,  79 => 24,  76 => 23,  72 => 22,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission list</h1>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Assignment</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Submission</th>*/
/*                         <th>Uploaded</th>*/
/*                         <th>Status</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for submission in submissions %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('submission_show', { 'id': submission.id }) }}">{{ submission.id }}</a></td>*/
/*                     <td>{{ submission.imageName }}</td>*/
/*                     <td>{% if submission.updatedAt %}{{ submission.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{{ submission.status }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('submission_show', { 'id': submission.id }) }}" class="btn btn-primary">show</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('submission_edit', { 'id': submission.id }) }}" class="btn btn-primary">edit</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('test_grade', { 'id': submission.id }) }}" class="btn btn-primary">Grade</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
