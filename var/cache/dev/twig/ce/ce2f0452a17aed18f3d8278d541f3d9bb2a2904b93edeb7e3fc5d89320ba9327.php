<?php

/* :user:show.html.twig */
class __TwigTemplate_d8b0332790a8ffd9d5f8bf7ebf4bb25e5d88621866fa98836f38bcb631b51969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_8eece1d4eeb442070b3130e70f6fd82b8661bd289b17c005ae876b1a486a87fd = $this->env->getExtension("native_profiler");
        $__internal_8eece1d4eeb442070b3130e70f6fd82b8661bd289b17c005ae876b1a486a87fd->enter($__internal_8eece1d4eeb442070b3130e70f6fd82b8661bd289b17c005ae876b1a486a87fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eece1d4eeb442070b3130e70f6fd82b8661bd289b17c005ae876b1a486a87fd->leave($__internal_8eece1d4eeb442070b3130e70f6fd82b8661bd289b17c005ae876b1a486a87fd_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_a577b7a42c36d2bbd5082200bab7d00ff46c70b53f12995a961048b2e614e886 = $this->env->getExtension("native_profiler");
        $__internal_a577b7a42c36d2bbd5082200bab7d00ff46c70b53f12995a961048b2e614e886->enter($__internal_a577b7a42c36d2bbd5082200bab7d00ff46c70b53f12995a961048b2e614e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_a577b7a42c36d2bbd5082200bab7d00ff46c70b53f12995a961048b2e614e886->leave($__internal_a577b7a42c36d2bbd5082200bab7d00ff46c70b53f12995a961048b2e614e886_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_5cf1e4dce26a543bffbe18547566b2b7f18e7a31a4acfd3fd561dd3065853d43 = $this->env->getExtension("native_profiler");
        $__internal_5cf1e4dce26a543bffbe18547566b2b7f18e7a31a4acfd3fd561dd3065853d43->enter($__internal_5cf1e4dce26a543bffbe18547566b2b7f18e7a31a4acfd3fd561dd3065853d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>User</h1>

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Courses</div>
        <div class=\"panel-body\">


            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
                        <td>

                            <ul>
                                <li>
                                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\"class=\"btn btn-primary\">Back to the list</a>
                                    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Edit</a>
                                    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                    <input type=\"submit\" value=\"Delete\" class=\"btn btn-warning\">
                                    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                </li>
                            </ul>

                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>





";
        
        $__internal_5cf1e4dce26a543bffbe18547566b2b7f18e7a31a4acfd3fd561dd3065853d43->leave($__internal_5cf1e4dce26a543bffbe18547566b2b7f18e7a31a4acfd3fd561dd3065853d43_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  104 => 36,  100 => 35,  96 => 34,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User</h1>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Courses</div>*/
/*         <div class="panel-body">*/
/* */
/* */
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Username</th>*/
/*                     <th>Email</th>*/
/*                     <th>Password</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td>{{ user.id }}</td>*/
/*                         <td>{{ user.username }}</td>*/
/*                         <td>{{ user.email }}</td>*/
/*                         <td>{{ user.password }}</td>*/
/*                         <td>*/
/* */
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_index') }}"class="btn btn-primary">Back to the list</a>*/
/*                                     <a href="{{ path('user_edit', { 'id': user.id }) }}" class="btn btn-success">Edit</a>*/
/*                                     {{ form_start(delete_form) }}*/
/*                                     <input type="submit" value="Delete" class="btn btn-warning">*/
/*                                     {{ form_end(delete_form) }}*/
/*                                 </li>*/
/*                             </ul>*/
/* */
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock contentdetail%}*/
/* */
