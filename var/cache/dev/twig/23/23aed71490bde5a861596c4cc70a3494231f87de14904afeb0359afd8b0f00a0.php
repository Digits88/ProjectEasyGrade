<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_99a36b422a6781d26e121a22bc29e679569518e23d796cd0f0b841c8a0329540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b4e3fed2217af36bb331a8761255cecf2f3b68c5ef35ad28be758c5e306fa6 = $this->env->getExtension("native_profiler");
        $__internal_b9b4e3fed2217af36bb331a8761255cecf2f3b68c5ef35ad28be758c5e306fa6->enter($__internal_b9b4e3fed2217af36bb331a8761255cecf2f3b68c5ef35ad28be758c5e306fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b4e3fed2217af36bb331a8761255cecf2f3b68c5ef35ad28be758c5e306fa6->leave($__internal_b9b4e3fed2217af36bb331a8761255cecf2f3b68c5ef35ad28be758c5e306fa6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e264950570a97d712ec2fa592f0b547582e96d76a8d307de9a79cc9e055344be = $this->env->getExtension("native_profiler");
        $__internal_e264950570a97d712ec2fa592f0b547582e96d76a8d307de9a79cc9e055344be->enter($__internal_e264950570a97d712ec2fa592f0b547582e96d76a8d307de9a79cc9e055344be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_e264950570a97d712ec2fa592f0b547582e96d76a8d307de9a79cc9e055344be->leave($__internal_e264950570a97d712ec2fa592f0b547582e96d76a8d307de9a79cc9e055344be_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc474d00ba2d02864334d1f1c64eccc48481cb5719d4b4189ff1d4dd80ba4624 = $this->env->getExtension("native_profiler");
        $__internal_dc474d00ba2d02864334d1f1c64eccc48481cb5719d4b4189ff1d4dd80ba4624->enter($__internal_dc474d00ba2d02864334d1f1c64eccc48481cb5719d4b4189ff1d4dd80ba4624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"login-page bk-img\">
        <div class=\"form-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-md-offset-3\">
                        <h1 class=\"text-center text-bold text-light mt-4x\">Sign in to easyGrade</h1>
                        <div class=\"well row pt-2x pb-3x bk-light\">
                            <div class=\"col-md-8 col-md-offset-2\">

                                ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 18
        echo "
                                <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" class=\"mt\" method=\"post\">

                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                    <label for=\"username\" class=\"text-uppercase text-sm\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"text\"  id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Username\" class=\"form-control mb\">

                                    <label for=\"password\" class=\"text-uppercase text-sm\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"form-control mb\">

                                    <div class=\"checkbox checkbox-circle checkbox-info\">
                                        <input type=\"checkbox\" checked id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                        <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    </div>

                                    <!--button class=\"btn btn-primary btn-block\" type=\"submit\">LOGIN</button-->
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                                </form>
                            </div>
                        </div>
                        <div class=\"text-center text-light\">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_dc474d00ba2d02864334d1f1c64eccc48481cb5719d4b4189ff1d4dd80ba4624->leave($__internal_dc474d00ba2d02864334d1f1c64eccc48481cb5719d4b4189ff1d4dd80ba4624_prof);

    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c50786b7a420aaadd93f5c3468cbc1a8e1697e4446e392d95441d6866c016f4 = $this->env->getExtension("native_profiler");
        $__internal_8c50786b7a420aaadd93f5c3468cbc1a8e1697e4446e392d95441d6866c016f4->enter($__internal_8c50786b7a420aaadd93f5c3468cbc1a8e1697e4446e392d95441d6866c016f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 53
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8c50786b7a420aaadd93f5c3468cbc1a8e1697e4446e392d95441d6866c016f4->leave($__internal_8c50786b7a420aaadd93f5c3468cbc1a8e1697e4446e392d95441d6866c016f4_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef429d5077e8f131a9d44e90c35d6b6f61f7a769e5b96788a463eaecb04b9a49 = $this->env->getExtension("native_profiler");
        $__internal_ef429d5077e8f131a9d44e90c35d6b6f61f7a769e5b96788a463eaecb04b9a49->enter($__internal_ef429d5077e8f131a9d44e90c35d6b6f61f7a769e5b96788a463eaecb04b9a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_ef429d5077e8f131a9d44e90c35d6b6f61f7a769e5b96788a463eaecb04b9a49->leave($__internal_ef429d5077e8f131a9d44e90c35d6b6f61f7a769e5b96788a463eaecb04b9a49_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 57,  150 => 56,  140 => 53,  134 => 52,  111 => 35,  104 => 31,  96 => 26,  91 => 24,  87 => 23,  82 => 21,  77 => 19,  74 => 18,  68 => 16,  66 => 15,  55 => 6,  49 => 5,  37 => 3,  11 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="login-page bk-img">*/
/*         <div class="form-content">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-md-offset-3">*/
/*                         <h1 class="text-center text-bold text-light mt-4x">Sign in to easyGrade</h1>*/
/*                         <div class="well row pt-2x pb-3x bk-light">*/
/*                             <div class="col-md-8 col-md-offset-2">*/
/* */
/*                                 {% if error %}*/
/*                                     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 <form action="{{ path("fos_user_security_check") }}" class="mt" method="post">*/
/* */
/*                                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                                     <label for="username" class="text-uppercase text-sm">{{ 'security.login.username'|trans }}</label>*/
/*                                     <input type="text"  id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Username" class="form-control mb">*/
/* */
/*                                     <label for="password" class="text-uppercase text-sm">{{ 'security.login.password'|trans }}</label>*/
/*                                     <input type="password" id="password" name="_password" required="required" placeholder="Password" class="form-control mb">*/
/* */
/*                                     <div class="checkbox checkbox-circle checkbox-info">*/
/*                                         <input type="checkbox" checked id="remember_me" name="_remember_me" value="on">*/
/*                                         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                                     </div>*/
/* */
/*                                     <!--button class="btn btn-primary btn-block" type="submit">LOGIN</button-->*/
/*                                     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* */
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="text-center text-light">*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
