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
        $__internal_5ff0107ca36a946bc8ece71f0e27bcb60342198fc0dfdc0d3f335983a91fa2a3 = $this->env->getExtension("native_profiler");
        $__internal_5ff0107ca36a946bc8ece71f0e27bcb60342198fc0dfdc0d3f335983a91fa2a3->enter($__internal_5ff0107ca36a946bc8ece71f0e27bcb60342198fc0dfdc0d3f335983a91fa2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff0107ca36a946bc8ece71f0e27bcb60342198fc0dfdc0d3f335983a91fa2a3->leave($__internal_5ff0107ca36a946bc8ece71f0e27bcb60342198fc0dfdc0d3f335983a91fa2a3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_65c181b4a209c0c0710c3f8cdfac011cc7fd9c8052415403927e8801fd7decc3 = $this->env->getExtension("native_profiler");
        $__internal_65c181b4a209c0c0710c3f8cdfac011cc7fd9c8052415403927e8801fd7decc3->enter($__internal_65c181b4a209c0c0710c3f8cdfac011cc7fd9c8052415403927e8801fd7decc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65c181b4a209c0c0710c3f8cdfac011cc7fd9c8052415403927e8801fd7decc3->leave($__internal_65c181b4a209c0c0710c3f8cdfac011cc7fd9c8052415403927e8801fd7decc3_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_92e65aaceb7717f360d66902a9cbf631fec043f91fafba2371e84cb697394ca9 = $this->env->getExtension("native_profiler");
        $__internal_92e65aaceb7717f360d66902a9cbf631fec043f91fafba2371e84cb697394ca9->enter($__internal_92e65aaceb7717f360d66902a9cbf631fec043f91fafba2371e84cb697394ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_signinmodal.html.twig", "PedagoFssUserBundle:Default:login.html.twig", 5)->display($context);
        
        $__internal_92e65aaceb7717f360d66902a9cbf631fec043f91fafba2371e84cb697394ca9->leave($__internal_92e65aaceb7717f360d66902a9cbf631fec043f91fafba2371e84cb697394ca9_prof);

    }

    // line 8
    public function block_buttonlogin($context, array $blocks = array())
    {
        $__internal_7e01af9e1f07aab5f5d8c3b947da360d2e1781857b1e4d9500f3acb8028c8217 = $this->env->getExtension("native_profiler");
        $__internal_7e01af9e1f07aab5f5d8c3b947da360d2e1781857b1e4d9500f3acb8028c8217->enter($__internal_7e01af9e1f07aab5f5d8c3b947da360d2e1781857b1e4d9500f3acb8028c8217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonlogin"));

        
        $__internal_7e01af9e1f07aab5f5d8c3b947da360d2e1781857b1e4d9500f3acb8028c8217->leave($__internal_7e01af9e1f07aab5f5d8c3b947da360d2e1781857b1e4d9500f3acb8028c8217_prof);

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
