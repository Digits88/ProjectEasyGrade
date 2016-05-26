<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_82b6a1fb172e7b09ebda4816913b43a0ea2e0dd1a4dfb27d4880a5c1436b1d2d extends Twig_Template
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
        $__internal_3a0a4a21d2cdc7bff2486ce677dbd60ceb237bdc839f6910fe0ffe1598537ee4 = $this->env->getExtension("native_profiler");
        $__internal_3a0a4a21d2cdc7bff2486ce677dbd60ceb237bdc839f6910fe0ffe1598537ee4->enter($__internal_3a0a4a21d2cdc7bff2486ce677dbd60ceb237bdc839f6910fe0ffe1598537ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3a0a4a21d2cdc7bff2486ce677dbd60ceb237bdc839f6910fe0ffe1598537ee4->leave($__internal_3a0a4a21d2cdc7bff2486ce677dbd60ceb237bdc839f6910fe0ffe1598537ee4_prof);

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
