<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_71fe8ce5f48bc39edeb950981ba51489208d6914a584df7c4357b5a924e2bec3 extends Twig_Template
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
        $__internal_209acb7c8f1ee4dbd50e6eea124c11a18517093d58aedfb9e62cb57bba94d2b7 = $this->env->getExtension("native_profiler");
        $__internal_209acb7c8f1ee4dbd50e6eea124c11a18517093d58aedfb9e62cb57bba94d2b7->enter($__internal_209acb7c8f1ee4dbd50e6eea124c11a18517093d58aedfb9e62cb57bba94d2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_209acb7c8f1ee4dbd50e6eea124c11a18517093d58aedfb9e62cb57bba94d2b7->leave($__internal_209acb7c8f1ee4dbd50e6eea124c11a18517093d58aedfb9e62cb57bba94d2b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
