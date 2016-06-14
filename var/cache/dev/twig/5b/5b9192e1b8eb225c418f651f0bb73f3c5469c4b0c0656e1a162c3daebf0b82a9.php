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
        $__internal_503a4c6856156345cd5dd0d3a899a9fcc89eda2a9f6b9fb769c6a3e8738c32b3 = $this->env->getExtension("native_profiler");
        $__internal_503a4c6856156345cd5dd0d3a899a9fcc89eda2a9f6b9fb769c6a3e8738c32b3->enter($__internal_503a4c6856156345cd5dd0d3a899a9fcc89eda2a9f6b9fb769c6a3e8738c32b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_503a4c6856156345cd5dd0d3a899a9fcc89eda2a9f6b9fb769c6a3e8738c32b3->leave($__internal_503a4c6856156345cd5dd0d3a899a9fcc89eda2a9f6b9fb769c6a3e8738c32b3_prof);

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
