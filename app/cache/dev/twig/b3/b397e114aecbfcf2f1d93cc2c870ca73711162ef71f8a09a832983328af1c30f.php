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
        $__internal_55de4eb2d6fe9d34a298bafb2c46affbfcad1e939537aa21b94ed93aab6515d6 = $this->env->getExtension("native_profiler");
        $__internal_55de4eb2d6fe9d34a298bafb2c46affbfcad1e939537aa21b94ed93aab6515d6->enter($__internal_55de4eb2d6fe9d34a298bafb2c46affbfcad1e939537aa21b94ed93aab6515d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_55de4eb2d6fe9d34a298bafb2c46affbfcad1e939537aa21b94ed93aab6515d6->leave($__internal_55de4eb2d6fe9d34a298bafb2c46affbfcad1e939537aa21b94ed93aab6515d6_prof);

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
