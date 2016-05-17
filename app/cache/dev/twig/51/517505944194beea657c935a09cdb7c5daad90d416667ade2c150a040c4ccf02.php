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
        $__internal_0edb2f4f96e98470a8b90c91634c0ca6b3153bd42d8a2e39be2c6bbcfe48d744 = $this->env->getExtension("native_profiler");
        $__internal_0edb2f4f96e98470a8b90c91634c0ca6b3153bd42d8a2e39be2c6bbcfe48d744->enter($__internal_0edb2f4f96e98470a8b90c91634c0ca6b3153bd42d8a2e39be2c6bbcfe48d744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0edb2f4f96e98470a8b90c91634c0ca6b3153bd42d8a2e39be2c6bbcfe48d744->leave($__internal_0edb2f4f96e98470a8b90c91634c0ca6b3153bd42d8a2e39be2c6bbcfe48d744_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31ebf3b9a207a41a9b5f851a3f0468f827ccdf0a6a0b0d485b1a35cfef21549f = $this->env->getExtension("native_profiler");
        $__internal_31ebf3b9a207a41a9b5f851a3f0468f827ccdf0a6a0b0d485b1a35cfef21549f->enter($__internal_31ebf3b9a207a41a9b5f851a3f0468f827ccdf0a6a0b0d485b1a35cfef21549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_31ebf3b9a207a41a9b5f851a3f0468f827ccdf0a6a0b0d485b1a35cfef21549f->leave($__internal_31ebf3b9a207a41a9b5f851a3f0468f827ccdf0a6a0b0d485b1a35cfef21549f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6aa7b684ee69219994a4c2c1b947ca8ea421e165e76cf7c69163078280ae4fb6 = $this->env->getExtension("native_profiler");
        $__internal_6aa7b684ee69219994a4c2c1b947ca8ea421e165e76cf7c69163078280ae4fb6->enter($__internal_6aa7b684ee69219994a4c2c1b947ca8ea421e165e76cf7c69163078280ae4fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6aa7b684ee69219994a4c2c1b947ca8ea421e165e76cf7c69163078280ae4fb6->leave($__internal_6aa7b684ee69219994a4c2c1b947ca8ea421e165e76cf7c69163078280ae4fb6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b2b012c2a480517d4088c3872f4c78bb81bb55fdee967f11dea487ecc6133cd = $this->env->getExtension("native_profiler");
        $__internal_3b2b012c2a480517d4088c3872f4c78bb81bb55fdee967f11dea487ecc6133cd->enter($__internal_3b2b012c2a480517d4088c3872f4c78bb81bb55fdee967f11dea487ecc6133cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3b2b012c2a480517d4088c3872f4c78bb81bb55fdee967f11dea487ecc6133cd->leave($__internal_3b2b012c2a480517d4088c3872f4c78bb81bb55fdee967f11dea487ecc6133cd_prof);

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
