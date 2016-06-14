<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b5fedb981eb97dc08ff8c3fad75f25483c26d1eb27b813a4017f52a47beec47f extends Twig_Template
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
        $__internal_c8c2901770627317bd20bc4527df0412716ce78e9f2d8a400d1e87ead7ba4331 = $this->env->getExtension("native_profiler");
        $__internal_c8c2901770627317bd20bc4527df0412716ce78e9f2d8a400d1e87ead7ba4331->enter($__internal_c8c2901770627317bd20bc4527df0412716ce78e9f2d8a400d1e87ead7ba4331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c8c2901770627317bd20bc4527df0412716ce78e9f2d8a400d1e87ead7ba4331->leave($__internal_c8c2901770627317bd20bc4527df0412716ce78e9f2d8a400d1e87ead7ba4331_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
