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
        $__internal_c3f03a8c44dd3f543d89476bc45dd495f738af9d8384b9857af596ebb46a740c = $this->env->getExtension("native_profiler");
        $__internal_c3f03a8c44dd3f543d89476bc45dd495f738af9d8384b9857af596ebb46a740c->enter($__internal_c3f03a8c44dd3f543d89476bc45dd495f738af9d8384b9857af596ebb46a740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f03a8c44dd3f543d89476bc45dd495f738af9d8384b9857af596ebb46a740c->leave($__internal_c3f03a8c44dd3f543d89476bc45dd495f738af9d8384b9857af596ebb46a740c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc1738f7b2ea4451a02248ebc457fe4513b8c2ebbe92e13972eb187792241dfa = $this->env->getExtension("native_profiler");
        $__internal_bc1738f7b2ea4451a02248ebc457fe4513b8c2ebbe92e13972eb187792241dfa->enter($__internal_bc1738f7b2ea4451a02248ebc457fe4513b8c2ebbe92e13972eb187792241dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bc1738f7b2ea4451a02248ebc457fe4513b8c2ebbe92e13972eb187792241dfa->leave($__internal_bc1738f7b2ea4451a02248ebc457fe4513b8c2ebbe92e13972eb187792241dfa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d19d7a320d0853a80dbe60d06913aa7c24453856155b4747d1102eec638797e8 = $this->env->getExtension("native_profiler");
        $__internal_d19d7a320d0853a80dbe60d06913aa7c24453856155b4747d1102eec638797e8->enter($__internal_d19d7a320d0853a80dbe60d06913aa7c24453856155b4747d1102eec638797e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d19d7a320d0853a80dbe60d06913aa7c24453856155b4747d1102eec638797e8->leave($__internal_d19d7a320d0853a80dbe60d06913aa7c24453856155b4747d1102eec638797e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_140b744d7706ebff4c19bc044b3ccb10da187174a7d9222e772de665b0038883 = $this->env->getExtension("native_profiler");
        $__internal_140b744d7706ebff4c19bc044b3ccb10da187174a7d9222e772de665b0038883->enter($__internal_140b744d7706ebff4c19bc044b3ccb10da187174a7d9222e772de665b0038883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_140b744d7706ebff4c19bc044b3ccb10da187174a7d9222e772de665b0038883->leave($__internal_140b744d7706ebff4c19bc044b3ccb10da187174a7d9222e772de665b0038883_prof);

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
