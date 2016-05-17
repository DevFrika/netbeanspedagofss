<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_77c10331981628cde61c014e3cdb1f90c282c15d63f4f8a4fc970f8a18e03371 extends Twig_Template
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
        $__internal_2ee3ea54a704c93cd0a2ecf8ff4a51da51ccec422d0dd587d4766dcd4933c65d = $this->env->getExtension("native_profiler");
        $__internal_2ee3ea54a704c93cd0a2ecf8ff4a51da51ccec422d0dd587d4766dcd4933c65d->enter($__internal_2ee3ea54a704c93cd0a2ecf8ff4a51da51ccec422d0dd587d4766dcd4933c65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2ee3ea54a704c93cd0a2ecf8ff4a51da51ccec422d0dd587d4766dcd4933c65d->leave($__internal_2ee3ea54a704c93cd0a2ecf8ff4a51da51ccec422d0dd587d4766dcd4933c65d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
