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
        $__internal_11f9ce2068cd46031a2aa51e45e5dabd16e945ceafd6f785ae3384bfc76aeb72 = $this->env->getExtension("native_profiler");
        $__internal_11f9ce2068cd46031a2aa51e45e5dabd16e945ceafd6f785ae3384bfc76aeb72->enter($__internal_11f9ce2068cd46031a2aa51e45e5dabd16e945ceafd6f785ae3384bfc76aeb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_11f9ce2068cd46031a2aa51e45e5dabd16e945ceafd6f785ae3384bfc76aeb72->leave($__internal_11f9ce2068cd46031a2aa51e45e5dabd16e945ceafd6f785ae3384bfc76aeb72_prof);

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
