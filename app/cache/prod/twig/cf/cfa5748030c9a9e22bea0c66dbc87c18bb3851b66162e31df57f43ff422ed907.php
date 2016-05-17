<?php

/* @PedagoFssUser/Default/etudiant.html.twig */
class __TwigTemplate_5f1be9c8d8d4272da9df4198406a4c59838c6cf41905aeba0fd26336697698c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/etudiant.html.twig", 1);
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
        echo "Utilisateur - Etudiant
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Utilisateur - Page Etudiant </h2>

<p>
Page en construction
</p>

";
    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/etudiant.html.twig";
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
/* Utilisateur - Etudiant*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Etudiant </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
