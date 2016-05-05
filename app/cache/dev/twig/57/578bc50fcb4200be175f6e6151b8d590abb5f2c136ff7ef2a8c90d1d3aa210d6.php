<?php

/* default/accueilprof.html.twig */
class __TwigTemplate_ce73dbc19731b559a2ee7b3ade5c6f8b9d61cc2e68a14d43a8e4d6b9b18a819f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "default/accueilprof.html.twig", 1);
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
        $__internal_989eed9c2a1de003c1dc302a2cd6f9c0b3c9b2492e7703dbf2dce34201d78656 = $this->env->getExtension("native_profiler");
        $__internal_989eed9c2a1de003c1dc302a2cd6f9c0b3c9b2492e7703dbf2dce34201d78656->enter($__internal_989eed9c2a1de003c1dc302a2cd6f9c0b3c9b2492e7703dbf2dce34201d78656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueilprof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_989eed9c2a1de003c1dc302a2cd6f9c0b3c9b2492e7703dbf2dce34201d78656->leave($__internal_989eed9c2a1de003c1dc302a2cd6f9c0b3c9b2492e7703dbf2dce34201d78656_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b2621e8082edc838209f772bfcf3834f19b67c65b242fdaf816654d814f268 = $this->env->getExtension("native_profiler");
        $__internal_15b2621e8082edc838209f772bfcf3834f19b67c65b242fdaf816654d814f268->enter($__internal_15b2621e8082edc838209f772bfcf3834f19b67c65b242fdaf816654d814f268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15b2621e8082edc838209f772bfcf3834f19b67c65b242fdaf816654d814f268->leave($__internal_15b2621e8082edc838209f772bfcf3834f19b67c65b242fdaf816654d814f268_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_e198eafa467c6c6c5eed623bb37fa440fcf19f361860a5986e26993a8c3a701c = $this->env->getExtension("native_profiler");
        $__internal_e198eafa467c6c6c5eed623bb37fa440fcf19f361860a5986e26993a8c3a701c->enter($__internal_e198eafa467c6c6c5eed623bb37fa440fcf19f361860a5986e26993a8c3a701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil prof  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_e198eafa467c6c6c5eed623bb37fa440fcf19f361860a5986e26993a8c3a701c->leave($__internal_e198eafa467c6c6c5eed623bb37fa440fcf19f361860a5986e26993a8c3a701c_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_bdf8413e9197ede923fc0f818257df6700f10129b921fd13ec3cbc5fb19ac444 = $this->env->getExtension("native_profiler");
        $__internal_bdf8413e9197ede923fc0f818257df6700f10129b921fd13ec3cbc5fb19ac444->enter($__internal_bdf8413e9197ede923fc0f818257df6700f10129b921fd13ec3cbc5fb19ac444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_bdf8413e9197ede923fc0f818257df6700f10129b921fd13ec3cbc5fb19ac444->leave($__internal_bdf8413e9197ede923fc0f818257df6700f10129b921fd13ec3cbc5fb19ac444_prof);

    }

    public function getTemplateName()
    {
        return "default/accueilprof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  77 => 10,  68 => 7,  64 => 5,  58 => 4,  50 => 13,  48 => 10,  45 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 		{% block submenu %}*/
/* 			<h2> Bienvenue sur l'interface d'accueil prof  </h2>*/
/* */
/* 			<p> Page en construction {{ lang['PAGE_TITLE'] }} </p>*/
/* 		{% endblock %}*/
/* 		*/
/* 		{% block bodycontent %}*/
/* 		*/
/* 		{% endblock %}*/
/* 		*/
/* {% endblock %}*/
