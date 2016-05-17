<?php

/* PedagoFssUserBundle:Default:login.html.twig */
class __TwigTemplate_bd72628e06c10afaa3dbfc7d386750678e179da406c88e7efab079eaefc1e627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 1);
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
        $__internal_106747a912621fcca117bbc41ce3d1ee0e8f9945de1bcbf3c801ab1b5e69517f = $this->env->getExtension("native_profiler");
        $__internal_106747a912621fcca117bbc41ce3d1ee0e8f9945de1bcbf3c801ab1b5e69517f->enter($__internal_106747a912621fcca117bbc41ce3d1ee0e8f9945de1bcbf3c801ab1b5e69517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_106747a912621fcca117bbc41ce3d1ee0e8f9945de1bcbf3c801ab1b5e69517f->leave($__internal_106747a912621fcca117bbc41ce3d1ee0e8f9945de1bcbf3c801ab1b5e69517f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f09a71fbd4b6aa9e3c866ddbe551d2f72208df683ce0706b8cbc3ed5668e15e = $this->env->getExtension("native_profiler");
        $__internal_1f09a71fbd4b6aa9e3c866ddbe551d2f72208df683ce0706b8cbc3ed5668e15e->enter($__internal_1f09a71fbd4b6aa9e3c866ddbe551d2f72208df683ce0706b8cbc3ed5668e15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("::layout_loginform.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_1f09a71fbd4b6aa9e3c866ddbe551d2f72208df683ce0706b8cbc3ed5668e15e->leave($__internal_1f09a71fbd4b6aa9e3c866ddbe551d2f72208df683ce0706b8cbc3ed5668e15e_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_024201451ddd70ca7da7aee8671282aa8910ff8e6adea0b68031106302e3390a = $this->env->getExtension("native_profiler");
        $__internal_024201451ddd70ca7da7aee8671282aa8910ff8e6adea0b68031106302e3390a->enter($__internal_024201451ddd70ca7da7aee8671282aa8910ff8e6adea0b68031106302e3390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_signinmodal.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 5)->display($context);
        
        $__internal_024201451ddd70ca7da7aee8671282aa8910ff8e6adea0b68031106302e3390a->leave($__internal_024201451ddd70ca7da7aee8671282aa8910ff8e6adea0b68031106302e3390a_prof);

    }

    // line 8
    public function block_buttonlogin($context, array $blocks = array())
    {
        $__internal_0e6189440cf9c056e4079302ab9f87a697dd2c22f5990adf8699e048737c353c = $this->env->getExtension("native_profiler");
        $__internal_0e6189440cf9c056e4079302ab9f87a697dd2c22f5990adf8699e048737c353c->enter($__internal_0e6189440cf9c056e4079302ab9f87a697dd2c22f5990adf8699e048737c353c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonlogin"));

        
        $__internal_0e6189440cf9c056e4079302ab9f87a697dd2c22f5990adf8699e048737c353c->leave($__internal_0e6189440cf9c056e4079302ab9f87a697dd2c22f5990adf8699e048737c353c_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:login.html.twig";
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
