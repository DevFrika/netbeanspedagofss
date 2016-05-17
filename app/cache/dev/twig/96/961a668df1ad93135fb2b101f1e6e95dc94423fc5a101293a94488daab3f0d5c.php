<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3cadd8fa5049730770ca85e9ef158d8b7e3f71df15cbffbf452c6a134b4603f2 extends Twig_Template
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
        $__internal_63b97a39dce69964df97c56c01ce0aaf422a9a02bdeac7eb9bb5b5df9165924c = $this->env->getExtension("native_profiler");
        $__internal_63b97a39dce69964df97c56c01ce0aaf422a9a02bdeac7eb9bb5b5df9165924c->enter($__internal_63b97a39dce69964df97c56c01ce0aaf422a9a02bdeac7eb9bb5b5df9165924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_63b97a39dce69964df97c56c01ce0aaf422a9a02bdeac7eb9bb5b5df9165924c->leave($__internal_63b97a39dce69964df97c56c01ce0aaf422a9a02bdeac7eb9bb5b5df9165924c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
