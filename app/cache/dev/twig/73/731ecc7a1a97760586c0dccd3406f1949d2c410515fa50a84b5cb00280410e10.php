<?php

/* base.html.twig */
class __TwigTemplate_2340e5c52efe88ace1931307ef40cdbf7b3ede3497f02470409dae6eb907e695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cabe835dd6c1758492d4fb9c0b18ba733f2ce0c9aeaed2765a62cc4eb7295707 = $this->env->getExtension("native_profiler");
        $__internal_cabe835dd6c1758492d4fb9c0b18ba733f2ce0c9aeaed2765a62cc4eb7295707->enter($__internal_cabe835dd6c1758492d4fb9c0b18ba733f2ce0c9aeaed2765a62cc4eb7295707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cabe835dd6c1758492d4fb9c0b18ba733f2ce0c9aeaed2765a62cc4eb7295707->leave($__internal_cabe835dd6c1758492d4fb9c0b18ba733f2ce0c9aeaed2765a62cc4eb7295707_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30e84330fb6ea8716574d71b547fbe9313ec2951e3411655002a910e3faaf39c = $this->env->getExtension("native_profiler");
        $__internal_30e84330fb6ea8716574d71b547fbe9313ec2951e3411655002a910e3faaf39c->enter($__internal_30e84330fb6ea8716574d71b547fbe9313ec2951e3411655002a910e3faaf39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30e84330fb6ea8716574d71b547fbe9313ec2951e3411655002a910e3faaf39c->leave($__internal_30e84330fb6ea8716574d71b547fbe9313ec2951e3411655002a910e3faaf39c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e1aecf50f2d9a8ebc57511f5f2249217c8cc785f8060a8255e024fd581246a2 = $this->env->getExtension("native_profiler");
        $__internal_4e1aecf50f2d9a8ebc57511f5f2249217c8cc785f8060a8255e024fd581246a2->enter($__internal_4e1aecf50f2d9a8ebc57511f5f2249217c8cc785f8060a8255e024fd581246a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e1aecf50f2d9a8ebc57511f5f2249217c8cc785f8060a8255e024fd581246a2->leave($__internal_4e1aecf50f2d9a8ebc57511f5f2249217c8cc785f8060a8255e024fd581246a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e8b9e2e89d0a8ca8d60c205c98845cf165277c22f64e15c86eef538bf74669c = $this->env->getExtension("native_profiler");
        $__internal_2e8b9e2e89d0a8ca8d60c205c98845cf165277c22f64e15c86eef538bf74669c->enter($__internal_2e8b9e2e89d0a8ca8d60c205c98845cf165277c22f64e15c86eef538bf74669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e8b9e2e89d0a8ca8d60c205c98845cf165277c22f64e15c86eef538bf74669c->leave($__internal_2e8b9e2e89d0a8ca8d60c205c98845cf165277c22f64e15c86eef538bf74669c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e8af1241bed46f1fc05713917a13782229b9453636465090543de1fc0c722af = $this->env->getExtension("native_profiler");
        $__internal_8e8af1241bed46f1fc05713917a13782229b9453636465090543de1fc0c722af->enter($__internal_8e8af1241bed46f1fc05713917a13782229b9453636465090543de1fc0c722af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8e8af1241bed46f1fc05713917a13782229b9453636465090543de1fc0c722af->leave($__internal_8e8af1241bed46f1fc05713917a13782229b9453636465090543de1fc0c722af_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
