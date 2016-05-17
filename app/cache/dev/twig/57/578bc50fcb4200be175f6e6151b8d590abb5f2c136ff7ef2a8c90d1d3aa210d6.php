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
        $__internal_3cbca09ddf07290e84832fb0844f08f4e295d87d6df2b9c7a2321964ca6a3a22 = $this->env->getExtension("native_profiler");
        $__internal_3cbca09ddf07290e84832fb0844f08f4e295d87d6df2b9c7a2321964ca6a3a22->enter($__internal_3cbca09ddf07290e84832fb0844f08f4e295d87d6df2b9c7a2321964ca6a3a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueilprof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cbca09ddf07290e84832fb0844f08f4e295d87d6df2b9c7a2321964ca6a3a22->leave($__internal_3cbca09ddf07290e84832fb0844f08f4e295d87d6df2b9c7a2321964ca6a3a22_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc030893edc1364d57978187c8538636c98bcdd2a7ff22ff255244f927b7ae7d = $this->env->getExtension("native_profiler");
        $__internal_cc030893edc1364d57978187c8538636c98bcdd2a7ff22ff255244f927b7ae7d->enter($__internal_cc030893edc1364d57978187c8538636c98bcdd2a7ff22ff255244f927b7ae7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc030893edc1364d57978187c8538636c98bcdd2a7ff22ff255244f927b7ae7d->leave($__internal_cc030893edc1364d57978187c8538636c98bcdd2a7ff22ff255244f927b7ae7d_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_b871f4041dce7b1413ead7857d12f4e1e06535f00c9fa86164d7db31db29d15b = $this->env->getExtension("native_profiler");
        $__internal_b871f4041dce7b1413ead7857d12f4e1e06535f00c9fa86164d7db31db29d15b->enter($__internal_b871f4041dce7b1413ead7857d12f4e1e06535f00c9fa86164d7db31db29d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil prof  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_b871f4041dce7b1413ead7857d12f4e1e06535f00c9fa86164d7db31db29d15b->leave($__internal_b871f4041dce7b1413ead7857d12f4e1e06535f00c9fa86164d7db31db29d15b_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_8e47fcc775376e0eb6245b9c585e727405c7efb9405eb4b07239f49ff44585c5 = $this->env->getExtension("native_profiler");
        $__internal_8e47fcc775376e0eb6245b9c585e727405c7efb9405eb4b07239f49ff44585c5->enter($__internal_8e47fcc775376e0eb6245b9c585e727405c7efb9405eb4b07239f49ff44585c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_8e47fcc775376e0eb6245b9c585e727405c7efb9405eb4b07239f49ff44585c5->leave($__internal_8e47fcc775376e0eb6245b9c585e727405c7efb9405eb4b07239f49ff44585c5_prof);

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
