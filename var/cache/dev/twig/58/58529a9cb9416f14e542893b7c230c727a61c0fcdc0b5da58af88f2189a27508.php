<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_716019148b240bfe76e7e16bba8971a727de6ac0ce9cd1e23fd487894a95f6b5 extends Twig_Template
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
        $__internal_1a173c87b2ee8f087cc0c88acac3feb38a7ace74b19f743fcb632d25c43b2d62 = $this->env->getExtension("native_profiler");
        $__internal_1a173c87b2ee8f087cc0c88acac3feb38a7ace74b19f743fcb632d25c43b2d62->enter($__internal_1a173c87b2ee8f087cc0c88acac3feb38a7ace74b19f743fcb632d25c43b2d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1a173c87b2ee8f087cc0c88acac3feb38a7ace74b19f743fcb632d25c43b2d62->leave($__internal_1a173c87b2ee8f087cc0c88acac3feb38a7ace74b19f743fcb632d25c43b2d62_prof);

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
