<?php

/* default/accueiladmin.html.twig */
class __TwigTemplate_caef2b783c2153e99294d00ac6ea32ff26c1454f760245ca8c5da6ec29f002d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "default/accueiladmin.html.twig", 1);
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
        $__internal_4067004b1aa6a1a336d9a220d9235cea0a6a5a1a370d321ce497429f072f29c9 = $this->env->getExtension("native_profiler");
        $__internal_4067004b1aa6a1a336d9a220d9235cea0a6a5a1a370d321ce497429f072f29c9->enter($__internal_4067004b1aa6a1a336d9a220d9235cea0a6a5a1a370d321ce497429f072f29c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueiladmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4067004b1aa6a1a336d9a220d9235cea0a6a5a1a370d321ce497429f072f29c9->leave($__internal_4067004b1aa6a1a336d9a220d9235cea0a6a5a1a370d321ce497429f072f29c9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_454ffef0b0e2cce606538e12b086369aa9ce9b8039173e8c6b47714400c12ed0 = $this->env->getExtension("native_profiler");
        $__internal_454ffef0b0e2cce606538e12b086369aa9ce9b8039173e8c6b47714400c12ed0->enter($__internal_454ffef0b0e2cce606538e12b086369aa9ce9b8039173e8c6b47714400c12ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_454ffef0b0e2cce606538e12b086369aa9ce9b8039173e8c6b47714400c12ed0->leave($__internal_454ffef0b0e2cce606538e12b086369aa9ce9b8039173e8c6b47714400c12ed0_prof);

    }

    // line 5
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_aae0627e70cd7a607620ec46e3e9d1ae89ca739c173cdbaff004cded282f3398 = $this->env->getExtension("native_profiler");
        $__internal_aae0627e70cd7a607620ec46e3e9d1ae89ca739c173cdbaff004cded282f3398->enter($__internal_aae0627e70cd7a607620ec46e3e9d1ae89ca739c173cdbaff004cded282f3398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 6
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil administration  </h2>

\t\t\t<p> Page en construction ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_aae0627e70cd7a607620ec46e3e9d1ae89ca739c173cdbaff004cded282f3398->leave($__internal_aae0627e70cd7a607620ec46e3e9d1ae89ca739c173cdbaff004cded282f3398_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_95b6463c6c95f033f230ba2ab388c8f3f98b66334d58e5ec0b59916119143568 = $this->env->getExtension("native_profiler");
        $__internal_95b6463c6c95f033f230ba2ab388c8f3f98b66334d58e5ec0b59916119143568->enter($__internal_95b6463c6c95f033f230ba2ab388c8f3f98b66334d58e5ec0b59916119143568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t";
        
        $__internal_95b6463c6c95f033f230ba2ab388c8f3f98b66334d58e5ec0b59916119143568->leave($__internal_95b6463c6c95f033f230ba2ab388c8f3f98b66334d58e5ec0b59916119143568_prof);

    }

    public function getTemplateName()
    {
        return "default/accueiladmin.html.twig";
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
