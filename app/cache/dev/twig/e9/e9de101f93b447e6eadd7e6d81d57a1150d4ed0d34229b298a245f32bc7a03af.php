<?php

/* @PedagoFssUser/Default/etudiant.html.twig */
class __TwigTemplate_61e85163c98265d5ec7484904659f9cd39c9d595a2f7ff963b96875721fa90bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/etudiant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec594ab1213fa946ce1976211013965f6ff49e5e60d0ed6d9dc20b7483aae226 = $this->env->getExtension("native_profiler");
        $__internal_ec594ab1213fa946ce1976211013965f6ff49e5e60d0ed6d9dc20b7483aae226->enter($__internal_ec594ab1213fa946ce1976211013965f6ff49e5e60d0ed6d9dc20b7483aae226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec594ab1213fa946ce1976211013965f6ff49e5e60d0ed6d9dc20b7483aae226->leave($__internal_ec594ab1213fa946ce1976211013965f6ff49e5e60d0ed6d9dc20b7483aae226_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9295e9d2034ef4b1964aeaa183b7c8f29b17a196c211767cd4f75e553e1a6109 = $this->env->getExtension("native_profiler");
        $__internal_9295e9d2034ef4b1964aeaa183b7c8f29b17a196c211767cd4f75e553e1a6109->enter($__internal_9295e9d2034ef4b1964aeaa183b7c8f29b17a196c211767cd4f75e553e1a6109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Etudiant
";
        
        $__internal_9295e9d2034ef4b1964aeaa183b7c8f29b17a196c211767cd4f75e553e1a6109->leave($__internal_9295e9d2034ef4b1964aeaa183b7c8f29b17a196c211767cd4f75e553e1a6109_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbaa5d3266ea67824c2983e6638731dde083ef318288fc59cb744f98551c1472 = $this->env->getExtension("native_profiler");
        $__internal_dbaa5d3266ea67824c2983e6638731dde083ef318288fc59cb744f98551c1472->enter($__internal_dbaa5d3266ea67824c2983e6638731dde083ef318288fc59cb744f98551c1472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Etudiant </h2>

<p>
Page en construction
</p>

";
        
        $__internal_dbaa5d3266ea67824c2983e6638731dde083ef318288fc59cb744f98551c1472->leave($__internal_dbaa5d3266ea67824c2983e6638731dde083ef318288fc59cb744f98551c1472_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur - Etudiant*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Etudiant </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
