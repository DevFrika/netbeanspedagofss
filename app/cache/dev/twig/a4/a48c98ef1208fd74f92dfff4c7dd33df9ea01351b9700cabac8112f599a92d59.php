<?php

/* @PedagoFssUser/Default/signin.html.twig */
class __TwigTemplate_9ce9ca9e976bf692cd373b5d673bfc8a1335e322a1bc65359d91c3bd6593693d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/signin.html.twig", 1);
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
        $__internal_eef37ae4ba160ba29056e065667ae38ae39635b7244f5708a6371f6835e43485 = $this->env->getExtension("native_profiler");
        $__internal_eef37ae4ba160ba29056e065667ae38ae39635b7244f5708a6371f6835e43485->enter($__internal_eef37ae4ba160ba29056e065667ae38ae39635b7244f5708a6371f6835e43485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef37ae4ba160ba29056e065667ae38ae39635b7244f5708a6371f6835e43485->leave($__internal_eef37ae4ba160ba29056e065667ae38ae39635b7244f5708a6371f6835e43485_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9e9cb8dc8aefce26bed2f422b140afdf79d4785c8b5e34d7f3b034ce261bb0f = $this->env->getExtension("native_profiler");
        $__internal_b9e9cb8dc8aefce26bed2f422b140afdf79d4785c8b5e34d7f3b034ce261bb0f->enter($__internal_b9e9cb8dc8aefce26bed2f422b140afdf79d4785c8b5e34d7f3b034ce261bb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("::layout_signinform.html.twig", "@PedagoFssUser/Default/signin.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_b9e9cb8dc8aefce26bed2f422b140afdf79d4785c8b5e34d7f3b034ce261bb0f->leave($__internal_b9e9cb8dc8aefce26bed2f422b140afdf79d4785c8b5e34d7f3b034ce261bb0f_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_c029a1d5d3e031a1cbd1d0d12770e334faf8f5baa4699529ab7210ba8da5c49b = $this->env->getExtension("native_profiler");
        $__internal_c029a1d5d3e031a1cbd1d0d12770e334faf8f5baa4699529ab7210ba8da5c49b->enter($__internal_c029a1d5d3e031a1cbd1d0d12770e334faf8f5baa4699529ab7210ba8da5c49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_loginmodal.html.twig", "@PedagoFssUser/Default/signin.html.twig", 5)->display($context);
        
        $__internal_c029a1d5d3e031a1cbd1d0d12770e334faf8f5baa4699529ab7210ba8da5c49b->leave($__internal_c029a1d5d3e031a1cbd1d0d12770e334faf8f5baa4699529ab7210ba8da5c49b_prof);

    }

    // line 8
    public function block_buttonsignin($context, array $blocks = array())
    {
        $__internal_0326ec90f4c164bf6e572267a701582d5b8b0b47862aed679da8ed37c0cee1e2 = $this->env->getExtension("native_profiler");
        $__internal_0326ec90f4c164bf6e572267a701582d5b8b0b47862aed679da8ed37c0cee1e2->enter($__internal_0326ec90f4c164bf6e572267a701582d5b8b0b47862aed679da8ed37c0cee1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonsignin"));

        
        $__internal_0326ec90f4c164bf6e572267a701582d5b8b0b47862aed679da8ed37c0cee1e2->leave($__internal_0326ec90f4c164bf6e572267a701582d5b8b0b47862aed679da8ed37c0cee1e2_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/signin.html.twig";
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
