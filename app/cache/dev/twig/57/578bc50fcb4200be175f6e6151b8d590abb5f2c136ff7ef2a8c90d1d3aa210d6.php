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
        $__internal_b3c0d43796a32c94683090471204f7918cfa796723e7e75782b5fa527876721a = $this->env->getExtension("native_profiler");
        $__internal_b3c0d43796a32c94683090471204f7918cfa796723e7e75782b5fa527876721a->enter($__internal_b3c0d43796a32c94683090471204f7918cfa796723e7e75782b5fa527876721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueilprof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c0d43796a32c94683090471204f7918cfa796723e7e75782b5fa527876721a->leave($__internal_b3c0d43796a32c94683090471204f7918cfa796723e7e75782b5fa527876721a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52108dc7a4dd784bbaff1b962855335f7a93cfc8ff482244aa38a287542c2762 = $this->env->getExtension("native_profiler");
        $__internal_52108dc7a4dd784bbaff1b962855335f7a93cfc8ff482244aa38a287542c2762->enter($__internal_52108dc7a4dd784bbaff1b962855335f7a93cfc8ff482244aa38a287542c2762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52108dc7a4dd784bbaff1b962855335f7a93cfc8ff482244aa38a287542c2762->leave($__internal_52108dc7a4dd784bbaff1b962855335f7a93cfc8ff482244aa38a287542c2762_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_805b50667c68f9b41f113f9eebf7e88cb56d4fb0705aa601a93f4e3849240cd8 = $this->env->getExtension("native_profiler");
        $__internal_805b50667c68f9b41f113f9eebf7e88cb56d4fb0705aa601a93f4e3849240cd8->enter($__internal_805b50667c68f9b41f113f9eebf7e88cb56d4fb0705aa601a93f4e3849240cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil prof  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_805b50667c68f9b41f113f9eebf7e88cb56d4fb0705aa601a93f4e3849240cd8->leave($__internal_805b50667c68f9b41f113f9eebf7e88cb56d4fb0705aa601a93f4e3849240cd8_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_c428223422bc8ce1b257267cb5bf1baa6907d3c6da0919153eaab838ef35a45c = $this->env->getExtension("native_profiler");
        $__internal_c428223422bc8ce1b257267cb5bf1baa6907d3c6da0919153eaab838ef35a45c->enter($__internal_c428223422bc8ce1b257267cb5bf1baa6907d3c6da0919153eaab838ef35a45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_c428223422bc8ce1b257267cb5bf1baa6907d3c6da0919153eaab838ef35a45c->leave($__internal_c428223422bc8ce1b257267cb5bf1baa6907d3c6da0919153eaab838ef35a45c_prof);

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
