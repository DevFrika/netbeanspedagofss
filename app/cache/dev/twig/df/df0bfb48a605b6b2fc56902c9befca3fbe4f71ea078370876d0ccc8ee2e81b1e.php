<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a4d8f4f27779dae3e0c295b103777a052f2d4a6fcdb946774e869148cb7b3481 extends Twig_Template
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
        $__internal_e6e61ce3ed8094a612effa7d39426cd86d91b3d4394795cdd7610a141626339f = $this->env->getExtension("native_profiler");
        $__internal_e6e61ce3ed8094a612effa7d39426cd86d91b3d4394795cdd7610a141626339f->enter($__internal_e6e61ce3ed8094a612effa7d39426cd86d91b3d4394795cdd7610a141626339f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e6e61ce3ed8094a612effa7d39426cd86d91b3d4394795cdd7610a141626339f->leave($__internal_e6e61ce3ed8094a612effa7d39426cd86d91b3d4394795cdd7610a141626339f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
