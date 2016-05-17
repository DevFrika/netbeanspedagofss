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
        $__internal_d36b633578540396a821150e0dab8bd780ecfdfaff87aeca4c5f2ba5533d0283 = $this->env->getExtension("native_profiler");
        $__internal_d36b633578540396a821150e0dab8bd780ecfdfaff87aeca4c5f2ba5533d0283->enter($__internal_d36b633578540396a821150e0dab8bd780ecfdfaff87aeca4c5f2ba5533d0283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueiletudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d36b633578540396a821150e0dab8bd780ecfdfaff87aeca4c5f2ba5533d0283->leave($__internal_d36b633578540396a821150e0dab8bd780ecfdfaff87aeca4c5f2ba5533d0283_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f21a2dadb047c3266c76542caab97eb292f038961f319b231b1a5575f7208fe = $this->env->getExtension("native_profiler");
        $__internal_7f21a2dadb047c3266c76542caab97eb292f038961f319b231b1a5575f7208fe->enter($__internal_7f21a2dadb047c3266c76542caab97eb292f038961f319b231b1a5575f7208fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f21a2dadb047c3266c76542caab97eb292f038961f319b231b1a5575f7208fe->leave($__internal_7f21a2dadb047c3266c76542caab97eb292f038961f319b231b1a5575f7208fe_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_be3a3c9ffb4eda4500791a7877ff5bbad4ae561ab698a8800f4c1430995b21b8 = $this->env->getExtension("native_profiler");
        $__internal_be3a3c9ffb4eda4500791a7877ff5bbad4ae561ab698a8800f4c1430995b21b8->enter($__internal_be3a3c9ffb4eda4500791a7877ff5bbad4ae561ab698a8800f4c1430995b21b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_be3a3c9ffb4eda4500791a7877ff5bbad4ae561ab698a8800f4c1430995b21b8->leave($__internal_be3a3c9ffb4eda4500791a7877ff5bbad4ae561ab698a8800f4c1430995b21b8_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_5701b804a5503e532de383334519a5c95c8926ce9755813b6262614d46223f02 = $this->env->getExtension("native_profiler");
        $__internal_5701b804a5503e532de383334519a5c95c8926ce9755813b6262614d46223f02->enter($__internal_5701b804a5503e532de383334519a5c95c8926ce9755813b6262614d46223f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_5701b804a5503e532de383334519a5c95c8926ce9755813b6262614d46223f02->leave($__internal_5701b804a5503e532de383334519a5c95c8926ce9755813b6262614d46223f02_prof);

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
