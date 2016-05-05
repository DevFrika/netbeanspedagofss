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
        $__internal_e177334765c3720267f0d4db356484b9c8ff665b8ccc3b4f6678c273c36af861 = $this->env->getExtension("native_profiler");
        $__internal_e177334765c3720267f0d4db356484b9c8ff665b8ccc3b4f6678c273c36af861->enter($__internal_e177334765c3720267f0d4db356484b9c8ff665b8ccc3b4f6678c273c36af861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e177334765c3720267f0d4db356484b9c8ff665b8ccc3b4f6678c273c36af861->leave($__internal_e177334765c3720267f0d4db356484b9c8ff665b8ccc3b4f6678c273c36af861_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_140b8a49bd37f9cdfc4fff3ede79f79cf02dcefe4e86d9574bf7d857d037c9ca = $this->env->getExtension("native_profiler");
        $__internal_140b8a49bd37f9cdfc4fff3ede79f79cf02dcefe4e86d9574bf7d857d037c9ca->enter($__internal_140b8a49bd37f9cdfc4fff3ede79f79cf02dcefe4e86d9574bf7d857d037c9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil   </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_140b8a49bd37f9cdfc4fff3ede79f79cf02dcefe4e86d9574bf7d857d037c9ca->leave($__internal_140b8a49bd37f9cdfc4fff3ede79f79cf02dcefe4e86d9574bf7d857d037c9ca_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_6e2c4ab92b69cc1244a8dda999094835af486b7458df340870186a6b6e4600f0 = $this->env->getExtension("native_profiler");
        $__internal_6e2c4ab92b69cc1244a8dda999094835af486b7458df340870186a6b6e4600f0->enter($__internal_6e2c4ab92b69cc1244a8dda999094835af486b7458df340870186a6b6e4600f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t <h2> Body content </h2>
\t\t 
\t\t";
        
        $__internal_6e2c4ab92b69cc1244a8dda999094835af486b7458df340870186a6b6e4600f0->leave($__internal_6e2c4ab92b69cc1244a8dda999094835af486b7458df340870186a6b6e4600f0_prof);

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
