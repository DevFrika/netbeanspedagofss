<?php

/* @FssWebsiteDepartement/Default/profindexdep.html.twig */
class __TwigTemplate_3cb03432614dcce712ad6a7a1de1e819420b79ccafb6da989eb42ffc2e96eee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/profindexdep.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FssWebsiteDepartementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c18ac6255fb76d0769f2f50c50d2a700c7d852ef06d16548114794614e18d3 = $this->env->getExtension("native_profiler");
        $__internal_a0c18ac6255fb76d0769f2f50c50d2a700c7d852ef06d16548114794614e18d3->enter($__internal_a0c18ac6255fb76d0769f2f50c50d2a700c7d852ef06d16548114794614e18d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/profindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c18ac6255fb76d0769f2f50c50d2a700c7d852ef06d16548114794614e18d3->leave($__internal_a0c18ac6255fb76d0769f2f50c50d2a700c7d852ef06d16548114794614e18d3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f5cf0ddfaae9790b0afa3e3344002be37e2e078dc67d3c2743a81c8262f104b = $this->env->getExtension("native_profiler");
        $__internal_2f5cf0ddfaae9790b0afa3e3344002be37e2e078dc67d3c2743a81c8262f104b->enter($__internal_2f5cf0ddfaae9790b0afa3e3344002be37e2e078dc67d3c2743a81c8262f104b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_2f5cf0ddfaae9790b0afa3e3344002be37e2e078dc67d3c2743a81c8262f104b->leave($__internal_2f5cf0ddfaae9790b0afa3e3344002be37e2e078dc67d3c2743a81c8262f104b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e30197c7130d839abd455063dfcfe9a565ec9d78d9769e075b55a24e1f469722 = $this->env->getExtension("native_profiler");
        $__internal_e30197c7130d839abd455063dfcfe9a565ec9d78d9769e075b55a24e1f469722->enter($__internal_e30197c7130d839abd455063dfcfe9a565ec9d78d9769e075b55a24e1f469722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque prof - Page en construction </h2>

       



";
        
        $__internal_e30197c7130d839abd455063dfcfe9a565ec9d78d9769e075b55a24e1f469722->leave($__internal_e30197c7130d839abd455063dfcfe9a565ec9d78d9769e075b55a24e1f469722_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/profindexdep.html.twig";
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
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Normale*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/* */
/* <h2>Departement - Page quelconque prof - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
