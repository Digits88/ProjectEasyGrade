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
        $__internal_e25f4d2822db5a65ebd9843f9a3f9866f681015ce8d44c1c0dfedefe4ee656e2 = $this->env->getExtension("native_profiler");
        $__internal_e25f4d2822db5a65ebd9843f9a3f9866f681015ce8d44c1c0dfedefe4ee656e2->enter($__internal_e25f4d2822db5a65ebd9843f9a3f9866f681015ce8d44c1c0dfedefe4ee656e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e25f4d2822db5a65ebd9843f9a3f9866f681015ce8d44c1c0dfedefe4ee656e2->leave($__internal_e25f4d2822db5a65ebd9843f9a3f9866f681015ce8d44c1c0dfedefe4ee656e2_prof);

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
