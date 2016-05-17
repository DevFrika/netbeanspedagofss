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
        $__internal_2ea79445fa7ef2b5d9db7d8c6a18f6edbf805b31220e14e0e8779ab03ec06109 = $this->env->getExtension("native_profiler");
        $__internal_2ea79445fa7ef2b5d9db7d8c6a18f6edbf805b31220e14e0e8779ab03ec06109->enter($__internal_2ea79445fa7ef2b5d9db7d8c6a18f6edbf805b31220e14e0e8779ab03ec06109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea79445fa7ef2b5d9db7d8c6a18f6edbf805b31220e14e0e8779ab03ec06109->leave($__internal_2ea79445fa7ef2b5d9db7d8c6a18f6edbf805b31220e14e0e8779ab03ec06109_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bec0273addf1b434c1c7ae99898cd665bbb63a3f70ef0e85e0b5f11cfcc3d67 = $this->env->getExtension("native_profiler");
        $__internal_7bec0273addf1b434c1c7ae99898cd665bbb63a3f70ef0e85e0b5f11cfcc3d67->enter($__internal_7bec0273addf1b434c1c7ae99898cd665bbb63a3f70ef0e85e0b5f11cfcc3d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7bec0273addf1b434c1c7ae99898cd665bbb63a3f70ef0e85e0b5f11cfcc3d67->leave($__internal_7bec0273addf1b434c1c7ae99898cd665bbb63a3f70ef0e85e0b5f11cfcc3d67_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_553fcceb8c2facf6445f53e70d0241a96aebb54c374fffa8ca2001132f998854 = $this->env->getExtension("native_profiler");
        $__internal_553fcceb8c2facf6445f53e70d0241a96aebb54c374fffa8ca2001132f998854->enter($__internal_553fcceb8c2facf6445f53e70d0241a96aebb54c374fffa8ca2001132f998854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_553fcceb8c2facf6445f53e70d0241a96aebb54c374fffa8ca2001132f998854->leave($__internal_553fcceb8c2facf6445f53e70d0241a96aebb54c374fffa8ca2001132f998854_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8851601c045598a2474776635ab4f73e00b01cd8c230d53f117a7e33fc1e1f2 = $this->env->getExtension("native_profiler");
        $__internal_c8851601c045598a2474776635ab4f73e00b01cd8c230d53f117a7e33fc1e1f2->enter($__internal_c8851601c045598a2474776635ab4f73e00b01cd8c230d53f117a7e33fc1e1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c8851601c045598a2474776635ab4f73e00b01cd8c230d53f117a7e33fc1e1f2->leave($__internal_c8851601c045598a2474776635ab4f73e00b01cd8c230d53f117a7e33fc1e1f2_prof);

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
