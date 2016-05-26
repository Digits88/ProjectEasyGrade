<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a81f645ad411cd42e9c1512a2814771d0fea3517a26233497010cdce3868ad2a extends Twig_Template
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
        $__internal_95b2785d6da9d54a46bd7c2b4eb3679258c0a4f8b65752a660c96166cab6a3ef = $this->env->getExtension("native_profiler");
        $__internal_95b2785d6da9d54a46bd7c2b4eb3679258c0a4f8b65752a660c96166cab6a3ef->enter($__internal_95b2785d6da9d54a46bd7c2b4eb3679258c0a4f8b65752a660c96166cab6a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_95b2785d6da9d54a46bd7c2b4eb3679258c0a4f8b65752a660c96166cab6a3ef->leave($__internal_95b2785d6da9d54a46bd7c2b4eb3679258c0a4f8b65752a660c96166cab6a3ef_prof);

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
