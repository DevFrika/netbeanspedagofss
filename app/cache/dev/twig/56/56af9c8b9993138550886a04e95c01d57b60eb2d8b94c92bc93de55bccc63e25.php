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
        $__internal_773694bc1212121068683566e5b03af33c1108afafee2a231e59a495d30d9982 = $this->env->getExtension("native_profiler");
        $__internal_773694bc1212121068683566e5b03af33c1108afafee2a231e59a495d30d9982->enter($__internal_773694bc1212121068683566e5b03af33c1108afafee2a231e59a495d30d9982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773694bc1212121068683566e5b03af33c1108afafee2a231e59a495d30d9982->leave($__internal_773694bc1212121068683566e5b03af33c1108afafee2a231e59a495d30d9982_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bad7aa48c3d2d0e691846ed9732a0b5b0f7eb017142de1630991354c43dfd4d = $this->env->getExtension("native_profiler");
        $__internal_5bad7aa48c3d2d0e691846ed9732a0b5b0f7eb017142de1630991354c43dfd4d->enter($__internal_5bad7aa48c3d2d0e691846ed9732a0b5b0f7eb017142de1630991354c43dfd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5bad7aa48c3d2d0e691846ed9732a0b5b0f7eb017142de1630991354c43dfd4d->leave($__internal_5bad7aa48c3d2d0e691846ed9732a0b5b0f7eb017142de1630991354c43dfd4d_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_b4ab4a432432df90a288a8ec3c2ef5005bc6f2341e20c5fef732fcacb809c495 = $this->env->getExtension("native_profiler");
        $__internal_b4ab4a432432df90a288a8ec3c2ef5005bc6f2341e20c5fef732fcacb809c495->enter($__internal_b4ab4a432432df90a288a8ec3c2ef5005bc6f2341e20c5fef732fcacb809c495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_signinmodal.html.twig", "@PedagoFssUser/Default/login.html.twig", 5)->display($context);
        
        $__internal_b4ab4a432432df90a288a8ec3c2ef5005bc6f2341e20c5fef732fcacb809c495->leave($__internal_b4ab4a432432df90a288a8ec3c2ef5005bc6f2341e20c5fef732fcacb809c495_prof);

    }

    // line 8
    public function block_buttonlogin($context, array $blocks = array())
    {
        $__internal_4aaa4329b10425f62e1db9d24d56fa3c44375b3da22ec9f7ad6ae6fa72d07a4b = $this->env->getExtension("native_profiler");
        $__internal_4aaa4329b10425f62e1db9d24d56fa3c44375b3da22ec9f7ad6ae6fa72d07a4b->enter($__internal_4aaa4329b10425f62e1db9d24d56fa3c44375b3da22ec9f7ad6ae6fa72d07a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonlogin"));

        
        $__internal_4aaa4329b10425f62e1db9d24d56fa3c44375b3da22ec9f7ad6ae6fa72d07a4b->leave($__internal_4aaa4329b10425f62e1db9d24d56fa3c44375b3da22ec9f7ad6ae6fa72d07a4b_prof);

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
