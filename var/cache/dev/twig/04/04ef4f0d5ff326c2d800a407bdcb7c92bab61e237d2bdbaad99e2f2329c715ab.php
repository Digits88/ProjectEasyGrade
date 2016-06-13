<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3516c04db4eeb347a48e5dae686d4d8d05695d25ab150dcead3c6b4f34863d02 extends Twig_Template
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
        $__internal_8296a98eaaadcdb48db850e1d8367c06548308bf8cde227fe044e1a8146fc98d = $this->env->getExtension("native_profiler");
        $__internal_8296a98eaaadcdb48db850e1d8367c06548308bf8cde227fe044e1a8146fc98d->enter($__internal_8296a98eaaadcdb48db850e1d8367c06548308bf8cde227fe044e1a8146fc98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8296a98eaaadcdb48db850e1d8367c06548308bf8cde227fe044e1a8146fc98d->leave($__internal_8296a98eaaadcdb48db850e1d8367c06548308bf8cde227fe044e1a8146fc98d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
