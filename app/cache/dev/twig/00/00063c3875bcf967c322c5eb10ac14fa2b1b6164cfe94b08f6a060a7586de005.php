<?php

/* PedagoFssUserBundle:Default:prof.html.twig */
class __TwigTemplate_1afe8b601f44fa3c0aa3fa79b2c87607fe82bf73e17437335ac505b7e582b419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:prof.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f516153e6f19ffcf67c11a8b8e981858d71360c1a73502cb868943139101247 = $this->env->getExtension("native_profiler");
        $__internal_8f516153e6f19ffcf67c11a8b8e981858d71360c1a73502cb868943139101247->enter($__internal_8f516153e6f19ffcf67c11a8b8e981858d71360c1a73502cb868943139101247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f516153e6f19ffcf67c11a8b8e981858d71360c1a73502cb868943139101247->leave($__internal_8f516153e6f19ffcf67c11a8b8e981858d71360c1a73502cb868943139101247_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_07a81ec6e8e07b57f241c2da548fc01122d47488b6a5dfd48864774416d0ff88 = $this->env->getExtension("native_profiler");
        $__internal_07a81ec6e8e07b57f241c2da548fc01122d47488b6a5dfd48864774416d0ff88->enter($__internal_07a81ec6e8e07b57f241c2da548fc01122d47488b6a5dfd48864774416d0ff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Prof
";
        
        $__internal_07a81ec6e8e07b57f241c2da548fc01122d47488b6a5dfd48864774416d0ff88->leave($__internal_07a81ec6e8e07b57f241c2da548fc01122d47488b6a5dfd48864774416d0ff88_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d20778a111557aa1e8672774e92ca0772c922c129ffcf7dd8719d587328626ad = $this->env->getExtension("native_profiler");
        $__internal_d20778a111557aa1e8672774e92ca0772c922c129ffcf7dd8719d587328626ad->enter($__internal_d20778a111557aa1e8672774e92ca0772c922c129ffcf7dd8719d587328626ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page par prof </h2>

<p>
Page en construction
</p>

";
        
        $__internal_d20778a111557aa1e8672774e92ca0772c922c129ffcf7dd8719d587328626ad->leave($__internal_d20778a111557aa1e8672774e92ca0772c922c129ffcf7dd8719d587328626ad_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur - Prof*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page par prof </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
