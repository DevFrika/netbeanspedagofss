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
        $__internal_c27ac7169d55e60398bd200ba8351aa203422f2f9a3cebb6c9255f2b1842728c = $this->env->getExtension("native_profiler");
        $__internal_c27ac7169d55e60398bd200ba8351aa203422f2f9a3cebb6c9255f2b1842728c->enter($__internal_c27ac7169d55e60398bd200ba8351aa203422f2f9a3cebb6c9255f2b1842728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27ac7169d55e60398bd200ba8351aa203422f2f9a3cebb6c9255f2b1842728c->leave($__internal_c27ac7169d55e60398bd200ba8351aa203422f2f9a3cebb6c9255f2b1842728c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_086f6964409637d67300f46d0fa831b745f412b976ee3c7ef1ba3c6d73e7256c = $this->env->getExtension("native_profiler");
        $__internal_086f6964409637d67300f46d0fa831b745f412b976ee3c7ef1ba3c6d73e7256c->enter($__internal_086f6964409637d67300f46d0fa831b745f412b976ee3c7ef1ba3c6d73e7256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Etudiant
";
        
        $__internal_086f6964409637d67300f46d0fa831b745f412b976ee3c7ef1ba3c6d73e7256c->leave($__internal_086f6964409637d67300f46d0fa831b745f412b976ee3c7ef1ba3c6d73e7256c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a716caf5eb5cea282ca4fb7cb7c1b801442c3fc32a133fbccbc86d54c97d5170 = $this->env->getExtension("native_profiler");
        $__internal_a716caf5eb5cea282ca4fb7cb7c1b801442c3fc32a133fbccbc86d54c97d5170->enter($__internal_a716caf5eb5cea282ca4fb7cb7c1b801442c3fc32a133fbccbc86d54c97d5170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Etudiant </h2>

<p>
Page en construction
</p>

";
        
        $__internal_a716caf5eb5cea282ca4fb7cb7c1b801442c3fc32a133fbccbc86d54c97d5170->leave($__internal_a716caf5eb5cea282ca4fb7cb7c1b801442c3fc32a133fbccbc86d54c97d5170_prof);

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
