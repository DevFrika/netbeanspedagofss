<?php

/* @PedagoFssUser/Default/login.html.twig */
class __TwigTemplate_daa4ce1c05962ae59ef37057d8b842bbaef3688d40d97c80278e368aa561372a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'modals' => array($this, 'block_modals'),
            'buttonlogin' => array($this, 'block_buttonlogin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38611a895a129d8eef357556596b80d07289c3dd293ebc697040c886e4be7082 = $this->env->getExtension("native_profiler");
        $__internal_38611a895a129d8eef357556596b80d07289c3dd293ebc697040c886e4be7082->enter($__internal_38611a895a129d8eef357556596b80d07289c3dd293ebc697040c886e4be7082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38611a895a129d8eef357556596b80d07289c3dd293ebc697040c886e4be7082->leave($__internal_38611a895a129d8eef357556596b80d07289c3dd293ebc697040c886e4be7082_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb261ecd17fd75c130acbda5aebcf014b105b27ed46aadf03b06075b6fcbdab0 = $this->env->getExtension("native_profiler");
        $__internal_bb261ecd17fd75c130acbda5aebcf014b105b27ed46aadf03b06075b6fcbdab0->enter($__internal_bb261ecd17fd75c130acbda5aebcf014b105b27ed46aadf03b06075b6fcbdab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('modals', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('buttonlogin', $context, $blocks);
        // line 10
        echo "
<h2>Connexion </h2>

";
        // line 13
        $this->loadTemplate("::layout_loginform.html.twig", "@PedagoFssUser/Default/login.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_bb261ecd17fd75c130acbda5aebcf014b105b27ed46aadf03b06075b6fcbdab0->leave($__internal_bb261ecd17fd75c130acbda5aebcf014b105b27ed46aadf03b06075b6fcbdab0_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_1c4f354f8b096788f7b571a02c3a07734e5ef91d7705f6d5c9636fcedbde62c1 = $this->env->getExtension("native_profiler");
        $__internal_1c4f354f8b096788f7b571a02c3a07734e5ef91d7705f6d5c9636fcedbde62c1->enter($__internal_1c4f354f8b096788f7b571a02c3a07734e5ef91d7705f6d5c9636fcedbde62c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_signinmodal.html.twig", "@PedagoFssUser/Default/login.html.twig", 5)->display($context);
        
        $__internal_1c4f354f8b096788f7b571a02c3a07734e5ef91d7705f6d5c9636fcedbde62c1->leave($__internal_1c4f354f8b096788f7b571a02c3a07734e5ef91d7705f6d5c9636fcedbde62c1_prof);

    }

    // line 8
    public function block_buttonlogin($context, array $blocks = array())
    {
        $__internal_8a9ee0f8c0d04f1ed58075a5a2cf410fa1158baf35e08bbd95fcc112d2bd6727 = $this->env->getExtension("native_profiler");
        $__internal_8a9ee0f8c0d04f1ed58075a5a2cf410fa1158baf35e08bbd95fcc112d2bd6727->enter($__internal_8a9ee0f8c0d04f1ed58075a5a2cf410fa1158baf35e08bbd95fcc112d2bd6727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonlogin"));

        
        $__internal_8a9ee0f8c0d04f1ed58075a5a2cf410fa1158baf35e08bbd95fcc112d2bd6727->leave($__internal_8a9ee0f8c0d04f1ed58075a5a2cf410fa1158baf35e08bbd95fcc112d2bd6727_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/login.html.twig";
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
/* {% include "::layout_signinmodal.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block buttonlogin %}*/
/* {% endblock %}*/
/* */
/* <h2>Connexion </h2>*/
/* */
/* {% include "::layout_loginform.html.twig" %}*/
/* */
/* {% endblock %}*/
