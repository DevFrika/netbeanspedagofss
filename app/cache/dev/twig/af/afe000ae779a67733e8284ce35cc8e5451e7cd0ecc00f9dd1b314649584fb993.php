<?php

/* :default:accueil.html.twig */
class __TwigTemplate_e20afb394dd804c15e349ec4fe5a960c788315661c819f5a3a59525940b4784f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueil.html.twig", 1);
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
        $__internal_d46db7d71be6d1d9e1b2fd4dd103df0e21b2d3b50d21a2055d97d3a5fa6cbc29 = $this->env->getExtension("native_profiler");
        $__internal_d46db7d71be6d1d9e1b2fd4dd103df0e21b2d3b50d21a2055d97d3a5fa6cbc29->enter($__internal_d46db7d71be6d1d9e1b2fd4dd103df0e21b2d3b50d21a2055d97d3a5fa6cbc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46db7d71be6d1d9e1b2fd4dd103df0e21b2d3b50d21a2055d97d3a5fa6cbc29->leave($__internal_d46db7d71be6d1d9e1b2fd4dd103df0e21b2d3b50d21a2055d97d3a5fa6cbc29_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_b50e78faadf6660ec9fea901eaaed4bfe5d4eee409eebba0b4253122d392fb65 = $this->env->getExtension("native_profiler");
        $__internal_b50e78faadf6660ec9fea901eaaed4bfe5d4eee409eebba0b4253122d392fb65->enter($__internal_b50e78faadf6660ec9fea901eaaed4bfe5d4eee409eebba0b4253122d392fb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil   </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_b50e78faadf6660ec9fea901eaaed4bfe5d4eee409eebba0b4253122d392fb65->leave($__internal_b50e78faadf6660ec9fea901eaaed4bfe5d4eee409eebba0b4253122d392fb65_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_cb33e0e429fe334831e21ac540eab453a761deed2bd02460fa28975fb2452896 = $this->env->getExtension("native_profiler");
        $__internal_cb33e0e429fe334831e21ac540eab453a761deed2bd02460fa28975fb2452896->enter($__internal_cb33e0e429fe334831e21ac540eab453a761deed2bd02460fa28975fb2452896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t <h2> Body content </h2>
\t\t 
\t\t";
        
        $__internal_cb33e0e429fe334831e21ac540eab453a761deed2bd02460fa28975fb2452896->leave($__internal_cb33e0e429fe334831e21ac540eab453a761deed2bd02460fa28975fb2452896_prof);

    }

    public function getTemplateName()
    {
        return ":default:accueil.html.twig";
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
