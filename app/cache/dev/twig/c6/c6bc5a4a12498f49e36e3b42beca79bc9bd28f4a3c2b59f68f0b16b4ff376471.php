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
        $__internal_1d4b2e0fce422289ec44eefb44bb9caf3ec244c47c2b0d95162b20d46b987682 = $this->env->getExtension("native_profiler");
        $__internal_1d4b2e0fce422289ec44eefb44bb9caf3ec244c47c2b0d95162b20d46b987682->enter($__internal_1d4b2e0fce422289ec44eefb44bb9caf3ec244c47c2b0d95162b20d46b987682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4b2e0fce422289ec44eefb44bb9caf3ec244c47c2b0d95162b20d46b987682->leave($__internal_1d4b2e0fce422289ec44eefb44bb9caf3ec244c47c2b0d95162b20d46b987682_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_2cc3c45c4c122180a90350bc8edc7b7656c45a1fed2a3d5e7a225479dd166e3f = $this->env->getExtension("native_profiler");
        $__internal_2cc3c45c4c122180a90350bc8edc7b7656c45a1fed2a3d5e7a225479dd166e3f->enter($__internal_2cc3c45c4c122180a90350bc8edc7b7656c45a1fed2a3d5e7a225479dd166e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil   </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_2cc3c45c4c122180a90350bc8edc7b7656c45a1fed2a3d5e7a225479dd166e3f->leave($__internal_2cc3c45c4c122180a90350bc8edc7b7656c45a1fed2a3d5e7a225479dd166e3f_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_0812587aa554e37507242c1073f57df9d0a2b9ac33eb4ca5726bd3388b0be0ca = $this->env->getExtension("native_profiler");
        $__internal_0812587aa554e37507242c1073f57df9d0a2b9ac33eb4ca5726bd3388b0be0ca->enter($__internal_0812587aa554e37507242c1073f57df9d0a2b9ac33eb4ca5726bd3388b0be0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t <h2> Body content </h2>
\t\t 
\t\t";
        
        $__internal_0812587aa554e37507242c1073f57df9d0a2b9ac33eb4ca5726bd3388b0be0ca->leave($__internal_0812587aa554e37507242c1073f57df9d0a2b9ac33eb4ca5726bd3388b0be0ca_prof);

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
