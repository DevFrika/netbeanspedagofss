<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1632a1666a4644b6b666f959db8a43b3700282bebaa6a703b81c0dcf06401808 extends Twig_Template
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
        $__internal_8d1197318fe7f595b04a076b79e3256615cf5489205ec40f998e572517ae3843 = $this->env->getExtension("native_profiler");
        $__internal_8d1197318fe7f595b04a076b79e3256615cf5489205ec40f998e572517ae3843->enter($__internal_8d1197318fe7f595b04a076b79e3256615cf5489205ec40f998e572517ae3843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8d1197318fe7f595b04a076b79e3256615cf5489205ec40f998e572517ae3843->leave($__internal_8d1197318fe7f595b04a076b79e3256615cf5489205ec40f998e572517ae3843_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
