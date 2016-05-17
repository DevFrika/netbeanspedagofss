<?php

/* @PedagoFssUser/Default/signin.html.twig */
class __TwigTemplate_9ce9ca9e976bf692cd373b5d673bfc8a1335e322a1bc65359d91c3bd6593693d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/signin.html.twig", 1);
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
        $__internal_3357722c89838a6b7643c24a76030f196eceb56f8fb0b14b5439ae855e12cc08 = $this->env->getExtension("native_profiler");
        $__internal_3357722c89838a6b7643c24a76030f196eceb56f8fb0b14b5439ae855e12cc08->enter($__internal_3357722c89838a6b7643c24a76030f196eceb56f8fb0b14b5439ae855e12cc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3357722c89838a6b7643c24a76030f196eceb56f8fb0b14b5439ae855e12cc08->leave($__internal_3357722c89838a6b7643c24a76030f196eceb56f8fb0b14b5439ae855e12cc08_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3921d8a292651b000b7f88114c91e8ad8102864869f47c65d08671f35a1f288b = $this->env->getExtension("native_profiler");
        $__internal_3921d8a292651b000b7f88114c91e8ad8102864869f47c65d08671f35a1f288b->enter($__internal_3921d8a292651b000b7f88114c91e8ad8102864869f47c65d08671f35a1f288b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("::layout_signinform.html.twig", "@PedagoFssUser/Default/signin.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_3921d8a292651b000b7f88114c91e8ad8102864869f47c65d08671f35a1f288b->leave($__internal_3921d8a292651b000b7f88114c91e8ad8102864869f47c65d08671f35a1f288b_prof);

    }

    // line 4
    public function block_modals($context, array $blocks = array())
    {
        $__internal_98ff6b83462e5e6dee9c0ffbe6365e6f19a2f4530405089b6f6b20f48ac68d4b = $this->env->getExtension("native_profiler");
        $__internal_98ff6b83462e5e6dee9c0ffbe6365e6f19a2f4530405089b6f6b20f48ac68d4b->enter($__internal_98ff6b83462e5e6dee9c0ffbe6365e6f19a2f4530405089b6f6b20f48ac68d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 5
        $this->loadTemplate("::layout_loginmodal.html.twig", "@PedagoFssUser/Default/signin.html.twig", 5)->display($context);
        
        $__internal_98ff6b83462e5e6dee9c0ffbe6365e6f19a2f4530405089b6f6b20f48ac68d4b->leave($__internal_98ff6b83462e5e6dee9c0ffbe6365e6f19a2f4530405089b6f6b20f48ac68d4b_prof);

    }

    // line 8
    public function block_buttonsignin($context, array $blocks = array())
    {
        $__internal_2dba8145fdf528a99b298e70cd2c617bb64bf40158258d28606fcf8fdb5af36b = $this->env->getExtension("native_profiler");
        $__internal_2dba8145fdf528a99b298e70cd2c617bb64bf40158258d28606fcf8fdb5af36b->enter($__internal_2dba8145fdf528a99b298e70cd2c617bb64bf40158258d28606fcf8fdb5af36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonsignin"));

        
        $__internal_2dba8145fdf528a99b298e70cd2c617bb64bf40158258d28606fcf8fdb5af36b->leave($__internal_2dba8145fdf528a99b298e70cd2c617bb64bf40158258d28606fcf8fdb5af36b_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/signin.html.twig";
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
