<?php

/* FssWebsiteDepartementBundle:Default:adminindex.html.twig */
class __TwigTemplate_c2a0a50364973703523313b8464ef658d878594f5a8e2fe10e300391ff57b34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:adminindex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
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
    public function block_submenu($context, array $blocks = array())
    {
        // line 7
        echo "

<h2>Departement accueil - Submenu admin - Page en construction </h2>

       
";
    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:adminindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  50 => 15,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Admin*/
/* {% endblock %}*/
/* */
/* {% block submenu %}*/
/* */
/* */
/* <h2>Departement accueil - Submenu admin - Page en construction </h2>*/
/* */
/*        */
/* {% endblock %}*/
/* */
/* */
/* {% block bodycontent %}*/
/* */
/* */
/* <h2>Departement - Body Content admin </h2>*/
/* */
/*        */
/* {% endblock %}*/