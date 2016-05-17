<?php

/* default/accueil.html.twig */
class __TwigTemplate_3f30ba857a6eaf1e686fb4cf3ccdb0b23a0c7903553e7e70f375f330ef345946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "default/accueil.html.twig", 1);
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
        $__internal_328ef667b35afccfd297d7ba9938b539a33b8a7706074b4bdc84639f6b55fb5c = $this->env->getExtension("native_profiler");
        $__internal_328ef667b35afccfd297d7ba9938b539a33b8a7706074b4bdc84639f6b55fb5c->enter($__internal_328ef667b35afccfd297d7ba9938b539a33b8a7706074b4bdc84639f6b55fb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328ef667b35afccfd297d7ba9938b539a33b8a7706074b4bdc84639f6b55fb5c->leave($__internal_328ef667b35afccfd297d7ba9938b539a33b8a7706074b4bdc84639f6b55fb5c_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_5ec0c783edc63d98fb48e189a23ccb9469df0863f69895d3db19cd7d17d1bbd9 = $this->env->getExtension("native_profiler");
        $__internal_5ec0c783edc63d98fb48e189a23ccb9469df0863f69895d3db19cd7d17d1bbd9->enter($__internal_5ec0c783edc63d98fb48e189a23ccb9469df0863f69895d3db19cd7d17d1bbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil   </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_5ec0c783edc63d98fb48e189a23ccb9469df0863f69895d3db19cd7d17d1bbd9->leave($__internal_5ec0c783edc63d98fb48e189a23ccb9469df0863f69895d3db19cd7d17d1bbd9_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_5ff7a58b29b9461d45760149668c0735a6d5e09f0e064490a0ccf1c57fdfef0b = $this->env->getExtension("native_profiler");
        $__internal_5ff7a58b29b9461d45760149668c0735a6d5e09f0e064490a0ccf1c57fdfef0b->enter($__internal_5ff7a58b29b9461d45760149668c0735a6d5e09f0e064490a0ccf1c57fdfef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t <h2> Body content </h2>
\t\t 
\t\t";
        
        $__internal_5ff7a58b29b9461d45760149668c0735a6d5e09f0e064490a0ccf1c57fdfef0b->leave($__internal_5ff7a58b29b9461d45760149668c0735a6d5e09f0e064490a0ccf1c57fdfef0b_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
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
