<?php

/* @PedagoFssUser/Default/prof.html.twig */
class __TwigTemplate_6e49f5a91114158aad8808e87968536a7256c0abbf4fe161b9ad4f4e105f0c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/prof.html.twig", 1);
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
        echo "Utilisateur - Prof
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Utilisateur - Page par prof </h2>

<p>
Page en construction
</p>

";
    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/prof.html.twig";
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
/* Utilisateur - Prof*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page par prof </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
