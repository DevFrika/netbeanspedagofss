<?php

/* PedagoFssUserBundle:Default:login.html.twig */
class __TwigTemplate_bd72628e06c10afaa3dbfc7d386750678e179da406c88e7efab079eaefc1e627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'modals' => array($this, 'block_modals'),
            'buttonlogin' => array($this, 'block_buttonlogin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e81ec0a919cd0ad2d60b4f4e9e0bd967fc8356c771c7cc193737b1ccb5bfb9a = $this->env->getExtension("native_profiler");
        $__internal_0e81ec0a919cd0ad2d60b4f4e9e0bd967fc8356c771c7cc193737b1ccb5bfb9a->enter($__internal_0e81ec0a919cd0ad2d60b4f4e9e0bd967fc8356c771c7cc193737b1ccb5bfb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e81ec0a919cd0ad2d60b4f4e9e0bd967fc8356c771c7cc193737b1ccb5bfb9a->leave($__internal_0e81ec0a919cd0ad2d60b4f4e9e0bd967fc8356c771c7cc193737b1ccb5bfb9a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c24e6868ed6d0ee2b51cc8e02971177e458a391f73d3417b3719660fdbeef381 = $this->env->getExtension("native_profiler");
        $__internal_c24e6868ed6d0ee2b51cc8e02971177e458a391f73d3417b3719660fdbeef381->enter($__internal_c24e6868ed6d0ee2b51cc8e02971177e458a391f73d3417b3719660fdbeef381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('modals', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('buttonlogin', $context, $blocks);
        // line 10
        echo "
<h2>Connexion </h2>

";
        // line 13
        $this->loadTemplate("::layout_loginform.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_c24e6868ed6d0ee2b51cc8e02971177e458a391f73d3417b3719660fdbeef381->leave($__internal_c24e6868ed6d0ee2b51cc8e02971177e458a391f73d3417b3719660fdbeef381_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_2bc3b8d8a111a1d5f36275a7dbaddeb9fedc8d6c8c67633b3e092f9082073ea2 = $this->env->getExtension("native_profiler");
        $__internal_2bc3b8d8a111a1d5f36275a7dbaddeb9fedc8d6c8c67633b3e092f9082073ea2->enter($__internal_2bc3b8d8a111a1d5f36275a7dbaddeb9fedc8d6c8c67633b3e092f9082073ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_signinmodal.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 5)->display($context);
        
        $__internal_2bc3b8d8a111a1d5f36275a7dbaddeb9fedc8d6c8c67633b3e092f9082073ea2->leave($__internal_2bc3b8d8a111a1d5f36275a7dbaddeb9fedc8d6c8c67633b3e092f9082073ea2_prof);

    }

    // line 8
    public function block_buttonlogin($context, array $blocks = array())
    {
        $__internal_7fab770d5b365733ed406f513bbd06d3f4c3ab9d625d901baf02c1fccfed387d = $this->env->getExtension("native_profiler");
        $__internal_7fab770d5b365733ed406f513bbd06d3f4c3ab9d625d901baf02c1fccfed387d->enter($__internal_7fab770d5b365733ed406f513bbd06d3f4c3ab9d625d901baf02c1fccfed387d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonlogin"));

        
        $__internal_7fab770d5b365733ed406f513bbd06d3f4c3ab9d625d901baf02c1fccfed387d->leave($__internal_7fab770d5b365733ed406f513bbd06d3f4c3ab9d625d901baf02c1fccfed387d_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:login.html.twig";
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
/* {% include "::layout_signinmodal.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block buttonlogin %}*/
/* {% endblock %}*/
/* */
/* <h2>Connexion </h2>*/
/* */
/* {% include "::layout_loginform.html.twig" %}*/
/* */
/* {% endblock %}*/
