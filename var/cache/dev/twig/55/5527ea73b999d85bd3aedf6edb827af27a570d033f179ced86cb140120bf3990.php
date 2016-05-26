<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_829416360ef5a8501455bdfc0f21ede6e9d2034a1d71b9a2599e8698f4093448 extends Twig_Template
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
        $__internal_898650bf0aa20641c35811438997cb1e7b7f4ac403b68550a175d547bd417743 = $this->env->getExtension("native_profiler");
        $__internal_898650bf0aa20641c35811438997cb1e7b7f4ac403b68550a175d547bd417743->enter($__internal_898650bf0aa20641c35811438997cb1e7b7f4ac403b68550a175d547bd417743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_898650bf0aa20641c35811438997cb1e7b7f4ac403b68550a175d547bd417743->leave($__internal_898650bf0aa20641c35811438997cb1e7b7f4ac403b68550a175d547bd417743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
