<?php

/* :default:accueilprof.html.twig */
class __TwigTemplate_41bd7347f7692c2acb33a4b9140f9fe1a7748bc552a55587ee3f85e88483980c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueilprof.html.twig", 1);
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
        $__internal_5b22eecd8b21f28110d9f457511f053eed3596a521291864b7cc0e6031ac862a = $this->env->getExtension("native_profiler");
        $__internal_5b22eecd8b21f28110d9f457511f053eed3596a521291864b7cc0e6031ac862a->enter($__internal_5b22eecd8b21f28110d9f457511f053eed3596a521291864b7cc0e6031ac862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueilprof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b22eecd8b21f28110d9f457511f053eed3596a521291864b7cc0e6031ac862a->leave($__internal_5b22eecd8b21f28110d9f457511f053eed3596a521291864b7cc0e6031ac862a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_917aece85de185f57b3e1a5e6dc84a1f44da9b75971aca251e045cad00ac928f = $this->env->getExtension("native_profiler");
        $__internal_917aece85de185f57b3e1a5e6dc84a1f44da9b75971aca251e045cad00ac928f->enter($__internal_917aece85de185f57b3e1a5e6dc84a1f44da9b75971aca251e045cad00ac928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_917aece85de185f57b3e1a5e6dc84a1f44da9b75971aca251e045cad00ac928f->leave($__internal_917aece85de185f57b3e1a5e6dc84a1f44da9b75971aca251e045cad00ac928f_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_38dd940b0faf86d3fed928938a329cad93e4f6dd6c16dd32176cad53fa4f3fea = $this->env->getExtension("native_profiler");
        $__internal_38dd940b0faf86d3fed928938a329cad93e4f6dd6c16dd32176cad53fa4f3fea->enter($__internal_38dd940b0faf86d3fed928938a329cad93e4f6dd6c16dd32176cad53fa4f3fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil prof  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_38dd940b0faf86d3fed928938a329cad93e4f6dd6c16dd32176cad53fa4f3fea->leave($__internal_38dd940b0faf86d3fed928938a329cad93e4f6dd6c16dd32176cad53fa4f3fea_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_d652cd1115b44834093aad2a698c50ef4cb2848be4ec5cf8f12643d57148be4c = $this->env->getExtension("native_profiler");
        $__internal_d652cd1115b44834093aad2a698c50ef4cb2848be4ec5cf8f12643d57148be4c->enter($__internal_d652cd1115b44834093aad2a698c50ef4cb2848be4ec5cf8f12643d57148be4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_d652cd1115b44834093aad2a698c50ef4cb2848be4ec5cf8f12643d57148be4c->leave($__internal_d652cd1115b44834093aad2a698c50ef4cb2848be4ec5cf8f12643d57148be4c_prof);

    }

    public function getTemplateName()
    {
        return ":default:accueilprof.html.twig";
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
