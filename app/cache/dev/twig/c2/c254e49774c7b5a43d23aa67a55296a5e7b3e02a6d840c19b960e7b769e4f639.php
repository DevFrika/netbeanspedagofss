<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ebd69dedc3932d6db4353db0218b2ad520b30dc053464eab96d93708291991e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_828609a5795d5005f472173d2194cc4dbee9c1a08005aec9fab5466cd7d82159 = $this->env->getExtension("native_profiler");
        $__internal_828609a5795d5005f472173d2194cc4dbee9c1a08005aec9fab5466cd7d82159->enter($__internal_828609a5795d5005f472173d2194cc4dbee9c1a08005aec9fab5466cd7d82159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_828609a5795d5005f472173d2194cc4dbee9c1a08005aec9fab5466cd7d82159->leave($__internal_828609a5795d5005f472173d2194cc4dbee9c1a08005aec9fab5466cd7d82159_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b233399699f004322d884e818d9149e8555d65fe98b9cb7a7ef1508e2ae3058 = $this->env->getExtension("native_profiler");
        $__internal_3b233399699f004322d884e818d9149e8555d65fe98b9cb7a7ef1508e2ae3058->enter($__internal_3b233399699f004322d884e818d9149e8555d65fe98b9cb7a7ef1508e2ae3058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3b233399699f004322d884e818d9149e8555d65fe98b9cb7a7ef1508e2ae3058->leave($__internal_3b233399699f004322d884e818d9149e8555d65fe98b9cb7a7ef1508e2ae3058_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61a3e7efd93a7f84d5d537aa8aaf194b649937ed0127ce691492b3889b7fe629 = $this->env->getExtension("native_profiler");
        $__internal_61a3e7efd93a7f84d5d537aa8aaf194b649937ed0127ce691492b3889b7fe629->enter($__internal_61a3e7efd93a7f84d5d537aa8aaf194b649937ed0127ce691492b3889b7fe629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_61a3e7efd93a7f84d5d537aa8aaf194b649937ed0127ce691492b3889b7fe629->leave($__internal_61a3e7efd93a7f84d5d537aa8aaf194b649937ed0127ce691492b3889b7fe629_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
