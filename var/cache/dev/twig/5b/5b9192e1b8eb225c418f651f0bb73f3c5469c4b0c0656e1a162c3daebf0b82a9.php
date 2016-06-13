<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a168d80da0acfb531fcdf9815598082a2e0e6d2eb6126b4db037f84717026afc extends Twig_Template
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
        $__internal_cd2b27d306e2589ce8984f8a972d1f28aecc20ec18ce6bf2acec8a3b18670950 = $this->env->getExtension("native_profiler");
        $__internal_cd2b27d306e2589ce8984f8a972d1f28aecc20ec18ce6bf2acec8a3b18670950->enter($__internal_cd2b27d306e2589ce8984f8a972d1f28aecc20ec18ce6bf2acec8a3b18670950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cd2b27d306e2589ce8984f8a972d1f28aecc20ec18ce6bf2acec8a3b18670950->leave($__internal_cd2b27d306e2589ce8984f8a972d1f28aecc20ec18ce6bf2acec8a3b18670950_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
