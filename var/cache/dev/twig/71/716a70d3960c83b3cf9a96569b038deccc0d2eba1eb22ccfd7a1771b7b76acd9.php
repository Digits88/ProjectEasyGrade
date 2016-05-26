<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0d982d16abf9353f733c9735b956d66d7e53f90b47c90e2fa0b4d11b56c270b7 extends Twig_Template
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
        $__internal_44a80ad83c97ae55cda68e172962c6ffbb50c2de0d514201ca964c5811a8fa17 = $this->env->getExtension("native_profiler");
        $__internal_44a80ad83c97ae55cda68e172962c6ffbb50c2de0d514201ca964c5811a8fa17->enter($__internal_44a80ad83c97ae55cda68e172962c6ffbb50c2de0d514201ca964c5811a8fa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_44a80ad83c97ae55cda68e172962c6ffbb50c2de0d514201ca964c5811a8fa17->leave($__internal_44a80ad83c97ae55cda68e172962c6ffbb50c2de0d514201ca964c5811a8fa17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
