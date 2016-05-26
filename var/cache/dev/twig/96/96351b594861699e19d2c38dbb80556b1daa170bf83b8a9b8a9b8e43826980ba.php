<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3144efa26f23c1c90075af5aeb8692587e063437d0ec06f03aed45ae7832fe29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_567d7e44fb94ee7f7db775a8963e1a5f24e6a1b48776ac1a417fa166792cb876 = $this->env->getExtension("native_profiler");
        $__internal_567d7e44fb94ee7f7db775a8963e1a5f24e6a1b48776ac1a417fa166792cb876->enter($__internal_567d7e44fb94ee7f7db775a8963e1a5f24e6a1b48776ac1a417fa166792cb876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_567d7e44fb94ee7f7db775a8963e1a5f24e6a1b48776ac1a417fa166792cb876->leave($__internal_567d7e44fb94ee7f7db775a8963e1a5f24e6a1b48776ac1a417fa166792cb876_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
