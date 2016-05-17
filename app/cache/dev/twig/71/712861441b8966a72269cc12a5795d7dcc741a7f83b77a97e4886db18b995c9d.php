<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4a78fb9470ba384e12a00edf29c12fe4b76b66ae61d3552668455f97c3fca482 extends Twig_Template
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
        $__internal_9ed719222f443630b86bc7215515586aae73935678891ee8dc438cfbb8c35313 = $this->env->getExtension("native_profiler");
        $__internal_9ed719222f443630b86bc7215515586aae73935678891ee8dc438cfbb8c35313->enter($__internal_9ed719222f443630b86bc7215515586aae73935678891ee8dc438cfbb8c35313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9ed719222f443630b86bc7215515586aae73935678891ee8dc438cfbb8c35313->leave($__internal_9ed719222f443630b86bc7215515586aae73935678891ee8dc438cfbb8c35313_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
