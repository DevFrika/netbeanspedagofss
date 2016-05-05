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
        $__internal_2b52ba3e5e2e42775e386d8aa33422b056dd9311989d5a2dbfb3112f1c10775c = $this->env->getExtension("native_profiler");
        $__internal_2b52ba3e5e2e42775e386d8aa33422b056dd9311989d5a2dbfb3112f1c10775c->enter($__internal_2b52ba3e5e2e42775e386d8aa33422b056dd9311989d5a2dbfb3112f1c10775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueilprof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b52ba3e5e2e42775e386d8aa33422b056dd9311989d5a2dbfb3112f1c10775c->leave($__internal_2b52ba3e5e2e42775e386d8aa33422b056dd9311989d5a2dbfb3112f1c10775c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3859782004d18cd296bcfa96efde7d701a7b7516aa4b0b94800629a1fafbe869 = $this->env->getExtension("native_profiler");
        $__internal_3859782004d18cd296bcfa96efde7d701a7b7516aa4b0b94800629a1fafbe869->enter($__internal_3859782004d18cd296bcfa96efde7d701a7b7516aa4b0b94800629a1fafbe869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3859782004d18cd296bcfa96efde7d701a7b7516aa4b0b94800629a1fafbe869->leave($__internal_3859782004d18cd296bcfa96efde7d701a7b7516aa4b0b94800629a1fafbe869_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_21bf880e285b8a33286ae230fbf8c336a727016a4573d1ec949bce57539e0a30 = $this->env->getExtension("native_profiler");
        $__internal_21bf880e285b8a33286ae230fbf8c336a727016a4573d1ec949bce57539e0a30->enter($__internal_21bf880e285b8a33286ae230fbf8c336a727016a4573d1ec949bce57539e0a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil prof  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_21bf880e285b8a33286ae230fbf8c336a727016a4573d1ec949bce57539e0a30->leave($__internal_21bf880e285b8a33286ae230fbf8c336a727016a4573d1ec949bce57539e0a30_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_72fd92e660472823f68de221e1bc0ec06dd6dcc64fd512a9eb4416310a38d1c7 = $this->env->getExtension("native_profiler");
        $__internal_72fd92e660472823f68de221e1bc0ec06dd6dcc64fd512a9eb4416310a38d1c7->enter($__internal_72fd92e660472823f68de221e1bc0ec06dd6dcc64fd512a9eb4416310a38d1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_72fd92e660472823f68de221e1bc0ec06dd6dcc64fd512a9eb4416310a38d1c7->leave($__internal_72fd92e660472823f68de221e1bc0ec06dd6dcc64fd512a9eb4416310a38d1c7_prof);

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
