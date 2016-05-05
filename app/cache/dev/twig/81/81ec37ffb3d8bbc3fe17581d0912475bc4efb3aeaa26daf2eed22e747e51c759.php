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
        $__internal_1f997e7569383b8659dbd8a36850f62148d0975990117178005fd6c61b5f967c = $this->env->getExtension("native_profiler");
        $__internal_1f997e7569383b8659dbd8a36850f62148d0975990117178005fd6c61b5f967c->enter($__internal_1f997e7569383b8659dbd8a36850f62148d0975990117178005fd6c61b5f967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f997e7569383b8659dbd8a36850f62148d0975990117178005fd6c61b5f967c->leave($__internal_1f997e7569383b8659dbd8a36850f62148d0975990117178005fd6c61b5f967c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba6653bb9437cc5018764416761965ad0781e89e9432c636a7d71d2c955f4180 = $this->env->getExtension("native_profiler");
        $__internal_ba6653bb9437cc5018764416761965ad0781e89e9432c636a7d71d2c955f4180->enter($__internal_ba6653bb9437cc5018764416761965ad0781e89e9432c636a7d71d2c955f4180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Prof
";
        
        $__internal_ba6653bb9437cc5018764416761965ad0781e89e9432c636a7d71d2c955f4180->leave($__internal_ba6653bb9437cc5018764416761965ad0781e89e9432c636a7d71d2c955f4180_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7400a6dbbeb7fff9427211521e45a3fa752b0ead21a204107cd4e8f66d5da2af = $this->env->getExtension("native_profiler");
        $__internal_7400a6dbbeb7fff9427211521e45a3fa752b0ead21a204107cd4e8f66d5da2af->enter($__internal_7400a6dbbeb7fff9427211521e45a3fa752b0ead21a204107cd4e8f66d5da2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page par prof </h2>

<p>
Page en construction
</p>

";
        
        $__internal_7400a6dbbeb7fff9427211521e45a3fa752b0ead21a204107cd4e8f66d5da2af->leave($__internal_7400a6dbbeb7fff9427211521e45a3fa752b0ead21a204107cd4e8f66d5da2af_prof);

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
