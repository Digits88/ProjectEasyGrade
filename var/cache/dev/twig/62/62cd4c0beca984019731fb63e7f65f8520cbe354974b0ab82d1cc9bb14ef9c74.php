<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6a47abadb60b1df528642447e00e4a13c42bc0600839ee0d03f0a7a16e9ec47a extends Twig_Template
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
        $__internal_0575684fd93c96ca1c49f23f1ef09d4319486e86d46f098fade8e1ada82c85de = $this->env->getExtension("native_profiler");
        $__internal_0575684fd93c96ca1c49f23f1ef09d4319486e86d46f098fade8e1ada82c85de->enter($__internal_0575684fd93c96ca1c49f23f1ef09d4319486e86d46f098fade8e1ada82c85de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0575684fd93c96ca1c49f23f1ef09d4319486e86d46f098fade8e1ada82c85de->leave($__internal_0575684fd93c96ca1c49f23f1ef09d4319486e86d46f098fade8e1ada82c85de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
