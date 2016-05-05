<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e1dfb84a8d3cbd39429d6f92dc7e3f76d7dc5f3082975cb70fff01a2a70f8e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f0f4f4465d4a04508d6cb7fd1f1c0a1c8f2a6119dbfd3f66daf60e1ad09bc8c3 = $this->env->getExtension("native_profiler");
        $__internal_f0f4f4465d4a04508d6cb7fd1f1c0a1c8f2a6119dbfd3f66daf60e1ad09bc8c3->enter($__internal_f0f4f4465d4a04508d6cb7fd1f1c0a1c8f2a6119dbfd3f66daf60e1ad09bc8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f4f4465d4a04508d6cb7fd1f1c0a1c8f2a6119dbfd3f66daf60e1ad09bc8c3->leave($__internal_f0f4f4465d4a04508d6cb7fd1f1c0a1c8f2a6119dbfd3f66daf60e1ad09bc8c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_861272710bf280c3452cdf4612c57c108295f5e8253346823e38d9efb38e6e4b = $this->env->getExtension("native_profiler");
        $__internal_861272710bf280c3452cdf4612c57c108295f5e8253346823e38d9efb38e6e4b->enter($__internal_861272710bf280c3452cdf4612c57c108295f5e8253346823e38d9efb38e6e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_861272710bf280c3452cdf4612c57c108295f5e8253346823e38d9efb38e6e4b->leave($__internal_861272710bf280c3452cdf4612c57c108295f5e8253346823e38d9efb38e6e4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10af3c0770db1e94e2e953e99327a7a2dba4946f458544df7898fe9df69c677a = $this->env->getExtension("native_profiler");
        $__internal_10af3c0770db1e94e2e953e99327a7a2dba4946f458544df7898fe9df69c677a->enter($__internal_10af3c0770db1e94e2e953e99327a7a2dba4946f458544df7898fe9df69c677a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10af3c0770db1e94e2e953e99327a7a2dba4946f458544df7898fe9df69c677a->leave($__internal_10af3c0770db1e94e2e953e99327a7a2dba4946f458544df7898fe9df69c677a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e75f15643cf9948994987927fa2517df0c360ceef71efbe37b7979ab5fb89cea = $this->env->getExtension("native_profiler");
        $__internal_e75f15643cf9948994987927fa2517df0c360ceef71efbe37b7979ab5fb89cea->enter($__internal_e75f15643cf9948994987927fa2517df0c360ceef71efbe37b7979ab5fb89cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e75f15643cf9948994987927fa2517df0c360ceef71efbe37b7979ab5fb89cea->leave($__internal_e75f15643cf9948994987927fa2517df0c360ceef71efbe37b7979ab5fb89cea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
