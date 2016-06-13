<?php

/* :submission:show.html.twig */
class __TwigTemplate_532353dbd354b38715d89ac77da706df8bfbdafa92bfa86c0e9fdeddb3cf3d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":submission:show.html.twig", 1);
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
        $__internal_47154d2642c1f52e45f8a906c576be2ecba7a4680a84589335aebd46031f7412 = $this->env->getExtension("native_profiler");
        $__internal_47154d2642c1f52e45f8a906c576be2ecba7a4680a84589335aebd46031f7412->enter($__internal_47154d2642c1f52e45f8a906c576be2ecba7a4680a84589335aebd46031f7412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":submission:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47154d2642c1f52e45f8a906c576be2ecba7a4680a84589335aebd46031f7412->leave($__internal_47154d2642c1f52e45f8a906c576be2ecba7a4680a84589335aebd46031f7412_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_986e1a1e08d3999dadcb6dc0720d0a53c1d22c5cf1e95398e1f3c5685f668eca = $this->env->getExtension("native_profiler");
        $__internal_986e1a1e08d3999dadcb6dc0720d0a53c1d22c5cf1e95398e1f3c5685f668eca->enter($__internal_986e1a1e08d3999dadcb6dc0720d0a53c1d22c5cf1e95398e1f3c5685f668eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_986e1a1e08d3999dadcb6dc0720d0a53c1d22c5cf1e95398e1f3c5685f668eca->leave($__internal_986e1a1e08d3999dadcb6dc0720d0a53c1d22c5cf1e95398e1f3c5685f668eca_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_8966ef1bc5cc033a91479b20825c1a4761d3c46171dce2704f9f2bce626469b7 = $this->env->getExtension("native_profiler");
        $__internal_8966ef1bc5cc033a91479b20825c1a4761d3c46171dce2704f9f2bce626469b7->enter($__internal_8966ef1bc5cc033a91479b20825c1a4761d3c46171dce2704f9f2bce626469b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagename</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "imageName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 19
        if ($this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_edit", array("id" => $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("submission_new");
        echo "\">New</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8966ef1bc5cc033a91479b20825c1a4761d3c46171dce2704f9f2bce626469b7->leave($__internal_8966ef1bc5cc033a91479b20825c1a4761d3c46171dce2704f9f2bce626469b7_prof);

    }

    public function getTemplateName()
    {
        return ":submission:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  105 => 35,  99 => 32,  93 => 29,  87 => 26,  75 => 19,  68 => 15,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ submission.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imagename</th>*/
/*                 <td>{{ submission.imageName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updatedat</th>*/
/*                 <td>{% if submission.updatedAt %}{{ submission.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('submission_edit', { 'id': submission.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('submission_new') }}">New</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail%}*/
/* */
