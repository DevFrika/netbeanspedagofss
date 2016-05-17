<?php

/* PedagoFssUserBundle:Default:login.html.twig */
class __TwigTemplate_07e116386b1c78e9e1e26c989e3f11800145142b8908bf83d1f5d6bdafaf5e87 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("::layout_signinmodal.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 5)->display($context);
    }

    // line 8
    public function block_buttonlogin($context, array $blocks = array())
    {
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
        return array (  62 => 8,  58 => 5,  55 => 4,  50 => 14,  48 => 13,  43 => 10,  41 => 8,  38 => 7,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
