<?php

/* user/show.html.twig */
class __TwigTemplate_9151a71e4d9e33a40abb48a85d4d3cac1aac9f85897069dfaa924a46b304ab77 extends Twig_Template
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
        $__internal_f64511d5fb36e57d57598167cea9e1a4a6707520fdff68e0ec5e2ce7896f0c11 = $this->env->getExtension("native_profiler");
        $__internal_f64511d5fb36e57d57598167cea9e1a4a6707520fdff68e0ec5e2ce7896f0c11->enter($__internal_f64511d5fb36e57d57598167cea9e1a4a6707520fdff68e0ec5e2ce7896f0c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f64511d5fb36e57d57598167cea9e1a4a6707520fdff68e0ec5e2ce7896f0c11->leave($__internal_f64511d5fb36e57d57598167cea9e1a4a6707520fdff68e0ec5e2ce7896f0c11_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_315ffddb80d90919b43faf56f71b1158ee2975482f4b52186398a3fe9fa63ce2 = $this->env->getExtension("native_profiler");
        $__internal_315ffddb80d90919b43faf56f71b1158ee2975482f4b52186398a3fe9fa63ce2->enter($__internal_315ffddb80d90919b43faf56f71b1158ee2975482f4b52186398a3fe9fa63ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_315ffddb80d90919b43faf56f71b1158ee2975482f4b52186398a3fe9fa63ce2->leave($__internal_315ffddb80d90919b43faf56f71b1158ee2975482f4b52186398a3fe9fa63ce2_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_f20ff03a0bb9e2cf4d408fb0bc79a9840aaa2ac8119c76ab88d5de5ea75577bf = $this->env->getExtension("native_profiler");
        $__internal_f20ff03a0bb9e2cf4d408fb0bc79a9840aaa2ac8119c76ab88d5de5ea75577bf->enter($__internal_f20ff03a0bb9e2cf4d408fb0bc79a9840aaa2ac8119c76ab88d5de5ea75577bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>User</h1>

    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f20ff03a0bb9e2cf4d408fb0bc79a9840aaa2ac8119c76ab88d5de5ea75577bf->leave($__internal_f20ff03a0bb9e2cf4d408fb0bc79a9840aaa2ac8119c76ab88d5de5ea75577bf_prof);

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
        return array (  88 => 26,  83 => 24,  77 => 21,  71 => 18,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <td>{{ user.id }}</td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*             <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail%}*/
/* */
