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
        $__internal_c2aa581e12512d587fd15c7e6f34ff4feaa46cef93575bf7303ae74d8f290102 = $this->env->getExtension("native_profiler");
        $__internal_c2aa581e12512d587fd15c7e6f34ff4feaa46cef93575bf7303ae74d8f290102->enter($__internal_c2aa581e12512d587fd15c7e6f34ff4feaa46cef93575bf7303ae74d8f290102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c2aa581e12512d587fd15c7e6f34ff4feaa46cef93575bf7303ae74d8f290102->leave($__internal_c2aa581e12512d587fd15c7e6f34ff4feaa46cef93575bf7303ae74d8f290102_prof);

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
