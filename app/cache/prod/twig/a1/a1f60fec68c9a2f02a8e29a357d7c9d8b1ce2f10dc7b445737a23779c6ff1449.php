<?php

/* @FssWebsiteDepartement/Default/profindexdep.html.twig */
class __TwigTemplate_d1def68e3e18343fc140c1a74f395a32a3df09c292685ce7c40a08ca63a9e03f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/profindexdep.html.twig", 1);
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
        echo "Departement - Normale
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "


<h2>Departement - Page quelconque prof - Page en construction </h2>

       



";
    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/profindexdep.html.twig";
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
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Normale*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/* */
/* <h2>Departement - Page quelconque prof - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
