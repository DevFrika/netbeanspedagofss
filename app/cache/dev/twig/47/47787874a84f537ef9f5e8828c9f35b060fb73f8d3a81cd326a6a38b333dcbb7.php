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
        $__internal_f1fb22ccb2927c1f3089a12593f0c15471500ff788684e1b82b0a9058e19f09e = $this->env->getExtension("native_profiler");
        $__internal_f1fb22ccb2927c1f3089a12593f0c15471500ff788684e1b82b0a9058e19f09e->enter($__internal_f1fb22ccb2927c1f3089a12593f0c15471500ff788684e1b82b0a9058e19f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f1fb22ccb2927c1f3089a12593f0c15471500ff788684e1b82b0a9058e19f09e->leave($__internal_f1fb22ccb2927c1f3089a12593f0c15471500ff788684e1b82b0a9058e19f09e_prof);

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
