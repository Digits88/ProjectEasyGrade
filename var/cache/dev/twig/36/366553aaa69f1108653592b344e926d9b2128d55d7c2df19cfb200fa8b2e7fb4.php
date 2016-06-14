<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9d895f2d367761eb59a1d36b88fb988ada800ce89b6bda4f9b685b233ca59f1a extends Twig_Template
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
        $__internal_64a5470ecfba4d76a68ceb24267b37193ac456e1fafb38b5fdd4a3ecff5c40e3 = $this->env->getExtension("native_profiler");
        $__internal_64a5470ecfba4d76a68ceb24267b37193ac456e1fafb38b5fdd4a3ecff5c40e3->enter($__internal_64a5470ecfba4d76a68ceb24267b37193ac456e1fafb38b5fdd4a3ecff5c40e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64a5470ecfba4d76a68ceb24267b37193ac456e1fafb38b5fdd4a3ecff5c40e3->leave($__internal_64a5470ecfba4d76a68ceb24267b37193ac456e1fafb38b5fdd4a3ecff5c40e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
