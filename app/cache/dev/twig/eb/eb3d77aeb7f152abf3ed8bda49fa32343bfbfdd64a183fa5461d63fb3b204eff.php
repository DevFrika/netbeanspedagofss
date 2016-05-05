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
        $__internal_d9f21fe0a4b3ceaccb2941367cf339c639ccefd96e6de76336123c0023e78ca0 = $this->env->getExtension("native_profiler");
        $__internal_d9f21fe0a4b3ceaccb2941367cf339c639ccefd96e6de76336123c0023e78ca0->enter($__internal_d9f21fe0a4b3ceaccb2941367cf339c639ccefd96e6de76336123c0023e78ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueiladmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f21fe0a4b3ceaccb2941367cf339c639ccefd96e6de76336123c0023e78ca0->leave($__internal_d9f21fe0a4b3ceaccb2941367cf339c639ccefd96e6de76336123c0023e78ca0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e7b1e0f7978505f376d72e9c6b75844480db3e9c57f64148f510f8b36ce4485 = $this->env->getExtension("native_profiler");
        $__internal_4e7b1e0f7978505f376d72e9c6b75844480db3e9c57f64148f510f8b36ce4485->enter($__internal_4e7b1e0f7978505f376d72e9c6b75844480db3e9c57f64148f510f8b36ce4485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e7b1e0f7978505f376d72e9c6b75844480db3e9c57f64148f510f8b36ce4485->leave($__internal_4e7b1e0f7978505f376d72e9c6b75844480db3e9c57f64148f510f8b36ce4485_prof);

    }

    // line 5
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_3e82d3f050b5626ad6e7c74d1406f732540b5e18ef321af3a8b642eea8369114 = $this->env->getExtension("native_profiler");
        $__internal_3e82d3f050b5626ad6e7c74d1406f732540b5e18ef321af3a8b642eea8369114->enter($__internal_3e82d3f050b5626ad6e7c74d1406f732540b5e18ef321af3a8b642eea8369114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 6
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil administration  </h2>

\t\t\t<p> Page en construction ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_3e82d3f050b5626ad6e7c74d1406f732540b5e18ef321af3a8b642eea8369114->leave($__internal_3e82d3f050b5626ad6e7c74d1406f732540b5e18ef321af3a8b642eea8369114_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_dd8ef30fd4f3ec467aeb1dc7eba86515ad14a52583aaad4225b587cdf6e819cb = $this->env->getExtension("native_profiler");
        $__internal_dd8ef30fd4f3ec467aeb1dc7eba86515ad14a52583aaad4225b587cdf6e819cb->enter($__internal_dd8ef30fd4f3ec467aeb1dc7eba86515ad14a52583aaad4225b587cdf6e819cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t";
        
        $__internal_dd8ef30fd4f3ec467aeb1dc7eba86515ad14a52583aaad4225b587cdf6e819cb->leave($__internal_dd8ef30fd4f3ec467aeb1dc7eba86515ad14a52583aaad4225b587cdf6e819cb_prof);

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
