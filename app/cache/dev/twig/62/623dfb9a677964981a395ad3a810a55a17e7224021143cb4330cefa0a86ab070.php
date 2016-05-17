<?php

/* @PedagoFssUser/Default/index.html.twig */
class __TwigTemplate_ae31db69e9adea88b7172eeb69ebb35c3aae78ba58f512641a6f511c1e5cdeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/index.html.twig", 1);
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
        $__internal_d5b2c9870b56d3cf7cb7077384d4e62056be971f584f6c5c9ed603bbd2592e1d = $this->env->getExtension("native_profiler");
        $__internal_d5b2c9870b56d3cf7cb7077384d4e62056be971f584f6c5c9ed603bbd2592e1d->enter($__internal_d5b2c9870b56d3cf7cb7077384d4e62056be971f584f6c5c9ed603bbd2592e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b2c9870b56d3cf7cb7077384d4e62056be971f584f6c5c9ed603bbd2592e1d->leave($__internal_d5b2c9870b56d3cf7cb7077384d4e62056be971f584f6c5c9ed603bbd2592e1d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e53bbd9bf5870bea55703a975395940300c449bd6c86ba180098a18f0f182c6b = $this->env->getExtension("native_profiler");
        $__internal_e53bbd9bf5870bea55703a975395940300c449bd6c86ba180098a18f0f182c6b->enter($__internal_e53bbd9bf5870bea55703a975395940300c449bd6c86ba180098a18f0f182c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur 
";
        
        $__internal_e53bbd9bf5870bea55703a975395940300c449bd6c86ba180098a18f0f182c6b->leave($__internal_e53bbd9bf5870bea55703a975395940300c449bd6c86ba180098a18f0f182c6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7110ed62a7ca43daf3c0d59a155ae9289d0a769ed4489c6d42edc300a154fb18 = $this->env->getExtension("native_profiler");
        $__internal_7110ed62a7ca43daf3c0d59a155ae9289d0a769ed4489c6d42edc300a154fb18->enter($__internal_7110ed62a7ca43daf3c0d59a155ae9289d0a769ed4489c6d42edc300a154fb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Normale </h2>

<p>
Page en construction
</p>

";
        
        $__internal_7110ed62a7ca43daf3c0d59a155ae9289d0a769ed4489c6d42edc300a154fb18->leave($__internal_7110ed62a7ca43daf3c0d59a155ae9289d0a769ed4489c6d42edc300a154fb18_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/index.html.twig";
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
/* Utilisateur */
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Normale </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
