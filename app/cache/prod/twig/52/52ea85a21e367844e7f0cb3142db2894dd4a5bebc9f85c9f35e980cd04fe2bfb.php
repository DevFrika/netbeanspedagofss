<?php

/* @FssWebsiteDepartement/Default/profindex.html.twig */
class __TwigTemplate_674a1ed56b22f8ca1f38ede387042b8db0e33ad03b0a9186b02da429d561917b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/profindex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FssWebsiteDepartementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Departement - Admin
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "


<h2>Departement - Page prof - Page en construction </h2>

       



";
    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/profindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Admin*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* <h2>Departement - Page prof - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
