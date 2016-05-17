<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5fe4230e34d9be338e0340fe33bb81c7522e1a095037ad34495ff742a6b83c45 extends Twig_Template
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
        $__internal_ba9a51e4da45d0b8010b9fb268467cf5b217dfdb3c049a31a47dea9dc34de9dc = $this->env->getExtension("native_profiler");
        $__internal_ba9a51e4da45d0b8010b9fb268467cf5b217dfdb3c049a31a47dea9dc34de9dc->enter($__internal_ba9a51e4da45d0b8010b9fb268467cf5b217dfdb3c049a31a47dea9dc34de9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ba9a51e4da45d0b8010b9fb268467cf5b217dfdb3c049a31a47dea9dc34de9dc->leave($__internal_ba9a51e4da45d0b8010b9fb268467cf5b217dfdb3c049a31a47dea9dc34de9dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
