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
        $__internal_dbc1ffac214957e39a1048e1fff12439c8a2e030cb33b73ddaabd13e265dfa52 = $this->env->getExtension("native_profiler");
        $__internal_dbc1ffac214957e39a1048e1fff12439c8a2e030cb33b73ddaabd13e265dfa52->enter($__internal_dbc1ffac214957e39a1048e1fff12439c8a2e030cb33b73ddaabd13e265dfa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc1ffac214957e39a1048e1fff12439c8a2e030cb33b73ddaabd13e265dfa52->leave($__internal_dbc1ffac214957e39a1048e1fff12439c8a2e030cb33b73ddaabd13e265dfa52_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6e4de67f4e4dfb3dd9117170b583abb72a0ca8f48de7fb9260329ee79b2c189 = $this->env->getExtension("native_profiler");
        $__internal_f6e4de67f4e4dfb3dd9117170b583abb72a0ca8f48de7fb9260329ee79b2c189->enter($__internal_f6e4de67f4e4dfb3dd9117170b583abb72a0ca8f48de7fb9260329ee79b2c189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6e4de67f4e4dfb3dd9117170b583abb72a0ca8f48de7fb9260329ee79b2c189->leave($__internal_f6e4de67f4e4dfb3dd9117170b583abb72a0ca8f48de7fb9260329ee79b2c189_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_d0550e648498d824e2f22068fb5efea1f8f30441dde72b8c021c761ac4b857ef = $this->env->getExtension("native_profiler");
        $__internal_d0550e648498d824e2f22068fb5efea1f8f30441dde72b8c021c761ac4b857ef->enter($__internal_d0550e648498d824e2f22068fb5efea1f8f30441dde72b8c021c761ac4b857ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_loginmodal.html.twig", "PedagoFssUserBundle:Default:signin.html.twig", 5)->display($context);
        
        $__internal_d0550e648498d824e2f22068fb5efea1f8f30441dde72b8c021c761ac4b857ef->leave($__internal_d0550e648498d824e2f22068fb5efea1f8f30441dde72b8c021c761ac4b857ef_prof);

    }

    // line 8
    public function block_buttonsignin($context, array $blocks = array())
    {
        $__internal_9bef2438ca030da6b817487b7dcc8eeba7a3599d57f9f76be66cef2e68808c51 = $this->env->getExtension("native_profiler");
        $__internal_9bef2438ca030da6b817487b7dcc8eeba7a3599d57f9f76be66cef2e68808c51->enter($__internal_9bef2438ca030da6b817487b7dcc8eeba7a3599d57f9f76be66cef2e68808c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonsignin"));

        
        $__internal_9bef2438ca030da6b817487b7dcc8eeba7a3599d57f9f76be66cef2e68808c51->leave($__internal_9bef2438ca030da6b817487b7dcc8eeba7a3599d57f9f76be66cef2e68808c51_prof);

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
