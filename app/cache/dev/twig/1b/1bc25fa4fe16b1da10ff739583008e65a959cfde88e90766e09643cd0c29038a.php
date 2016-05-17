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
        $__internal_2b64736f5343d2e6e44f4aef98a637a2b472e92b08bb1b3eabd2fd93226b725a = $this->env->getExtension("native_profiler");
        $__internal_2b64736f5343d2e6e44f4aef98a637a2b472e92b08bb1b3eabd2fd93226b725a->enter($__internal_2b64736f5343d2e6e44f4aef98a637a2b472e92b08bb1b3eabd2fd93226b725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b64736f5343d2e6e44f4aef98a637a2b472e92b08bb1b3eabd2fd93226b725a->leave($__internal_2b64736f5343d2e6e44f4aef98a637a2b472e92b08bb1b3eabd2fd93226b725a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb60a7eea76918790f4a7e8e8e60b5c313b3ae98fc8338db429ecdd51e08816c = $this->env->getExtension("native_profiler");
        $__internal_cb60a7eea76918790f4a7e8e8e60b5c313b3ae98fc8338db429ecdd51e08816c->enter($__internal_cb60a7eea76918790f4a7e8e8e60b5c313b3ae98fc8338db429ecdd51e08816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur 
";
        
        $__internal_cb60a7eea76918790f4a7e8e8e60b5c313b3ae98fc8338db429ecdd51e08816c->leave($__internal_cb60a7eea76918790f4a7e8e8e60b5c313b3ae98fc8338db429ecdd51e08816c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_274c99c2d394c10c68b7b3af02c3edd9ec3d2d341a0f53e29de3d0b1765b9a11 = $this->env->getExtension("native_profiler");
        $__internal_274c99c2d394c10c68b7b3af02c3edd9ec3d2d341a0f53e29de3d0b1765b9a11->enter($__internal_274c99c2d394c10c68b7b3af02c3edd9ec3d2d341a0f53e29de3d0b1765b9a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Normale </h2>

<p>
Page en construction
</p>

";
        
        $__internal_274c99c2d394c10c68b7b3af02c3edd9ec3d2d341a0f53e29de3d0b1765b9a11->leave($__internal_274c99c2d394c10c68b7b3af02c3edd9ec3d2d341a0f53e29de3d0b1765b9a11_prof);

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
