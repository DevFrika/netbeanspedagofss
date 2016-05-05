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
        $__internal_ee08100c24fce16553a424583ea96ebcab7be8b62a31131d072f63be8034c646 = $this->env->getExtension("native_profiler");
        $__internal_ee08100c24fce16553a424583ea96ebcab7be8b62a31131d072f63be8034c646->enter($__internal_ee08100c24fce16553a424583ea96ebcab7be8b62a31131d072f63be8034c646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueiladmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee08100c24fce16553a424583ea96ebcab7be8b62a31131d072f63be8034c646->leave($__internal_ee08100c24fce16553a424583ea96ebcab7be8b62a31131d072f63be8034c646_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_15fc58ff48f5346e1432f00feac2691fe0c1c52926a10d7cc7183cd324840e28 = $this->env->getExtension("native_profiler");
        $__internal_15fc58ff48f5346e1432f00feac2691fe0c1c52926a10d7cc7183cd324840e28->enter($__internal_15fc58ff48f5346e1432f00feac2691fe0c1c52926a10d7cc7183cd324840e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15fc58ff48f5346e1432f00feac2691fe0c1c52926a10d7cc7183cd324840e28->leave($__internal_15fc58ff48f5346e1432f00feac2691fe0c1c52926a10d7cc7183cd324840e28_prof);

    }

    // line 5
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_000d43766bcf09c81ea1d879bcb0be17e2cf66fb2f1be3a61315cb7ceba61779 = $this->env->getExtension("native_profiler");
        $__internal_000d43766bcf09c81ea1d879bcb0be17e2cf66fb2f1be3a61315cb7ceba61779->enter($__internal_000d43766bcf09c81ea1d879bcb0be17e2cf66fb2f1be3a61315cb7ceba61779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 6
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil administration  </h2>

\t\t\t<p> Page en construction ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_000d43766bcf09c81ea1d879bcb0be17e2cf66fb2f1be3a61315cb7ceba61779->leave($__internal_000d43766bcf09c81ea1d879bcb0be17e2cf66fb2f1be3a61315cb7ceba61779_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_66918b4a876aa8688e2ae87e279f2431d36c689519e460dde3e0f8e1d8e75209 = $this->env->getExtension("native_profiler");
        $__internal_66918b4a876aa8688e2ae87e279f2431d36c689519e460dde3e0f8e1d8e75209->enter($__internal_66918b4a876aa8688e2ae87e279f2431d36c689519e460dde3e0f8e1d8e75209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t";
        
        $__internal_66918b4a876aa8688e2ae87e279f2431d36c689519e460dde3e0f8e1d8e75209->leave($__internal_66918b4a876aa8688e2ae87e279f2431d36c689519e460dde3e0f8e1d8e75209_prof);

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
