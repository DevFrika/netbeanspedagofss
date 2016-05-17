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
        $__internal_f2cacee6df1fae34ed3735aef896fc9ddc2289611df0bbfb3e1624edcbe53714 = $this->env->getExtension("native_profiler");
        $__internal_f2cacee6df1fae34ed3735aef896fc9ddc2289611df0bbfb3e1624edcbe53714->enter($__internal_f2cacee6df1fae34ed3735aef896fc9ddc2289611df0bbfb3e1624edcbe53714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2cacee6df1fae34ed3735aef896fc9ddc2289611df0bbfb3e1624edcbe53714->leave($__internal_f2cacee6df1fae34ed3735aef896fc9ddc2289611df0bbfb3e1624edcbe53714_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bb7347c6f6b49dacd20a556690f9bd57bb92a9a5434f5bc510d6078b220627c = $this->env->getExtension("native_profiler");
        $__internal_1bb7347c6f6b49dacd20a556690f9bd57bb92a9a5434f5bc510d6078b220627c->enter($__internal_1bb7347c6f6b49dacd20a556690f9bd57bb92a9a5434f5bc510d6078b220627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1bb7347c6f6b49dacd20a556690f9bd57bb92a9a5434f5bc510d6078b220627c->leave($__internal_1bb7347c6f6b49dacd20a556690f9bd57bb92a9a5434f5bc510d6078b220627c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc1b65ccd20eec7b81147d8606096ddfadbf041e019f5b8ccb634514a88354ff = $this->env->getExtension("native_profiler");
        $__internal_bc1b65ccd20eec7b81147d8606096ddfadbf041e019f5b8ccb634514a88354ff->enter($__internal_bc1b65ccd20eec7b81147d8606096ddfadbf041e019f5b8ccb634514a88354ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc1b65ccd20eec7b81147d8606096ddfadbf041e019f5b8ccb634514a88354ff->leave($__internal_bc1b65ccd20eec7b81147d8606096ddfadbf041e019f5b8ccb634514a88354ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d670908da66d8abede38b5b3f92fd4a725c8a4c569d4673881c441e522d15fc = $this->env->getExtension("native_profiler");
        $__internal_7d670908da66d8abede38b5b3f92fd4a725c8a4c569d4673881c441e522d15fc->enter($__internal_7d670908da66d8abede38b5b3f92fd4a725c8a4c569d4673881c441e522d15fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7d670908da66d8abede38b5b3f92fd4a725c8a4c569d4673881c441e522d15fc->leave($__internal_7d670908da66d8abede38b5b3f92fd4a725c8a4c569d4673881c441e522d15fc_prof);

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
