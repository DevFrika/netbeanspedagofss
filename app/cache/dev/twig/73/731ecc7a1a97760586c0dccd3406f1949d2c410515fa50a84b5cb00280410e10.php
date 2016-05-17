<?php

/* base.html.twig */
class __TwigTemplate_2340e5c52efe88ace1931307ef40cdbf7b3ede3497f02470409dae6eb907e695 extends Twig_Template
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
        $__internal_21b28da2e3392038cd40a700534487c61481cc062568a20b332e9204da4d6045 = $this->env->getExtension("native_profiler");
        $__internal_21b28da2e3392038cd40a700534487c61481cc062568a20b332e9204da4d6045->enter($__internal_21b28da2e3392038cd40a700534487c61481cc062568a20b332e9204da4d6045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_21b28da2e3392038cd40a700534487c61481cc062568a20b332e9204da4d6045->leave($__internal_21b28da2e3392038cd40a700534487c61481cc062568a20b332e9204da4d6045_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c844b14a12861596c438c394cc5ea63a7163c541833a4206c87351a7e399715b = $this->env->getExtension("native_profiler");
        $__internal_c844b14a12861596c438c394cc5ea63a7163c541833a4206c87351a7e399715b->enter($__internal_c844b14a12861596c438c394cc5ea63a7163c541833a4206c87351a7e399715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c844b14a12861596c438c394cc5ea63a7163c541833a4206c87351a7e399715b->leave($__internal_c844b14a12861596c438c394cc5ea63a7163c541833a4206c87351a7e399715b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fac62e1838b62ad88d925b0df415bd1bc4a8bef0000f6154be2b77d17d66650b = $this->env->getExtension("native_profiler");
        $__internal_fac62e1838b62ad88d925b0df415bd1bc4a8bef0000f6154be2b77d17d66650b->enter($__internal_fac62e1838b62ad88d925b0df415bd1bc4a8bef0000f6154be2b77d17d66650b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fac62e1838b62ad88d925b0df415bd1bc4a8bef0000f6154be2b77d17d66650b->leave($__internal_fac62e1838b62ad88d925b0df415bd1bc4a8bef0000f6154be2b77d17d66650b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_422b4dec524f9136985d6ca0277e6950535005c82073887d2716d312a42243ee = $this->env->getExtension("native_profiler");
        $__internal_422b4dec524f9136985d6ca0277e6950535005c82073887d2716d312a42243ee->enter($__internal_422b4dec524f9136985d6ca0277e6950535005c82073887d2716d312a42243ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_422b4dec524f9136985d6ca0277e6950535005c82073887d2716d312a42243ee->leave($__internal_422b4dec524f9136985d6ca0277e6950535005c82073887d2716d312a42243ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99bf97cf9f6470781a33680517139e1a71207f07316efeb64feb2e4c921d118a = $this->env->getExtension("native_profiler");
        $__internal_99bf97cf9f6470781a33680517139e1a71207f07316efeb64feb2e4c921d118a->enter($__internal_99bf97cf9f6470781a33680517139e1a71207f07316efeb64feb2e4c921d118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_99bf97cf9f6470781a33680517139e1a71207f07316efeb64feb2e4c921d118a->leave($__internal_99bf97cf9f6470781a33680517139e1a71207f07316efeb64feb2e4c921d118a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
