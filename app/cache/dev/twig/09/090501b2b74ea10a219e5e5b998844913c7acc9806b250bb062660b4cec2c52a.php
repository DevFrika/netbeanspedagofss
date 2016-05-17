<?php

/* PedagoFssUserBundle:Default:signin.html.twig */
class __TwigTemplate_bca49d9b69b97a983bdd2b29c78bd8503f144b8d4e6395fe66e417c515018299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:signin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'modals' => array($this, 'block_modals'),
            'buttonsignin' => array($this, 'block_buttonsignin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90ffeaad2ee836b871508cf6bc8d93b9f7b69875f20cccea2e3e187b4dbf7434 = $this->env->getExtension("native_profiler");
        $__internal_90ffeaad2ee836b871508cf6bc8d93b9f7b69875f20cccea2e3e187b4dbf7434->enter($__internal_90ffeaad2ee836b871508cf6bc8d93b9f7b69875f20cccea2e3e187b4dbf7434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ffeaad2ee836b871508cf6bc8d93b9f7b69875f20cccea2e3e187b4dbf7434->leave($__internal_90ffeaad2ee836b871508cf6bc8d93b9f7b69875f20cccea2e3e187b4dbf7434_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0bbc6bef172561f8cf1edbb435776da668eb985460757d15d3a65e959f50f90 = $this->env->getExtension("native_profiler");
        $__internal_e0bbc6bef172561f8cf1edbb435776da668eb985460757d15d3a65e959f50f90->enter($__internal_e0bbc6bef172561f8cf1edbb435776da668eb985460757d15d3a65e959f50f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('modals', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('buttonsignin', $context, $blocks);
        // line 10
        echo "
<h2>Inscription</h2>

";
        // line 13
        $this->loadTemplate("::layout_signinform.html.twig", "PedagoFssUserBundle:Default:signin.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_e0bbc6bef172561f8cf1edbb435776da668eb985460757d15d3a65e959f50f90->leave($__internal_e0bbc6bef172561f8cf1edbb435776da668eb985460757d15d3a65e959f50f90_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_95ed76a84ed39ea83876b32221188d168a622cf8cbf877b40267143333f3b802 = $this->env->getExtension("native_profiler");
        $__internal_95ed76a84ed39ea83876b32221188d168a622cf8cbf877b40267143333f3b802->enter($__internal_95ed76a84ed39ea83876b32221188d168a622cf8cbf877b40267143333f3b802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_loginmodal.html.twig", "PedagoFssUserBundle:Default:signin.html.twig", 5)->display($context);
        
        $__internal_95ed76a84ed39ea83876b32221188d168a622cf8cbf877b40267143333f3b802->leave($__internal_95ed76a84ed39ea83876b32221188d168a622cf8cbf877b40267143333f3b802_prof);

    }

    // line 8
    public function block_buttonsignin($context, array $blocks = array())
    {
        $__internal_0b89a02540de7fdbc109be485a562bf29b8ac7ba81ce28c9ad7bd75371468228 = $this->env->getExtension("native_profiler");
        $__internal_0b89a02540de7fdbc109be485a562bf29b8ac7ba81ce28c9ad7bd75371468228->enter($__internal_0b89a02540de7fdbc109be485a562bf29b8ac7ba81ce28c9ad7bd75371468228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonsignin"));

        
        $__internal_0b89a02540de7fdbc109be485a562bf29b8ac7ba81ce28c9ad7bd75371468228->leave($__internal_0b89a02540de7fdbc109be485a562bf29b8ac7ba81ce28c9ad7bd75371468228_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 8,  73 => 5,  67 => 4,  59 => 14,  57 => 13,  52 => 10,  50 => 8,  47 => 7,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* {% block modals %}*/
/* {% include "::layout_loginmodal.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block buttonsignin %}*/
/* {% endblock %}*/
/* */
/* <h2>Inscription</h2>*/
/* */
/* {% include "::layout_signinform.html.twig" %}*/
/* */
/* {% endblock %}*/
