<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0c950ac583288da0cb11bc7594f7c55bcc01201bfb5a4fc5764071effbc33677 extends Twig_Template
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
        $__internal_0eeb9e3ae06f6512cd1b295954aab75068af96bcc303c02f78e9c35c65336684 = $this->env->getExtension("native_profiler");
        $__internal_0eeb9e3ae06f6512cd1b295954aab75068af96bcc303c02f78e9c35c65336684->enter($__internal_0eeb9e3ae06f6512cd1b295954aab75068af96bcc303c02f78e9c35c65336684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0eeb9e3ae06f6512cd1b295954aab75068af96bcc303c02f78e9c35c65336684->leave($__internal_0eeb9e3ae06f6512cd1b295954aab75068af96bcc303c02f78e9c35c65336684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
