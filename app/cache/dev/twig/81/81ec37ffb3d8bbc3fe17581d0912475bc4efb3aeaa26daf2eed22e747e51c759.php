<?php

/* @PedagoFssUser/Default/prof.html.twig */
class __TwigTemplate_0bf82aa4bebc8db150b895d2da7efd5ff7513b4adcbed8ba9dabe6bdd14fda30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/prof.html.twig", 1);
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
        $__internal_f45ab75ba83d1206aee9eee97b11aacd86c532c24fc74fe4341df3ae75e23841 = $this->env->getExtension("native_profiler");
        $__internal_f45ab75ba83d1206aee9eee97b11aacd86c532c24fc74fe4341df3ae75e23841->enter($__internal_f45ab75ba83d1206aee9eee97b11aacd86c532c24fc74fe4341df3ae75e23841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45ab75ba83d1206aee9eee97b11aacd86c532c24fc74fe4341df3ae75e23841->leave($__internal_f45ab75ba83d1206aee9eee97b11aacd86c532c24fc74fe4341df3ae75e23841_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fcbaca9a024897a9ca88c20d29a40a6c17ec382be7c2273ea6d6d7937c0957a = $this->env->getExtension("native_profiler");
        $__internal_3fcbaca9a024897a9ca88c20d29a40a6c17ec382be7c2273ea6d6d7937c0957a->enter($__internal_3fcbaca9a024897a9ca88c20d29a40a6c17ec382be7c2273ea6d6d7937c0957a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Prof
";
        
        $__internal_3fcbaca9a024897a9ca88c20d29a40a6c17ec382be7c2273ea6d6d7937c0957a->leave($__internal_3fcbaca9a024897a9ca88c20d29a40a6c17ec382be7c2273ea6d6d7937c0957a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcf6628ce47a5636eabd8eceed689ff0545e9aae903ba3645902d6c5eb8edae3 = $this->env->getExtension("native_profiler");
        $__internal_bcf6628ce47a5636eabd8eceed689ff0545e9aae903ba3645902d6c5eb8edae3->enter($__internal_bcf6628ce47a5636eabd8eceed689ff0545e9aae903ba3645902d6c5eb8edae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page par prof </h2>

<p>
Page en construction
</p>

";
        
        $__internal_bcf6628ce47a5636eabd8eceed689ff0545e9aae903ba3645902d6c5eb8edae3->leave($__internal_bcf6628ce47a5636eabd8eceed689ff0545e9aae903ba3645902d6c5eb8edae3_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/prof.html.twig";
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
