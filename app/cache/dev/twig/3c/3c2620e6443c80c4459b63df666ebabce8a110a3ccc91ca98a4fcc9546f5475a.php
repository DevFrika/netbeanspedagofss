<?php

/* PedagoFssUserBundle:Default:etudiant.html.twig */
class __TwigTemplate_0bc6cba0a153d54292ba6fef079134765bbfabe8945eb44f058921625f61f840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:etudiant.html.twig", 1);
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
        $__internal_1f81a59258eeef1277d1aaf10d05026d7bd4e72a10fd9651b701121c0ba365ef = $this->env->getExtension("native_profiler");
        $__internal_1f81a59258eeef1277d1aaf10d05026d7bd4e72a10fd9651b701121c0ba365ef->enter($__internal_1f81a59258eeef1277d1aaf10d05026d7bd4e72a10fd9651b701121c0ba365ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f81a59258eeef1277d1aaf10d05026d7bd4e72a10fd9651b701121c0ba365ef->leave($__internal_1f81a59258eeef1277d1aaf10d05026d7bd4e72a10fd9651b701121c0ba365ef_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_29531372349cdda52abe9d7e7a16754cfed15291e26b79bb1ebf99d5eec4ab02 = $this->env->getExtension("native_profiler");
        $__internal_29531372349cdda52abe9d7e7a16754cfed15291e26b79bb1ebf99d5eec4ab02->enter($__internal_29531372349cdda52abe9d7e7a16754cfed15291e26b79bb1ebf99d5eec4ab02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Etudiant
";
        
        $__internal_29531372349cdda52abe9d7e7a16754cfed15291e26b79bb1ebf99d5eec4ab02->leave($__internal_29531372349cdda52abe9d7e7a16754cfed15291e26b79bb1ebf99d5eec4ab02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c064d06e9ed18ebf740f4e0718301b413e0f7463a96c0d9e17337d417cd1743 = $this->env->getExtension("native_profiler");
        $__internal_1c064d06e9ed18ebf740f4e0718301b413e0f7463a96c0d9e17337d417cd1743->enter($__internal_1c064d06e9ed18ebf740f4e0718301b413e0f7463a96c0d9e17337d417cd1743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Etudiant </h2>

<p>
Page en construction
</p>

";
        
        $__internal_1c064d06e9ed18ebf740f4e0718301b413e0f7463a96c0d9e17337d417cd1743->leave($__internal_1c064d06e9ed18ebf740f4e0718301b413e0f7463a96c0d9e17337d417cd1743_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:etudiant.html.twig";
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
