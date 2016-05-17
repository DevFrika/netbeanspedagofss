<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7f4ef924ec036cfcd82ef32d566799bbfbdfe8650b7ea0ea996b354359ec3336 extends Twig_Template
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
        $__internal_9ec5de1f9d9d75a0f7c5cfc8b5e6a7eb2639b903788a2a55a503cda8d617210a = $this->env->getExtension("native_profiler");
        $__internal_9ec5de1f9d9d75a0f7c5cfc8b5e6a7eb2639b903788a2a55a503cda8d617210a->enter($__internal_9ec5de1f9d9d75a0f7c5cfc8b5e6a7eb2639b903788a2a55a503cda8d617210a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9ec5de1f9d9d75a0f7c5cfc8b5e6a7eb2639b903788a2a55a503cda8d617210a->leave($__internal_9ec5de1f9d9d75a0f7c5cfc8b5e6a7eb2639b903788a2a55a503cda8d617210a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
