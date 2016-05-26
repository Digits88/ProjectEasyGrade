<?php

/* :user:show.html.twig */
class __TwigTemplate_cf219900da62133148ef51124cda89899d30834e0d94948019c047f43586ea87 extends Twig_Template
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
        $__internal_8a0b68d35e8516724ce32d4abdd955ca596feea0fd3d12ac0c4045a9b5a442b6 = $this->env->getExtension("native_profiler");
        $__internal_8a0b68d35e8516724ce32d4abdd955ca596feea0fd3d12ac0c4045a9b5a442b6->enter($__internal_8a0b68d35e8516724ce32d4abdd955ca596feea0fd3d12ac0c4045a9b5a442b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0b68d35e8516724ce32d4abdd955ca596feea0fd3d12ac0c4045a9b5a442b6->leave($__internal_8a0b68d35e8516724ce32d4abdd955ca596feea0fd3d12ac0c4045a9b5a442b6_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_0b0672a19149fec0f6093d116afd25bb6e40769c86901c962192551f060d3f5f = $this->env->getExtension("native_profiler");
        $__internal_0b0672a19149fec0f6093d116afd25bb6e40769c86901c962192551f060d3f5f->enter($__internal_0b0672a19149fec0f6093d116afd25bb6e40769c86901c962192551f060d3f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_0b0672a19149fec0f6093d116afd25bb6e40769c86901c962192551f060d3f5f->leave($__internal_0b0672a19149fec0f6093d116afd25bb6e40769c86901c962192551f060d3f5f_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_626b84963808f6e30db8fa6f535741e4b050e097ad1cd70f7cccbb956a12c36f = $this->env->getExtension("native_profiler");
        $__internal_626b84963808f6e30db8fa6f535741e4b050e097ad1cd70f7cccbb956a12c36f->enter($__internal_626b84963808f6e30db8fa6f535741e4b050e097ad1cd70f7cccbb956a12c36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_626b84963808f6e30db8fa6f535741e4b050e097ad1cd70f7cccbb956a12c36f->leave($__internal_626b84963808f6e30db8fa6f535741e4b050e097ad1cd70f7cccbb956a12c36f_prof);

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
