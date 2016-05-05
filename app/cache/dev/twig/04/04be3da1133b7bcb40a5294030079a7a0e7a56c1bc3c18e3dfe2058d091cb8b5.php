<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_41c4e75b7cd42d594cf8208b73c6e694151822b48979c6a1e515d35db76b1186 extends Twig_Template
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
        $__internal_6342c8d7836ee1db45c0c9da18cdfa0cee803621d5c7910675e85480fe47bfb7 = $this->env->getExtension("native_profiler");
        $__internal_6342c8d7836ee1db45c0c9da18cdfa0cee803621d5c7910675e85480fe47bfb7->enter($__internal_6342c8d7836ee1db45c0c9da18cdfa0cee803621d5c7910675e85480fe47bfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6342c8d7836ee1db45c0c9da18cdfa0cee803621d5c7910675e85480fe47bfb7->leave($__internal_6342c8d7836ee1db45c0c9da18cdfa0cee803621d5c7910675e85480fe47bfb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
