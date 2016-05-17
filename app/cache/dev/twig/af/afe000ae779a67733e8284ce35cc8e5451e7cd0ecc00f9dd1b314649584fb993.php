<?php

/* :default:accueil.html.twig */
class __TwigTemplate_e20afb394dd804c15e349ec4fe5a960c788315661c819f5a3a59525940b4784f extends Twig_Template
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
        $__internal_f551acf36151bd3fb820979cce0835fa571b59add01f0ffaac651cde8323ab25 = $this->env->getExtension("native_profiler");
        $__internal_f551acf36151bd3fb820979cce0835fa571b59add01f0ffaac651cde8323ab25->enter($__internal_f551acf36151bd3fb820979cce0835fa571b59add01f0ffaac651cde8323ab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f551acf36151bd3fb820979cce0835fa571b59add01f0ffaac651cde8323ab25->leave($__internal_f551acf36151bd3fb820979cce0835fa571b59add01f0ffaac651cde8323ab25_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_10e68b1a3b31ee982e2b18fe254afa6041ec8cd746c262428dc49643e51a0fa1 = $this->env->getExtension("native_profiler");
        $__internal_10e68b1a3b31ee982e2b18fe254afa6041ec8cd746c262428dc49643e51a0fa1->enter($__internal_10e68b1a3b31ee982e2b18fe254afa6041ec8cd746c262428dc49643e51a0fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil   </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_10e68b1a3b31ee982e2b18fe254afa6041ec8cd746c262428dc49643e51a0fa1->leave($__internal_10e68b1a3b31ee982e2b18fe254afa6041ec8cd746c262428dc49643e51a0fa1_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_e8c8a566a8068bde029ba1e873fe5d09bfa7091d96b3471c52840bf16f40e9f8 = $this->env->getExtension("native_profiler");
        $__internal_e8c8a566a8068bde029ba1e873fe5d09bfa7091d96b3471c52840bf16f40e9f8->enter($__internal_e8c8a566a8068bde029ba1e873fe5d09bfa7091d96b3471c52840bf16f40e9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t <h2> Body content </h2>
\t\t 
\t\t";
        
        $__internal_e8c8a566a8068bde029ba1e873fe5d09bfa7091d96b3471c52840bf16f40e9f8->leave($__internal_e8c8a566a8068bde029ba1e873fe5d09bfa7091d96b3471c52840bf16f40e9f8_prof);

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
        return array (  60 => 12,  54 => 11,  45 => 7,  41 => 5,  35 => 4,  11 => 1,);
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
