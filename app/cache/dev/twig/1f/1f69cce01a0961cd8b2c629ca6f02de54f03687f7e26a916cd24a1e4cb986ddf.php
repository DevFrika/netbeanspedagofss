<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9db40ef2dacae9d39cd95da53c72985c21204329f3357badd2b9d6200eccdcc3 extends Twig_Template
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
        $__internal_3dd8d3aa3c161bd7ca9de0c9afc0a46063617e8ff5cae8f002bdeb1b4f5d03a9 = $this->env->getExtension("native_profiler");
        $__internal_3dd8d3aa3c161bd7ca9de0c9afc0a46063617e8ff5cae8f002bdeb1b4f5d03a9->enter($__internal_3dd8d3aa3c161bd7ca9de0c9afc0a46063617e8ff5cae8f002bdeb1b4f5d03a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3dd8d3aa3c161bd7ca9de0c9afc0a46063617e8ff5cae8f002bdeb1b4f5d03a9->leave($__internal_3dd8d3aa3c161bd7ca9de0c9afc0a46063617e8ff5cae8f002bdeb1b4f5d03a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
