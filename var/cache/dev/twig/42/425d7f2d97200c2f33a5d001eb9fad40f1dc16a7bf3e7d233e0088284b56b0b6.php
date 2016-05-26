<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b3be009a8434f93dd660158b5e511cee7151a16d2f5f49587ced5cda130becb8 extends Twig_Template
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
        $__internal_fe035be65b34efd3d0100c15145641186acd27891838cebe8322d3f629d0f552 = $this->env->getExtension("native_profiler");
        $__internal_fe035be65b34efd3d0100c15145641186acd27891838cebe8322d3f629d0f552->enter($__internal_fe035be65b34efd3d0100c15145641186acd27891838cebe8322d3f629d0f552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fe035be65b34efd3d0100c15145641186acd27891838cebe8322d3f629d0f552->leave($__internal_fe035be65b34efd3d0100c15145641186acd27891838cebe8322d3f629d0f552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
