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
        $__internal_6775ad5ca25c4b8f1df3ebf04996c072cb87196b0a22a9576cd3e49e5f63afbe = $this->env->getExtension("native_profiler");
        $__internal_6775ad5ca25c4b8f1df3ebf04996c072cb87196b0a22a9576cd3e49e5f63afbe->enter($__internal_6775ad5ca25c4b8f1df3ebf04996c072cb87196b0a22a9576cd3e49e5f63afbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6775ad5ca25c4b8f1df3ebf04996c072cb87196b0a22a9576cd3e49e5f63afbe->leave($__internal_6775ad5ca25c4b8f1df3ebf04996c072cb87196b0a22a9576cd3e49e5f63afbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e0729822986c0bc8144165c8d20d57f3d78821f3c7460eacce65816345dc774 = $this->env->getExtension("native_profiler");
        $__internal_7e0729822986c0bc8144165c8d20d57f3d78821f3c7460eacce65816345dc774->enter($__internal_7e0729822986c0bc8144165c8d20d57f3d78821f3c7460eacce65816345dc774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e0729822986c0bc8144165c8d20d57f3d78821f3c7460eacce65816345dc774->leave($__internal_7e0729822986c0bc8144165c8d20d57f3d78821f3c7460eacce65816345dc774_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67060e180d491b7c32a108a7f5845ea92b423e787d5d3f1db900d1633ca4f1e3 = $this->env->getExtension("native_profiler");
        $__internal_67060e180d491b7c32a108a7f5845ea92b423e787d5d3f1db900d1633ca4f1e3->enter($__internal_67060e180d491b7c32a108a7f5845ea92b423e787d5d3f1db900d1633ca4f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_67060e180d491b7c32a108a7f5845ea92b423e787d5d3f1db900d1633ca4f1e3->leave($__internal_67060e180d491b7c32a108a7f5845ea92b423e787d5d3f1db900d1633ca4f1e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c7b57dc827252684ac57b5aac89df6898aa4998ac51a17b4794e281c2f215b6 = $this->env->getExtension("native_profiler");
        $__internal_3c7b57dc827252684ac57b5aac89df6898aa4998ac51a17b4794e281c2f215b6->enter($__internal_3c7b57dc827252684ac57b5aac89df6898aa4998ac51a17b4794e281c2f215b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3c7b57dc827252684ac57b5aac89df6898aa4998ac51a17b4794e281c2f215b6->leave($__internal_3c7b57dc827252684ac57b5aac89df6898aa4998ac51a17b4794e281c2f215b6_prof);

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
