<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d391e9463f583e20072e9d6eea3c6abff6c59aff212feb234422c98a3221266e extends Twig_Template
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
        $__internal_d651fe0b421ccfa53994c66da8b47ffdda6c98d27298a825302f4e75991379d5 = $this->env->getExtension("native_profiler");
        $__internal_d651fe0b421ccfa53994c66da8b47ffdda6c98d27298a825302f4e75991379d5->enter($__internal_d651fe0b421ccfa53994c66da8b47ffdda6c98d27298a825302f4e75991379d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d651fe0b421ccfa53994c66da8b47ffdda6c98d27298a825302f4e75991379d5->leave($__internal_d651fe0b421ccfa53994c66da8b47ffdda6c98d27298a825302f4e75991379d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
