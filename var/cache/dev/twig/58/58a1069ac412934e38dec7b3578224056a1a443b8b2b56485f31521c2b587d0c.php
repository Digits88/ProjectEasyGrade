<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5f85fe833c5f1eeffa882b197441a9f80d9cea54b43f64f3e1cde18ef26de71b extends Twig_Template
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
        $__internal_fe011ad7a0f09e77f0c768bbe02c13e641e954b29483ccea7d674d1bce38c499 = $this->env->getExtension("native_profiler");
        $__internal_fe011ad7a0f09e77f0c768bbe02c13e641e954b29483ccea7d674d1bce38c499->enter($__internal_fe011ad7a0f09e77f0c768bbe02c13e641e954b29483ccea7d674d1bce38c499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fe011ad7a0f09e77f0c768bbe02c13e641e954b29483ccea7d674d1bce38c499->leave($__internal_fe011ad7a0f09e77f0c768bbe02c13e641e954b29483ccea7d674d1bce38c499_prof);

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
