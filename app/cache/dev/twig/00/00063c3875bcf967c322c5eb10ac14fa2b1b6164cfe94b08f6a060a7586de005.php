<?php

/* PedagoFssUserBundle:Default:prof.html.twig */
class __TwigTemplate_1afe8b601f44fa3c0aa3fa79b2c87607fe82bf73e17437335ac505b7e582b419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:prof.html.twig", 1);
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
        $__internal_69536f4cd255ff1729e3d0911fae6f6e8ef8e66fec206930ed9e281fa56bafd8 = $this->env->getExtension("native_profiler");
        $__internal_69536f4cd255ff1729e3d0911fae6f6e8ef8e66fec206930ed9e281fa56bafd8->enter($__internal_69536f4cd255ff1729e3d0911fae6f6e8ef8e66fec206930ed9e281fa56bafd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69536f4cd255ff1729e3d0911fae6f6e8ef8e66fec206930ed9e281fa56bafd8->leave($__internal_69536f4cd255ff1729e3d0911fae6f6e8ef8e66fec206930ed9e281fa56bafd8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbd06e4806b14c09b7aca9c30524a9335b0110cf66acb4b21a310da17ce00b81 = $this->env->getExtension("native_profiler");
        $__internal_dbd06e4806b14c09b7aca9c30524a9335b0110cf66acb4b21a310da17ce00b81->enter($__internal_dbd06e4806b14c09b7aca9c30524a9335b0110cf66acb4b21a310da17ce00b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Prof
";
        
        $__internal_dbd06e4806b14c09b7aca9c30524a9335b0110cf66acb4b21a310da17ce00b81->leave($__internal_dbd06e4806b14c09b7aca9c30524a9335b0110cf66acb4b21a310da17ce00b81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb2b144b12530c691582138e2a9ed50db5be4bbde680b3537c3d93a9f743673a = $this->env->getExtension("native_profiler");
        $__internal_bb2b144b12530c691582138e2a9ed50db5be4bbde680b3537c3d93a9f743673a->enter($__internal_bb2b144b12530c691582138e2a9ed50db5be4bbde680b3537c3d93a9f743673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page par prof </h2>

<p>
Page en construction
</p>

";
        
        $__internal_bb2b144b12530c691582138e2a9ed50db5be4bbde680b3537c3d93a9f743673a->leave($__internal_bb2b144b12530c691582138e2a9ed50db5be4bbde680b3537c3d93a9f743673a_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:prof.html.twig";
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
/* Utilisateur - Prof*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page par prof </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
