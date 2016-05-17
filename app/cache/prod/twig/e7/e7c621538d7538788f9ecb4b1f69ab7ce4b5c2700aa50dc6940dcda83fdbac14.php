<?php

/* :default:accueil.html.twig */
class __TwigTemplate_8d1a2e1ef2c8765c11d45ccc4eac54444dbe8a7d266f7fa11d4d9202e676056d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueil.html.twig", 1);
        $this->blocks = array(
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
    public function block_submenu($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil   </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 12
        echo "\t\t
\t\t <h2> Body content </h2>
\t\t 
\t\t";
    }

    public function getTemplateName()
    {
        return ":default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  36 => 7,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* 		{% block submenu %}*/
/* 			<h2> Bienvenue sur l'interface d'accueil   </h2>*/
/* */
/* 			<p> Page en construction {{ lang['PAGE_TITLE'] }} </p>*/
/* 		{% endblock %}*/
/* 		*/
/* 		*/
/* 		{% block bodycontent %}*/
/* 		*/
/* 		 <h2> Body content </h2>*/
/* 		 */
/* 		{% endblock %}*/
/* 		*/
/* */
