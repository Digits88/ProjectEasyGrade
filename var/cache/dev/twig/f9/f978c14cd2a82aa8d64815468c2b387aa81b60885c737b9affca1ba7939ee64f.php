<?php

/* user/show.html.twig */
class __TwigTemplate_3e3694ffd006f671e8e4a475e7e1e41093e88d8aec3d94313884b29b9ce4455f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_1255d6540b50878fe7fe97fb0fdf057672324835dc48f5822ec340709af69b3d = $this->env->getExtension("native_profiler");
        $__internal_1255d6540b50878fe7fe97fb0fdf057672324835dc48f5822ec340709af69b3d->enter($__internal_1255d6540b50878fe7fe97fb0fdf057672324835dc48f5822ec340709af69b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1255d6540b50878fe7fe97fb0fdf057672324835dc48f5822ec340709af69b3d->leave($__internal_1255d6540b50878fe7fe97fb0fdf057672324835dc48f5822ec340709af69b3d_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_eda4f29b6e0d54f81b2421de4b8c163cb9d54583ebbc0d98319814ad7d9bdfe3 = $this->env->getExtension("native_profiler");
        $__internal_eda4f29b6e0d54f81b2421de4b8c163cb9d54583ebbc0d98319814ad7d9bdfe3->enter($__internal_eda4f29b6e0d54f81b2421de4b8c163cb9d54583ebbc0d98319814ad7d9bdfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_eda4f29b6e0d54f81b2421de4b8c163cb9d54583ebbc0d98319814ad7d9bdfe3->leave($__internal_eda4f29b6e0d54f81b2421de4b8c163cb9d54583ebbc0d98319814ad7d9bdfe3_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_191bf7365e78480c65ad98e969dd583834e83f2512a099d415d9e6471dbced49 = $this->env->getExtension("native_profiler");
        $__internal_191bf7365e78480c65ad98e969dd583834e83f2512a099d415d9e6471dbced49->enter($__internal_191bf7365e78480c65ad98e969dd583834e83f2512a099d415d9e6471dbced49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_191bf7365e78480c65ad98e969dd583834e83f2512a099d415d9e6471dbced49->leave($__internal_191bf7365e78480c65ad98e969dd583834e83f2512a099d415d9e6471dbced49_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
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
