<?php

/* @PedagoFssUser/Default/signin.html.twig */
class __TwigTemplate_80c8af0ce38714c653a88af56d8c1fe10d06625118c8cf601f6bddd7babfa79c extends Twig_Template
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
    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("::layout_loginmodal.html.twig", "@PedagoFssUser/Default/signin.html.twig", 5)->display($context);
    }

    // line 8
    public function block_buttonsignin($context, array $blocks = array())
    {
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
        return array (  62 => 8,  58 => 5,  55 => 4,  50 => 14,  48 => 13,  43 => 10,  41 => 8,  38 => 7,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
