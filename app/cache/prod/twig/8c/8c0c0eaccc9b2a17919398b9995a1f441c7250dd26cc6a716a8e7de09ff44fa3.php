<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_68ecd81863d8918bd6d3d824e4049c372c1afa60e7574d07074bee7cc553b31a extends Twig_Template
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
        $__internal_3c8abc9ade714a2a8216ed3a39aa7ca05aeb30055cdec17288f980ff114b5366 = $this->env->getExtension("native_profiler");
        $__internal_3c8abc9ade714a2a8216ed3a39aa7ca05aeb30055cdec17288f980ff114b5366->enter($__internal_3c8abc9ade714a2a8216ed3a39aa7ca05aeb30055cdec17288f980ff114b5366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8abc9ade714a2a8216ed3a39aa7ca05aeb30055cdec17288f980ff114b5366->leave($__internal_3c8abc9ade714a2a8216ed3a39aa7ca05aeb30055cdec17288f980ff114b5366_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbfdae0bb3117aadaa9b9b81282b350cbd5da07e3df8ece6286f1b76521db650 = $this->env->getExtension("native_profiler");
        $__internal_cbfdae0bb3117aadaa9b9b81282b350cbd5da07e3df8ece6286f1b76521db650->enter($__internal_cbfdae0bb3117aadaa9b9b81282b350cbd5da07e3df8ece6286f1b76521db650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cbfdae0bb3117aadaa9b9b81282b350cbd5da07e3df8ece6286f1b76521db650->leave($__internal_cbfdae0bb3117aadaa9b9b81282b350cbd5da07e3df8ece6286f1b76521db650_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34d8e5afd0f1281401247a7e54ea1ab9a68a202107b8eb38c1dce6c12247c306 = $this->env->getExtension("native_profiler");
        $__internal_34d8e5afd0f1281401247a7e54ea1ab9a68a202107b8eb38c1dce6c12247c306->enter($__internal_34d8e5afd0f1281401247a7e54ea1ab9a68a202107b8eb38c1dce6c12247c306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_34d8e5afd0f1281401247a7e54ea1ab9a68a202107b8eb38c1dce6c12247c306->leave($__internal_34d8e5afd0f1281401247a7e54ea1ab9a68a202107b8eb38c1dce6c12247c306_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_688caba43df7ad0cf65626044f5fe892f5fceeae621a7f0c970fb1d22a5bcfd7 = $this->env->getExtension("native_profiler");
        $__internal_688caba43df7ad0cf65626044f5fe892f5fceeae621a7f0c970fb1d22a5bcfd7->enter($__internal_688caba43df7ad0cf65626044f5fe892f5fceeae621a7f0c970fb1d22a5bcfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_688caba43df7ad0cf65626044f5fe892f5fceeae621a7f0c970fb1d22a5bcfd7->leave($__internal_688caba43df7ad0cf65626044f5fe892f5fceeae621a7f0c970fb1d22a5bcfd7_prof);

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
