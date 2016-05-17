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
        $__internal_abca9721481318050430d9477f0673834ee8e216876391388c2a39fe53279657 = $this->env->getExtension("native_profiler");
        $__internal_abca9721481318050430d9477f0673834ee8e216876391388c2a39fe53279657->enter($__internal_abca9721481318050430d9477f0673834ee8e216876391388c2a39fe53279657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abca9721481318050430d9477f0673834ee8e216876391388c2a39fe53279657->leave($__internal_abca9721481318050430d9477f0673834ee8e216876391388c2a39fe53279657_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ab96cb211a12827e17aea1f010a50693b4040c200b1bc90b88e71baba7e44ee = $this->env->getExtension("native_profiler");
        $__internal_3ab96cb211a12827e17aea1f010a50693b4040c200b1bc90b88e71baba7e44ee->enter($__internal_3ab96cb211a12827e17aea1f010a50693b4040c200b1bc90b88e71baba7e44ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Prof
";
        
        $__internal_3ab96cb211a12827e17aea1f010a50693b4040c200b1bc90b88e71baba7e44ee->leave($__internal_3ab96cb211a12827e17aea1f010a50693b4040c200b1bc90b88e71baba7e44ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f081702b72c60c0ea57f3b02e93e1d7203cc86818a962c40502ff75e8d6cd3c = $this->env->getExtension("native_profiler");
        $__internal_5f081702b72c60c0ea57f3b02e93e1d7203cc86818a962c40502ff75e8d6cd3c->enter($__internal_5f081702b72c60c0ea57f3b02e93e1d7203cc86818a962c40502ff75e8d6cd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page par prof </h2>

<p>
Page en construction
</p>

";
        
        $__internal_5f081702b72c60c0ea57f3b02e93e1d7203cc86818a962c40502ff75e8d6cd3c->leave($__internal_5f081702b72c60c0ea57f3b02e93e1d7203cc86818a962c40502ff75e8d6cd3c_prof);

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
