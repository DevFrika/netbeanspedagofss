<?php

/* @PedagoFssUser/Default/index.html.twig */
class __TwigTemplate_ca8b006281a6250718b5ac5124c2fd23268e2e44f5c2e5da07d976038df9926f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Utilisateur 
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Utilisateur - Page Normale </h2>

<p>
Page en construction
</p>

";
    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur */
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Normale </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
