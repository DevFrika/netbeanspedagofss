<?php

/* PedagoFssUserBundle:Default:signin.html.twig */
class __TwigTemplate_bca49d9b69b97a983bdd2b29c78bd8503f144b8d4e6395fe66e417c515018299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:signin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'modals' => array($this, 'block_modals'),
            'buttonsignin' => array($this, 'block_buttonsignin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cde050ca6c5f859256cfa7787106366ad120748b6950a9e5c970f32b38c0abc = $this->env->getExtension("native_profiler");
        $__internal_2cde050ca6c5f859256cfa7787106366ad120748b6950a9e5c970f32b38c0abc->enter($__internal_2cde050ca6c5f859256cfa7787106366ad120748b6950a9e5c970f32b38c0abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cde050ca6c5f859256cfa7787106366ad120748b6950a9e5c970f32b38c0abc->leave($__internal_2cde050ca6c5f859256cfa7787106366ad120748b6950a9e5c970f32b38c0abc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_058f9fee60f0a9fb48aef26ea2f359a64de34f460c816359923ac44e4d1bf1af = $this->env->getExtension("native_profiler");
        $__internal_058f9fee60f0a9fb48aef26ea2f359a64de34f460c816359923ac44e4d1bf1af->enter($__internal_058f9fee60f0a9fb48aef26ea2f359a64de34f460c816359923ac44e4d1bf1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('modals', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('buttonsignin', $context, $blocks);
        // line 10
        echo "
<h2>Inscription</h2>

";
        // line 13
        $this->loadTemplate("::layout_signinform.html.twig", "PedagoFssUserBundle:Default:signin.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_058f9fee60f0a9fb48aef26ea2f359a64de34f460c816359923ac44e4d1bf1af->leave($__internal_058f9fee60f0a9fb48aef26ea2f359a64de34f460c816359923ac44e4d1bf1af_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_0e69800217d3b1307cf3f6e00587b06d9e37a229e71dcb8d4acf35ab885cd4db = $this->env->getExtension("native_profiler");
        $__internal_0e69800217d3b1307cf3f6e00587b06d9e37a229e71dcb8d4acf35ab885cd4db->enter($__internal_0e69800217d3b1307cf3f6e00587b06d9e37a229e71dcb8d4acf35ab885cd4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_loginmodal.html.twig", "PedagoFssUserBundle:Default:signin.html.twig", 5)->display($context);
        
        $__internal_0e69800217d3b1307cf3f6e00587b06d9e37a229e71dcb8d4acf35ab885cd4db->leave($__internal_0e69800217d3b1307cf3f6e00587b06d9e37a229e71dcb8d4acf35ab885cd4db_prof);

    }

    // line 8
    public function block_buttonsignin($context, array $blocks = array())
    {
        $__internal_9b7918c8b02402f98ca1ccb9aa8b7e584d6a68dcb9626fc363feab9b5a1abfae = $this->env->getExtension("native_profiler");
        $__internal_9b7918c8b02402f98ca1ccb9aa8b7e584d6a68dcb9626fc363feab9b5a1abfae->enter($__internal_9b7918c8b02402f98ca1ccb9aa8b7e584d6a68dcb9626fc363feab9b5a1abfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonsignin"));

        
        $__internal_9b7918c8b02402f98ca1ccb9aa8b7e584d6a68dcb9626fc363feab9b5a1abfae->leave($__internal_9b7918c8b02402f98ca1ccb9aa8b7e584d6a68dcb9626fc363feab9b5a1abfae_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 8,  73 => 5,  67 => 4,  59 => 14,  57 => 13,  52 => 10,  50 => 8,  47 => 7,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* {% block modals %}*/
/* {% include "::layout_loginmodal.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block buttonsignin %}*/
/* {% endblock %}*/
/* */
/* <h2>Inscription</h2>*/
/* */
/* {% include "::layout_signinform.html.twig" %}*/
/* */
/* {% endblock %}*/
