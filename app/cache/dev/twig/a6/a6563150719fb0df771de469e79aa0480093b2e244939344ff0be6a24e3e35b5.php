<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b30d10f54dee92ab3e61a8cc58951c040a0f2d3a1e9f42045c8d61aef5a0738f extends Twig_Template
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
        $__internal_b7d30d59c410c73efc8cd37a7ef108b2dffb9346a562ca1b8525e7f5c900c33e = $this->env->getExtension("native_profiler");
        $__internal_b7d30d59c410c73efc8cd37a7ef108b2dffb9346a562ca1b8525e7f5c900c33e->enter($__internal_b7d30d59c410c73efc8cd37a7ef108b2dffb9346a562ca1b8525e7f5c900c33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b7d30d59c410c73efc8cd37a7ef108b2dffb9346a562ca1b8525e7f5c900c33e->leave($__internal_b7d30d59c410c73efc8cd37a7ef108b2dffb9346a562ca1b8525e7f5c900c33e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
