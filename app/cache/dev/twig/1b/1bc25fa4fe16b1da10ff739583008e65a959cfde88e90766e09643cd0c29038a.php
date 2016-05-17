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
        $__internal_84b7baf9826660ad00cbaeb99d94140a70703daa0a0f76b1076bdaac340591e6 = $this->env->getExtension("native_profiler");
        $__internal_84b7baf9826660ad00cbaeb99d94140a70703daa0a0f76b1076bdaac340591e6->enter($__internal_84b7baf9826660ad00cbaeb99d94140a70703daa0a0f76b1076bdaac340591e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b7baf9826660ad00cbaeb99d94140a70703daa0a0f76b1076bdaac340591e6->leave($__internal_84b7baf9826660ad00cbaeb99d94140a70703daa0a0f76b1076bdaac340591e6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9f844e9e4e72dcf1999e7fa3cf0a042b026b7fd91f1736092e1d109a0ea2e99 = $this->env->getExtension("native_profiler");
        $__internal_c9f844e9e4e72dcf1999e7fa3cf0a042b026b7fd91f1736092e1d109a0ea2e99->enter($__internal_c9f844e9e4e72dcf1999e7fa3cf0a042b026b7fd91f1736092e1d109a0ea2e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur 
";
        
        $__internal_c9f844e9e4e72dcf1999e7fa3cf0a042b026b7fd91f1736092e1d109a0ea2e99->leave($__internal_c9f844e9e4e72dcf1999e7fa3cf0a042b026b7fd91f1736092e1d109a0ea2e99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cceb000eb63daeb5bae8840f4572efb90221a4c291a1d425f3a5989e4e2e9ba = $this->env->getExtension("native_profiler");
        $__internal_4cceb000eb63daeb5bae8840f4572efb90221a4c291a1d425f3a5989e4e2e9ba->enter($__internal_4cceb000eb63daeb5bae8840f4572efb90221a4c291a1d425f3a5989e4e2e9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Normale </h2>

<p>
Page en construction
</p>

";
        
        $__internal_4cceb000eb63daeb5bae8840f4572efb90221a4c291a1d425f3a5989e4e2e9ba->leave($__internal_4cceb000eb63daeb5bae8840f4572efb90221a4c291a1d425f3a5989e4e2e9ba_prof);

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
