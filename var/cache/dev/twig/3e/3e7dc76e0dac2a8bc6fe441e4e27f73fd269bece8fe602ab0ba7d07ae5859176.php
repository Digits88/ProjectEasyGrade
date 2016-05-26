<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7ad6574a1a64da8e12bc12130207f744c3fa417c7f8aed7c34fed74e1a539e19 extends Twig_Template
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
        $__internal_443e9a6ae8d8373d733fd5be7d9df182ac7ee85ac61ff3f23681aa222e109b4b = $this->env->getExtension("native_profiler");
        $__internal_443e9a6ae8d8373d733fd5be7d9df182ac7ee85ac61ff3f23681aa222e109b4b->enter($__internal_443e9a6ae8d8373d733fd5be7d9df182ac7ee85ac61ff3f23681aa222e109b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_443e9a6ae8d8373d733fd5be7d9df182ac7ee85ac61ff3f23681aa222e109b4b->leave($__internal_443e9a6ae8d8373d733fd5be7d9df182ac7ee85ac61ff3f23681aa222e109b4b_prof);

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
