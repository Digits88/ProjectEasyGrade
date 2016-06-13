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
        $__internal_93d7b5588923314698e6cff716bccff73da3927a7e3fe3fe44dae473b070a2e7 = $this->env->getExtension("native_profiler");
        $__internal_93d7b5588923314698e6cff716bccff73da3927a7e3fe3fe44dae473b070a2e7->enter($__internal_93d7b5588923314698e6cff716bccff73da3927a7e3fe3fe44dae473b070a2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_93d7b5588923314698e6cff716bccff73da3927a7e3fe3fe44dae473b070a2e7->leave($__internal_93d7b5588923314698e6cff716bccff73da3927a7e3fe3fe44dae473b070a2e7_prof);

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
