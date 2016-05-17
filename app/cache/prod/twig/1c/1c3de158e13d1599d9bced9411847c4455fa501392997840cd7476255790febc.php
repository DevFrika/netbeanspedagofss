<?php

/* :default:accueiletudiant.html.twig */
class __TwigTemplate_d3ac5a633a87cbaa1a4c2de39f21384763851961e08359d8c60f7901af605794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueiletudiant.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        $this->displayBlock('submenu', $context, $blocks);
        // line 9
        echo "\t\t
\t\t";
        // line 10
        $this->displayBlock('bodycontent', $context, $blocks);
        // line 13
        echo "\t\t
";
    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 11
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return ":default:accueiletudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  59 => 10,  53 => 7,  49 => 5,  46 => 4,  41 => 13,  39 => 10,  36 => 9,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 		{% block submenu %}*/
/* 			<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>*/
/* */
/* 			<p> Page en construction {{ lang['PAGE_TITLE'] }} </p>*/
/* 		{% endblock %}*/
/* 		*/
/* 		{% block bodycontent %}*/
/* 		*/
/* 		{% endblock %}*/
/* 		*/
/* {% endblock %}*/
