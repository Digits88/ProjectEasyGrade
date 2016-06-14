<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_33be10aafcae81b71a54c9a928a4b2334c210d9c9faeeab21a85d709be5ea4d6 extends Twig_Template
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
        $__internal_46716864ed9790222be7215d1f75646d99407d01ce79c3aa9a274275d6093885 = $this->env->getExtension("native_profiler");
        $__internal_46716864ed9790222be7215d1f75646d99407d01ce79c3aa9a274275d6093885->enter($__internal_46716864ed9790222be7215d1f75646d99407d01ce79c3aa9a274275d6093885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_46716864ed9790222be7215d1f75646d99407d01ce79c3aa9a274275d6093885->leave($__internal_46716864ed9790222be7215d1f75646d99407d01ce79c3aa9a274275d6093885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
