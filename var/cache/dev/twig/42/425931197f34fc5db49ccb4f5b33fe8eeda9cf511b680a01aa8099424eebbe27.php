<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ea6cbe8af9be544024599d56527fa7b5365ba5f6ddaf9655f63aa43117e99c98 extends Twig_Template
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
        $__internal_7e635a4beb1b2f5d92051429f90a28db45d80fcc43035d051dd80889840a8e74 = $this->env->getExtension("native_profiler");
        $__internal_7e635a4beb1b2f5d92051429f90a28db45d80fcc43035d051dd80889840a8e74->enter($__internal_7e635a4beb1b2f5d92051429f90a28db45d80fcc43035d051dd80889840a8e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7e635a4beb1b2f5d92051429f90a28db45d80fcc43035d051dd80889840a8e74->leave($__internal_7e635a4beb1b2f5d92051429f90a28db45d80fcc43035d051dd80889840a8e74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
