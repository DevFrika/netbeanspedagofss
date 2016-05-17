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
        $__internal_be95f169b9283ab7d8377760f9376695e38fc793e382499f5a65412a363e6022 = $this->env->getExtension("native_profiler");
        $__internal_be95f169b9283ab7d8377760f9376695e38fc793e382499f5a65412a363e6022->enter($__internal_be95f169b9283ab7d8377760f9376695e38fc793e382499f5a65412a363e6022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueiletudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be95f169b9283ab7d8377760f9376695e38fc793e382499f5a65412a363e6022->leave($__internal_be95f169b9283ab7d8377760f9376695e38fc793e382499f5a65412a363e6022_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fb3a67a41ddec30abf27d2be7c4db8cc1909d0395cc42283c9fe23d148d6aa = $this->env->getExtension("native_profiler");
        $__internal_84fb3a67a41ddec30abf27d2be7c4db8cc1909d0395cc42283c9fe23d148d6aa->enter($__internal_84fb3a67a41ddec30abf27d2be7c4db8cc1909d0395cc42283c9fe23d148d6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_84fb3a67a41ddec30abf27d2be7c4db8cc1909d0395cc42283c9fe23d148d6aa->leave($__internal_84fb3a67a41ddec30abf27d2be7c4db8cc1909d0395cc42283c9fe23d148d6aa_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_89de0b68504fb5ba65de19db892db9f006a6f42b4bc6b7fe6470397ac79e4f51 = $this->env->getExtension("native_profiler");
        $__internal_89de0b68504fb5ba65de19db892db9f006a6f42b4bc6b7fe6470397ac79e4f51->enter($__internal_89de0b68504fb5ba65de19db892db9f006a6f42b4bc6b7fe6470397ac79e4f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_89de0b68504fb5ba65de19db892db9f006a6f42b4bc6b7fe6470397ac79e4f51->leave($__internal_89de0b68504fb5ba65de19db892db9f006a6f42b4bc6b7fe6470397ac79e4f51_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_f624021a24907b5d27fc3d83bebd7ba934a09eee9c024ebdd50cbe62a72ef000 = $this->env->getExtension("native_profiler");
        $__internal_f624021a24907b5d27fc3d83bebd7ba934a09eee9c024ebdd50cbe62a72ef000->enter($__internal_f624021a24907b5d27fc3d83bebd7ba934a09eee9c024ebdd50cbe62a72ef000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_f624021a24907b5d27fc3d83bebd7ba934a09eee9c024ebdd50cbe62a72ef000->leave($__internal_f624021a24907b5d27fc3d83bebd7ba934a09eee9c024ebdd50cbe62a72ef000_prof);

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
