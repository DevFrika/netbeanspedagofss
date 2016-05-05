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
        $__internal_c55a36d674198bf0687cf672b5175edcfe7aab45a3112e8f9e8127990c25c79e = $this->env->getExtension("native_profiler");
        $__internal_c55a36d674198bf0687cf672b5175edcfe7aab45a3112e8f9e8127990c25c79e->enter($__internal_c55a36d674198bf0687cf672b5175edcfe7aab45a3112e8f9e8127990c25c79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55a36d674198bf0687cf672b5175edcfe7aab45a3112e8f9e8127990c25c79e->leave($__internal_c55a36d674198bf0687cf672b5175edcfe7aab45a3112e8f9e8127990c25c79e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8ebf9977b2240fc85313e8b84306b2ae2ae9c4d3ead8d122ff37ce75f7f6c19 = $this->env->getExtension("native_profiler");
        $__internal_d8ebf9977b2240fc85313e8b84306b2ae2ae9c4d3ead8d122ff37ce75f7f6c19->enter($__internal_d8ebf9977b2240fc85313e8b84306b2ae2ae9c4d3ead8d122ff37ce75f7f6c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8ebf9977b2240fc85313e8b84306b2ae2ae9c4d3ead8d122ff37ce75f7f6c19->leave($__internal_d8ebf9977b2240fc85313e8b84306b2ae2ae9c4d3ead8d122ff37ce75f7f6c19_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_54336e3afcbf2e03e42448cdfa47f88b23b1834c4fa272b34288ecbfd7cf19ce = $this->env->getExtension("native_profiler");
        $__internal_54336e3afcbf2e03e42448cdfa47f88b23b1834c4fa272b34288ecbfd7cf19ce->enter($__internal_54336e3afcbf2e03e42448cdfa47f88b23b1834c4fa272b34288ecbfd7cf19ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_loginmodal.html.twig", "@PedagoFssUser/Default/signin.html.twig", 5)->display($context);
        
        $__internal_54336e3afcbf2e03e42448cdfa47f88b23b1834c4fa272b34288ecbfd7cf19ce->leave($__internal_54336e3afcbf2e03e42448cdfa47f88b23b1834c4fa272b34288ecbfd7cf19ce_prof);

    }

    // line 8
    public function block_buttonsignin($context, array $blocks = array())
    {
        $__internal_5b5950c593e578fffe021be8a3067c97a9de47f4a02efcae8c9ac0569945a88a = $this->env->getExtension("native_profiler");
        $__internal_5b5950c593e578fffe021be8a3067c97a9de47f4a02efcae8c9ac0569945a88a->enter($__internal_5b5950c593e578fffe021be8a3067c97a9de47f4a02efcae8c9ac0569945a88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonsignin"));

        
        $__internal_5b5950c593e578fffe021be8a3067c97a9de47f4a02efcae8c9ac0569945a88a->leave($__internal_5b5950c593e578fffe021be8a3067c97a9de47f4a02efcae8c9ac0569945a88a_prof);

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
