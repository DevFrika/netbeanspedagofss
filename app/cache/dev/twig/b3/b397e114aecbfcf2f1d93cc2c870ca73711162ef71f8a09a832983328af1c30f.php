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
        $__internal_b7e92fad6b5368537ecaae8a70f52d385152e764c86790e48e558dc258432a41 = $this->env->getExtension("native_profiler");
        $__internal_b7e92fad6b5368537ecaae8a70f52d385152e764c86790e48e558dc258432a41->enter($__internal_b7e92fad6b5368537ecaae8a70f52d385152e764c86790e48e558dc258432a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b7e92fad6b5368537ecaae8a70f52d385152e764c86790e48e558dc258432a41->leave($__internal_b7e92fad6b5368537ecaae8a70f52d385152e764c86790e48e558dc258432a41_prof);

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
