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
        $__internal_1161f9dc6179a99b366771c88628355cbf33e04e3088e544bfde41bec2b025fe = $this->env->getExtension("native_profiler");
        $__internal_1161f9dc6179a99b366771c88628355cbf33e04e3088e544bfde41bec2b025fe->enter($__internal_1161f9dc6179a99b366771c88628355cbf33e04e3088e544bfde41bec2b025fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1161f9dc6179a99b366771c88628355cbf33e04e3088e544bfde41bec2b025fe->leave($__internal_1161f9dc6179a99b366771c88628355cbf33e04e3088e544bfde41bec2b025fe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3768ebf41f99a593abd0d06a8ba2d4dc434320d5520fabdd8038329115a002d1 = $this->env->getExtension("native_profiler");
        $__internal_3768ebf41f99a593abd0d06a8ba2d4dc434320d5520fabdd8038329115a002d1->enter($__internal_3768ebf41f99a593abd0d06a8ba2d4dc434320d5520fabdd8038329115a002d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Prof
";
        
        $__internal_3768ebf41f99a593abd0d06a8ba2d4dc434320d5520fabdd8038329115a002d1->leave($__internal_3768ebf41f99a593abd0d06a8ba2d4dc434320d5520fabdd8038329115a002d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_df94c064815c426b57aa1169014ea5a545c345599a90a26100bcbe6a0c8fdc1d = $this->env->getExtension("native_profiler");
        $__internal_df94c064815c426b57aa1169014ea5a545c345599a90a26100bcbe6a0c8fdc1d->enter($__internal_df94c064815c426b57aa1169014ea5a545c345599a90a26100bcbe6a0c8fdc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page par prof </h2>

<p>
Page en construction
</p>

";
        
        $__internal_df94c064815c426b57aa1169014ea5a545c345599a90a26100bcbe6a0c8fdc1d->leave($__internal_df94c064815c426b57aa1169014ea5a545c345599a90a26100bcbe6a0c8fdc1d_prof);

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
