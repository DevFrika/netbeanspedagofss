<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ae9b8743ea2e0feb292e052b2d904afecd882827535e07285dc034d6246fd428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_34eea7f5d78daba251a457dfcd0b6e365bd2f34bd8bc2dd4c4b6021be90b139d = $this->env->getExtension("native_profiler");
        $__internal_34eea7f5d78daba251a457dfcd0b6e365bd2f34bd8bc2dd4c4b6021be90b139d->enter($__internal_34eea7f5d78daba251a457dfcd0b6e365bd2f34bd8bc2dd4c4b6021be90b139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34eea7f5d78daba251a457dfcd0b6e365bd2f34bd8bc2dd4c4b6021be90b139d->leave($__internal_34eea7f5d78daba251a457dfcd0b6e365bd2f34bd8bc2dd4c4b6021be90b139d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_489672661d075492f711ca99442ae0750c6531dba5749caba88ad2405c16f5bd = $this->env->getExtension("native_profiler");
        $__internal_489672661d075492f711ca99442ae0750c6531dba5749caba88ad2405c16f5bd->enter($__internal_489672661d075492f711ca99442ae0750c6531dba5749caba88ad2405c16f5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_489672661d075492f711ca99442ae0750c6531dba5749caba88ad2405c16f5bd->leave($__internal_489672661d075492f711ca99442ae0750c6531dba5749caba88ad2405c16f5bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_761ed56d0a3c4581f3d049eede3b4bb343e12c9f25fe2c0d2e1d33128bf6066c = $this->env->getExtension("native_profiler");
        $__internal_761ed56d0a3c4581f3d049eede3b4bb343e12c9f25fe2c0d2e1d33128bf6066c->enter($__internal_761ed56d0a3c4581f3d049eede3b4bb343e12c9f25fe2c0d2e1d33128bf6066c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_761ed56d0a3c4581f3d049eede3b4bb343e12c9f25fe2c0d2e1d33128bf6066c->leave($__internal_761ed56d0a3c4581f3d049eede3b4bb343e12c9f25fe2c0d2e1d33128bf6066c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5e9edd183d3300e49b2d4d926f483b46b044f09a65a947d11838a528d55a7e7 = $this->env->getExtension("native_profiler");
        $__internal_e5e9edd183d3300e49b2d4d926f483b46b044f09a65a947d11838a528d55a7e7->enter($__internal_e5e9edd183d3300e49b2d4d926f483b46b044f09a65a947d11838a528d55a7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e5e9edd183d3300e49b2d4d926f483b46b044f09a65a947d11838a528d55a7e7->leave($__internal_e5e9edd183d3300e49b2d4d926f483b46b044f09a65a947d11838a528d55a7e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
