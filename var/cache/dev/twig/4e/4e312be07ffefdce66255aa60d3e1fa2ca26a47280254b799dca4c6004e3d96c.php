<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_21d13be8ab6f76d4cf8d1d9b49d8bccafafa2203eb948d672c55438cba3cf44e extends Twig_Template
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
        $__internal_10c825bfac72d375204c37ea0318b3a855bac330f0ecc3277f6200c87fd93090 = $this->env->getExtension("native_profiler");
        $__internal_10c825bfac72d375204c37ea0318b3a855bac330f0ecc3277f6200c87fd93090->enter($__internal_10c825bfac72d375204c37ea0318b3a855bac330f0ecc3277f6200c87fd93090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_10c825bfac72d375204c37ea0318b3a855bac330f0ecc3277f6200c87fd93090->leave($__internal_10c825bfac72d375204c37ea0318b3a855bac330f0ecc3277f6200c87fd93090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
