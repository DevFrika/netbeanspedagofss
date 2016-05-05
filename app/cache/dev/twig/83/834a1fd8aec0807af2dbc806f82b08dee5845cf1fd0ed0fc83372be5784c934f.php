<?php

/* FssWebsiteDepartementBundle:Default:profindex.html.twig */
class __TwigTemplate_79fb73034bb7be053c9c6a6dfb326202c4af5e1ce1ed1226f7d6218c5917907a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:profindex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FssWebsiteDepartementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e27e5343cc494e1ee4123d640e899c232319d8381111596de2d519a12f6fc1fc = $this->env->getExtension("native_profiler");
        $__internal_e27e5343cc494e1ee4123d640e899c232319d8381111596de2d519a12f6fc1fc->enter($__internal_e27e5343cc494e1ee4123d640e899c232319d8381111596de2d519a12f6fc1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:profindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e27e5343cc494e1ee4123d640e899c232319d8381111596de2d519a12f6fc1fc->leave($__internal_e27e5343cc494e1ee4123d640e899c232319d8381111596de2d519a12f6fc1fc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3df36fde833e019e247895e81dbb5843d52b2ff60291146dd9ae6727d038413 = $this->env->getExtension("native_profiler");
        $__internal_a3df36fde833e019e247895e81dbb5843d52b2ff60291146dd9ae6727d038413->enter($__internal_a3df36fde833e019e247895e81dbb5843d52b2ff60291146dd9ae6727d038413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_a3df36fde833e019e247895e81dbb5843d52b2ff60291146dd9ae6727d038413->leave($__internal_a3df36fde833e019e247895e81dbb5843d52b2ff60291146dd9ae6727d038413_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_709b13f88d9c1ac39ee7727c4159d133b56c26217a77d6998b4c343046b5e576 = $this->env->getExtension("native_profiler");
        $__internal_709b13f88d9c1ac39ee7727c4159d133b56c26217a77d6998b4c343046b5e576->enter($__internal_709b13f88d9c1ac39ee7727c4159d133b56c26217a77d6998b4c343046b5e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page prof - Page en construction </h2>

       



";
        
        $__internal_709b13f88d9c1ac39ee7727c4159d133b56c26217a77d6998b4c343046b5e576->leave($__internal_709b13f88d9c1ac39ee7727c4159d133b56c26217a77d6998b4c343046b5e576_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:profindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Admin*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* <h2>Departement - Page prof - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
