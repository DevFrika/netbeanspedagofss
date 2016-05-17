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
        $__internal_a7020801e7feaef15767fdab0b1f63c30fcfbffb88dbb4f67697e60b1d9fb99d = $this->env->getExtension("native_profiler");
        $__internal_a7020801e7feaef15767fdab0b1f63c30fcfbffb88dbb4f67697e60b1d9fb99d->enter($__internal_a7020801e7feaef15767fdab0b1f63c30fcfbffb88dbb4f67697e60b1d9fb99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueilprof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7020801e7feaef15767fdab0b1f63c30fcfbffb88dbb4f67697e60b1d9fb99d->leave($__internal_a7020801e7feaef15767fdab0b1f63c30fcfbffb88dbb4f67697e60b1d9fb99d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2223f922b71c99b8ff34b04410c74060838b53b49c379418ea0f995a106b2678 = $this->env->getExtension("native_profiler");
        $__internal_2223f922b71c99b8ff34b04410c74060838b53b49c379418ea0f995a106b2678->enter($__internal_2223f922b71c99b8ff34b04410c74060838b53b49c379418ea0f995a106b2678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2223f922b71c99b8ff34b04410c74060838b53b49c379418ea0f995a106b2678->leave($__internal_2223f922b71c99b8ff34b04410c74060838b53b49c379418ea0f995a106b2678_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_367ad41dbee536d5c09d499651f50041587e8525351c6e8e3d4e4267392251d2 = $this->env->getExtension("native_profiler");
        $__internal_367ad41dbee536d5c09d499651f50041587e8525351c6e8e3d4e4267392251d2->enter($__internal_367ad41dbee536d5c09d499651f50041587e8525351c6e8e3d4e4267392251d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil prof  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_367ad41dbee536d5c09d499651f50041587e8525351c6e8e3d4e4267392251d2->leave($__internal_367ad41dbee536d5c09d499651f50041587e8525351c6e8e3d4e4267392251d2_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_1a8385684ae481163ec23f162d5ebaf8c0207dfff9313658ed2f3b9566d5e722 = $this->env->getExtension("native_profiler");
        $__internal_1a8385684ae481163ec23f162d5ebaf8c0207dfff9313658ed2f3b9566d5e722->enter($__internal_1a8385684ae481163ec23f162d5ebaf8c0207dfff9313658ed2f3b9566d5e722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_1a8385684ae481163ec23f162d5ebaf8c0207dfff9313658ed2f3b9566d5e722->leave($__internal_1a8385684ae481163ec23f162d5ebaf8c0207dfff9313658ed2f3b9566d5e722_prof);

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
