<?php

/* default/accueiladmin.html.twig */
class __TwigTemplate_db2237355b39bad212f6b5a50f0233bb6fead11f4d813460a360fccd3a33cf56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "default/accueiladmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        $this->displayBlock('submenu', $context, $blocks);
        // line 10
        echo "\t\t
\t\t";
        // line 11
        $this->displayBlock('bodycontent', $context, $blocks);
        // line 14
        echo "\t\t
";
    }

    // line 5
    public function block_submenu($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil administration  </h2>

\t\t\t<p> Page en construction ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 12
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "default/accueiladmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  59 => 11,  53 => 8,  49 => 6,  46 => 5,  41 => 14,  39 => 11,  36 => 10,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* 		{% block submenu %}*/
/* 			<h2> Bienvenue sur l'interface d'accueil administration  </h2>*/
/* */
/* 			<p> Page en construction {{ lang['PAGE_TITLE'] }} </p>*/
/* 		{% endblock %}*/
/* 		*/
/* 		{% block bodycontent %}*/
/* 		*/
/* 		{% endblock %}*/
/* 		*/
/* {% endblock %}*/
/* 	*/
/* 	*/
