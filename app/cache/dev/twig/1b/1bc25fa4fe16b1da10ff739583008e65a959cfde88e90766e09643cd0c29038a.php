<?php

/* PedagoFssUserBundle:Default:index.html.twig */
class __TwigTemplate_eb5275123fe824c75f5cb72ee188e049a4887fac5ae8c25e399080046758dccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:index.html.twig", 1);
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
        $__internal_abecaec34f8fbeea175124011d03ec38b4f915f6dac55be79c94ea21ede9f592 = $this->env->getExtension("native_profiler");
        $__internal_abecaec34f8fbeea175124011d03ec38b4f915f6dac55be79c94ea21ede9f592->enter($__internal_abecaec34f8fbeea175124011d03ec38b4f915f6dac55be79c94ea21ede9f592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abecaec34f8fbeea175124011d03ec38b4f915f6dac55be79c94ea21ede9f592->leave($__internal_abecaec34f8fbeea175124011d03ec38b4f915f6dac55be79c94ea21ede9f592_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_52a5f2ec9f7ec6071efeafa8739cd2e9c5cbbace797e933321e718b31eada8c4 = $this->env->getExtension("native_profiler");
        $__internal_52a5f2ec9f7ec6071efeafa8739cd2e9c5cbbace797e933321e718b31eada8c4->enter($__internal_52a5f2ec9f7ec6071efeafa8739cd2e9c5cbbace797e933321e718b31eada8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur 
";
        
        $__internal_52a5f2ec9f7ec6071efeafa8739cd2e9c5cbbace797e933321e718b31eada8c4->leave($__internal_52a5f2ec9f7ec6071efeafa8739cd2e9c5cbbace797e933321e718b31eada8c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f42cd97a6e97f97647497c3c93d87815de3351d7b834a0d5fcb6133754f0972a = $this->env->getExtension("native_profiler");
        $__internal_f42cd97a6e97f97647497c3c93d87815de3351d7b834a0d5fcb6133754f0972a->enter($__internal_f42cd97a6e97f97647497c3c93d87815de3351d7b834a0d5fcb6133754f0972a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Normale </h2>

<p>
Page en construction
</p>

";
        
        $__internal_f42cd97a6e97f97647497c3c93d87815de3351d7b834a0d5fcb6133754f0972a->leave($__internal_f42cd97a6e97f97647497c3c93d87815de3351d7b834a0d5fcb6133754f0972a_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:index.html.twig";
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
/* Utilisateur */
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Normale </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
