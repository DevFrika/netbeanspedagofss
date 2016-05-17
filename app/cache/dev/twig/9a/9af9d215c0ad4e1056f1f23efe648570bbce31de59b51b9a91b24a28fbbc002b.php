<?php

/* :default:accueiladmin.html.twig */
class __TwigTemplate_578066b423c5a88ea47ac6417b2daa176f608607226c4ef1d4caa627064dd09f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueiladmin.html.twig", 1);
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
        $__internal_b72da64aae22680c27696f0d15e480398f1604a104bc08ecbe2036c6ccfd427c = $this->env->getExtension("native_profiler");
        $__internal_b72da64aae22680c27696f0d15e480398f1604a104bc08ecbe2036c6ccfd427c->enter($__internal_b72da64aae22680c27696f0d15e480398f1604a104bc08ecbe2036c6ccfd427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueiladmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72da64aae22680c27696f0d15e480398f1604a104bc08ecbe2036c6ccfd427c->leave($__internal_b72da64aae22680c27696f0d15e480398f1604a104bc08ecbe2036c6ccfd427c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e415956c0c9f56f56ac9b1852a0a9df32292b8148be1eb957171d70a22e9f8 = $this->env->getExtension("native_profiler");
        $__internal_f3e415956c0c9f56f56ac9b1852a0a9df32292b8148be1eb957171d70a22e9f8->enter($__internal_f3e415956c0c9f56f56ac9b1852a0a9df32292b8148be1eb957171d70a22e9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3e415956c0c9f56f56ac9b1852a0a9df32292b8148be1eb957171d70a22e9f8->leave($__internal_f3e415956c0c9f56f56ac9b1852a0a9df32292b8148be1eb957171d70a22e9f8_prof);

    }

    // line 5
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_5c4d4cb071146eb38a955b1c9b7195d490012f4faedf0e77152d9365318875a0 = $this->env->getExtension("native_profiler");
        $__internal_5c4d4cb071146eb38a955b1c9b7195d490012f4faedf0e77152d9365318875a0->enter($__internal_5c4d4cb071146eb38a955b1c9b7195d490012f4faedf0e77152d9365318875a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 6
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil administration  </h2>

\t\t\t<p> Page en construction ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_5c4d4cb071146eb38a955b1c9b7195d490012f4faedf0e77152d9365318875a0->leave($__internal_5c4d4cb071146eb38a955b1c9b7195d490012f4faedf0e77152d9365318875a0_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_e69236315f950e8212c10ad637329a23eacdb02fb5470bd726bf0d3c5dd1c0e1 = $this->env->getExtension("native_profiler");
        $__internal_e69236315f950e8212c10ad637329a23eacdb02fb5470bd726bf0d3c5dd1c0e1->enter($__internal_e69236315f950e8212c10ad637329a23eacdb02fb5470bd726bf0d3c5dd1c0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t";
        
        $__internal_e69236315f950e8212c10ad637329a23eacdb02fb5470bd726bf0d3c5dd1c0e1->leave($__internal_e69236315f950e8212c10ad637329a23eacdb02fb5470bd726bf0d3c5dd1c0e1_prof);

    }

    public function getTemplateName()
    {
        return ":default:accueiladmin.html.twig";
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
