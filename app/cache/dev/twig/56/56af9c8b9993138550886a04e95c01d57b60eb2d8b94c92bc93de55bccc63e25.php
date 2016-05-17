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
        $__internal_0f90e0d4b93f1548ecdc0090881ca40023f25db13a04dae35eb8a8385cd920b4 = $this->env->getExtension("native_profiler");
        $__internal_0f90e0d4b93f1548ecdc0090881ca40023f25db13a04dae35eb8a8385cd920b4->enter($__internal_0f90e0d4b93f1548ecdc0090881ca40023f25db13a04dae35eb8a8385cd920b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f90e0d4b93f1548ecdc0090881ca40023f25db13a04dae35eb8a8385cd920b4->leave($__internal_0f90e0d4b93f1548ecdc0090881ca40023f25db13a04dae35eb8a8385cd920b4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb4621115577b137083651bdda489fad88806cbe4c7aede74d2d4bdb682e3fa4 = $this->env->getExtension("native_profiler");
        $__internal_cb4621115577b137083651bdda489fad88806cbe4c7aede74d2d4bdb682e3fa4->enter($__internal_cb4621115577b137083651bdda489fad88806cbe4c7aede74d2d4bdb682e3fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb4621115577b137083651bdda489fad88806cbe4c7aede74d2d4bdb682e3fa4->leave($__internal_cb4621115577b137083651bdda489fad88806cbe4c7aede74d2d4bdb682e3fa4_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_21b039f733a923fbf9db65fda62d21fbf4358ac68fb302c4712ab663abe67a73 = $this->env->getExtension("native_profiler");
        $__internal_21b039f733a923fbf9db65fda62d21fbf4358ac68fb302c4712ab663abe67a73->enter($__internal_21b039f733a923fbf9db65fda62d21fbf4358ac68fb302c4712ab663abe67a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_signinmodal.html.twig", "@PedagoFssUser/Default/login.html.twig", 5)->display($context);
        
        $__internal_21b039f733a923fbf9db65fda62d21fbf4358ac68fb302c4712ab663abe67a73->leave($__internal_21b039f733a923fbf9db65fda62d21fbf4358ac68fb302c4712ab663abe67a73_prof);

    }

    // line 8
    public function block_buttonlogin($context, array $blocks = array())
    {
        $__internal_3940bd166c9d924f50f5741b3220b532f9a972884b489f908814da8a47313683 = $this->env->getExtension("native_profiler");
        $__internal_3940bd166c9d924f50f5741b3220b532f9a972884b489f908814da8a47313683->enter($__internal_3940bd166c9d924f50f5741b3220b532f9a972884b489f908814da8a47313683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonlogin"));

        
        $__internal_3940bd166c9d924f50f5741b3220b532f9a972884b489f908814da8a47313683->leave($__internal_3940bd166c9d924f50f5741b3220b532f9a972884b489f908814da8a47313683_prof);

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
