<?php

/* :default:accueiletudiant.html.twig */
class __TwigTemplate_1035484b54c9b06bc600ee86f6a444a81c6d10bcae82036251939cd2c4539e68 extends Twig_Template
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
        $__internal_9beaff42eb340e935909de834a4437773e1960098f011fef261f6815ee1545cc = $this->env->getExtension("native_profiler");
        $__internal_9beaff42eb340e935909de834a4437773e1960098f011fef261f6815ee1545cc->enter($__internal_9beaff42eb340e935909de834a4437773e1960098f011fef261f6815ee1545cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueiletudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9beaff42eb340e935909de834a4437773e1960098f011fef261f6815ee1545cc->leave($__internal_9beaff42eb340e935909de834a4437773e1960098f011fef261f6815ee1545cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7a7c89a951a8209bf08078c683ae26c7f9cbbc959603455991643d6dae93c4f = $this->env->getExtension("native_profiler");
        $__internal_b7a7c89a951a8209bf08078c683ae26c7f9cbbc959603455991643d6dae93c4f->enter($__internal_b7a7c89a951a8209bf08078c683ae26c7f9cbbc959603455991643d6dae93c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b7a7c89a951a8209bf08078c683ae26c7f9cbbc959603455991643d6dae93c4f->leave($__internal_b7a7c89a951a8209bf08078c683ae26c7f9cbbc959603455991643d6dae93c4f_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_531409ef8467bb46150b69717dca6ef627a767568601190b465d2bf4cf3f89be = $this->env->getExtension("native_profiler");
        $__internal_531409ef8467bb46150b69717dca6ef627a767568601190b465d2bf4cf3f89be->enter($__internal_531409ef8467bb46150b69717dca6ef627a767568601190b465d2bf4cf3f89be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_531409ef8467bb46150b69717dca6ef627a767568601190b465d2bf4cf3f89be->leave($__internal_531409ef8467bb46150b69717dca6ef627a767568601190b465d2bf4cf3f89be_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_d238c07752bb9f11d768c8c390254e466620f34e404f9ae9cb5d3aff437aaf06 = $this->env->getExtension("native_profiler");
        $__internal_d238c07752bb9f11d768c8c390254e466620f34e404f9ae9cb5d3aff437aaf06->enter($__internal_d238c07752bb9f11d768c8c390254e466620f34e404f9ae9cb5d3aff437aaf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_d238c07752bb9f11d768c8c390254e466620f34e404f9ae9cb5d3aff437aaf06->leave($__internal_d238c07752bb9f11d768c8c390254e466620f34e404f9ae9cb5d3aff437aaf06_prof);

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
