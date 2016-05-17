<?php

/* ::base.html.twig */
class __TwigTemplate_216c79e068216dcacf810f166b726d5a1419111ecde7cb0696b22c8ab475f2a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a30c4d162ff5e2c50588c879bf911dc48a6a4a5f766be7f8e0b7aaa19038c712 = $this->env->getExtension("native_profiler");
        $__internal_a30c4d162ff5e2c50588c879bf911dc48a6a4a5f766be7f8e0b7aaa19038c712->enter($__internal_a30c4d162ff5e2c50588c879bf911dc48a6a4a5f766be7f8e0b7aaa19038c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a30c4d162ff5e2c50588c879bf911dc48a6a4a5f766be7f8e0b7aaa19038c712->leave($__internal_a30c4d162ff5e2c50588c879bf911dc48a6a4a5f766be7f8e0b7aaa19038c712_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c1506589b4a78d304d60ff56302897a0803bebc4b467664d12bc9fd31e0b55d = $this->env->getExtension("native_profiler");
        $__internal_0c1506589b4a78d304d60ff56302897a0803bebc4b467664d12bc9fd31e0b55d->enter($__internal_0c1506589b4a78d304d60ff56302897a0803bebc4b467664d12bc9fd31e0b55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c1506589b4a78d304d60ff56302897a0803bebc4b467664d12bc9fd31e0b55d->leave($__internal_0c1506589b4a78d304d60ff56302897a0803bebc4b467664d12bc9fd31e0b55d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64a2c64a48f7c1f82cf77108ae8145e18cda63b2e0be66fdf479c513f33badc7 = $this->env->getExtension("native_profiler");
        $__internal_64a2c64a48f7c1f82cf77108ae8145e18cda63b2e0be66fdf479c513f33badc7->enter($__internal_64a2c64a48f7c1f82cf77108ae8145e18cda63b2e0be66fdf479c513f33badc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_64a2c64a48f7c1f82cf77108ae8145e18cda63b2e0be66fdf479c513f33badc7->leave($__internal_64a2c64a48f7c1f82cf77108ae8145e18cda63b2e0be66fdf479c513f33badc7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d39ec77de286d24798a6eaa0b40c07cb30b54ef596210c348628a67b02303775 = $this->env->getExtension("native_profiler");
        $__internal_d39ec77de286d24798a6eaa0b40c07cb30b54ef596210c348628a67b02303775->enter($__internal_d39ec77de286d24798a6eaa0b40c07cb30b54ef596210c348628a67b02303775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d39ec77de286d24798a6eaa0b40c07cb30b54ef596210c348628a67b02303775->leave($__internal_d39ec77de286d24798a6eaa0b40c07cb30b54ef596210c348628a67b02303775_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b8d6e837c6aa4a3171894180d7e42c524f7d3b8a5c175b23d3dabae1e002f7c = $this->env->getExtension("native_profiler");
        $__internal_8b8d6e837c6aa4a3171894180d7e42c524f7d3b8a5c175b23d3dabae1e002f7c->enter($__internal_8b8d6e837c6aa4a3171894180d7e42c524f7d3b8a5c175b23d3dabae1e002f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b8d6e837c6aa4a3171894180d7e42c524f7d3b8a5c175b23d3dabae1e002f7c->leave($__internal_8b8d6e837c6aa4a3171894180d7e42c524f7d3b8a5c175b23d3dabae1e002f7c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
