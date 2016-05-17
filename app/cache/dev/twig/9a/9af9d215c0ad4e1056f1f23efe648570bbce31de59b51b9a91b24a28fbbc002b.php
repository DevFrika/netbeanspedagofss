<?php

/* :default:accueiladmin.html.twig */
class __TwigTemplate_578066b423c5a88ea47ac6417b2daa176f608607226c4ef1d4caa627064dd09f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueiladmin.html.twig", 1);
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
        $__internal_b9d19899e9a39b159ce47954b73c15c20d030c3d0707ce596844103ef95a0aa3 = $this->env->getExtension("native_profiler");
        $__internal_b9d19899e9a39b159ce47954b73c15c20d030c3d0707ce596844103ef95a0aa3->enter($__internal_b9d19899e9a39b159ce47954b73c15c20d030c3d0707ce596844103ef95a0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueiladmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d19899e9a39b159ce47954b73c15c20d030c3d0707ce596844103ef95a0aa3->leave($__internal_b9d19899e9a39b159ce47954b73c15c20d030c3d0707ce596844103ef95a0aa3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa7d44c294251a120ea98be5dee8e706ce666c04dd2db35895c29f70cd6ef3af = $this->env->getExtension("native_profiler");
        $__internal_fa7d44c294251a120ea98be5dee8e706ce666c04dd2db35895c29f70cd6ef3af->enter($__internal_fa7d44c294251a120ea98be5dee8e706ce666c04dd2db35895c29f70cd6ef3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa7d44c294251a120ea98be5dee8e706ce666c04dd2db35895c29f70cd6ef3af->leave($__internal_fa7d44c294251a120ea98be5dee8e706ce666c04dd2db35895c29f70cd6ef3af_prof);

    }

    // line 5
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_1ea780ea84ce2c416cbe7e2025c4817e4125c01d5b75da1175bb201f0a45c785 = $this->env->getExtension("native_profiler");
        $__internal_1ea780ea84ce2c416cbe7e2025c4817e4125c01d5b75da1175bb201f0a45c785->enter($__internal_1ea780ea84ce2c416cbe7e2025c4817e4125c01d5b75da1175bb201f0a45c785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 6
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil administration  </h2>

\t\t\t<p> Page en construction ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_1ea780ea84ce2c416cbe7e2025c4817e4125c01d5b75da1175bb201f0a45c785->leave($__internal_1ea780ea84ce2c416cbe7e2025c4817e4125c01d5b75da1175bb201f0a45c785_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_eb5264a43de2aacd002b21a5d9589588a677ee4d7faf27a1ad5d8aaabd8cc594 = $this->env->getExtension("native_profiler");
        $__internal_eb5264a43de2aacd002b21a5d9589588a677ee4d7faf27a1ad5d8aaabd8cc594->enter($__internal_eb5264a43de2aacd002b21a5d9589588a677ee4d7faf27a1ad5d8aaabd8cc594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t";
        
        $__internal_eb5264a43de2aacd002b21a5d9589588a677ee4d7faf27a1ad5d8aaabd8cc594->leave($__internal_eb5264a43de2aacd002b21a5d9589588a677ee4d7faf27a1ad5d8aaabd8cc594_prof);

    }

    public function getTemplateName()
    {
        return ":default:accueiladmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  77 => 11,  68 => 8,  64 => 6,  58 => 5,  50 => 14,  48 => 11,  45 => 10,  42 => 5,  36 => 4,  11 => 1,);
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
