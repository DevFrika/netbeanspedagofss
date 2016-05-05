<?php

/* @PedagoFssUser/Default/etudiant.html.twig */
class __TwigTemplate_61e85163c98265d5ec7484904659f9cd39c9d595a2f7ff963b96875721fa90bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/etudiant.html.twig", 1);
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
        $__internal_d0972e14e2ab0f108df462aeba9e0a9d5667528de37d1009d97751c6340c1fca = $this->env->getExtension("native_profiler");
        $__internal_d0972e14e2ab0f108df462aeba9e0a9d5667528de37d1009d97751c6340c1fca->enter($__internal_d0972e14e2ab0f108df462aeba9e0a9d5667528de37d1009d97751c6340c1fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0972e14e2ab0f108df462aeba9e0a9d5667528de37d1009d97751c6340c1fca->leave($__internal_d0972e14e2ab0f108df462aeba9e0a9d5667528de37d1009d97751c6340c1fca_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9112d789feea25671a2bba89d99baa839cceea9ad72b0357315bc841d3a5acb = $this->env->getExtension("native_profiler");
        $__internal_f9112d789feea25671a2bba89d99baa839cceea9ad72b0357315bc841d3a5acb->enter($__internal_f9112d789feea25671a2bba89d99baa839cceea9ad72b0357315bc841d3a5acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Etudiant
";
        
        $__internal_f9112d789feea25671a2bba89d99baa839cceea9ad72b0357315bc841d3a5acb->leave($__internal_f9112d789feea25671a2bba89d99baa839cceea9ad72b0357315bc841d3a5acb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_491f28456e6b107f10cc73b3f6673d73953a6696e2cd234b8ba4e5bb2582a4ca = $this->env->getExtension("native_profiler");
        $__internal_491f28456e6b107f10cc73b3f6673d73953a6696e2cd234b8ba4e5bb2582a4ca->enter($__internal_491f28456e6b107f10cc73b3f6673d73953a6696e2cd234b8ba4e5bb2582a4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Etudiant </h2>

<p>
Page en construction
</p>

";
        
        $__internal_491f28456e6b107f10cc73b3f6673d73953a6696e2cd234b8ba4e5bb2582a4ca->leave($__internal_491f28456e6b107f10cc73b3f6673d73953a6696e2cd234b8ba4e5bb2582a4ca_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/etudiant.html.twig";
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
/* Utilisateur - Etudiant*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Etudiant </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
