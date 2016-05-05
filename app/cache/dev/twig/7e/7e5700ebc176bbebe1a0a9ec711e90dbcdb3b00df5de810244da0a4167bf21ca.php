<?php

/* default/accueiletudiant.html.twig */
class __TwigTemplate_1857de1354f2777986b68647784093fd06c64dc51c21f2623586f6ca7ed73384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "default/accueiletudiant.html.twig", 1);
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
        $__internal_6d2eadebda4d13c92ac68c19723af62d415591b52aee2e4f822f1aaca0db0ec3 = $this->env->getExtension("native_profiler");
        $__internal_6d2eadebda4d13c92ac68c19723af62d415591b52aee2e4f822f1aaca0db0ec3->enter($__internal_6d2eadebda4d13c92ac68c19723af62d415591b52aee2e4f822f1aaca0db0ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueiletudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2eadebda4d13c92ac68c19723af62d415591b52aee2e4f822f1aaca0db0ec3->leave($__internal_6d2eadebda4d13c92ac68c19723af62d415591b52aee2e4f822f1aaca0db0ec3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c3c75c67ad6073e92ffb8b3e23c1b83a73d87ca77285bda4e057d7e1a7698aa = $this->env->getExtension("native_profiler");
        $__internal_2c3c75c67ad6073e92ffb8b3e23c1b83a73d87ca77285bda4e057d7e1a7698aa->enter($__internal_2c3c75c67ad6073e92ffb8b3e23c1b83a73d87ca77285bda4e057d7e1a7698aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c3c75c67ad6073e92ffb8b3e23c1b83a73d87ca77285bda4e057d7e1a7698aa->leave($__internal_2c3c75c67ad6073e92ffb8b3e23c1b83a73d87ca77285bda4e057d7e1a7698aa_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_afe73855acdc9123519e3d10bf4e643cc9b8fd13929d3c026fb5ef16c0bb630d = $this->env->getExtension("native_profiler");
        $__internal_afe73855acdc9123519e3d10bf4e643cc9b8fd13929d3c026fb5ef16c0bb630d->enter($__internal_afe73855acdc9123519e3d10bf4e643cc9b8fd13929d3c026fb5ef16c0bb630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_afe73855acdc9123519e3d10bf4e643cc9b8fd13929d3c026fb5ef16c0bb630d->leave($__internal_afe73855acdc9123519e3d10bf4e643cc9b8fd13929d3c026fb5ef16c0bb630d_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_1b0a7d16a70ad97641e51998ace9231dff92ed4d958d19ea2fda475905e87f6a = $this->env->getExtension("native_profiler");
        $__internal_1b0a7d16a70ad97641e51998ace9231dff92ed4d958d19ea2fda475905e87f6a->enter($__internal_1b0a7d16a70ad97641e51998ace9231dff92ed4d958d19ea2fda475905e87f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_1b0a7d16a70ad97641e51998ace9231dff92ed4d958d19ea2fda475905e87f6a->leave($__internal_1b0a7d16a70ad97641e51998ace9231dff92ed4d958d19ea2fda475905e87f6a_prof);

    }

    public function getTemplateName()
    {
        return "default/accueiletudiant.html.twig";
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
