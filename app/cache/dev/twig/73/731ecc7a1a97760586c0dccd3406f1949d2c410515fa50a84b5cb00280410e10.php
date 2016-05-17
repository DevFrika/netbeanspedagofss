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
        $__internal_f21b531aaf42b14938ae845816bd7632e616275dfc07a80be29b788b65fd5a2b = $this->env->getExtension("native_profiler");
        $__internal_f21b531aaf42b14938ae845816bd7632e616275dfc07a80be29b788b65fd5a2b->enter($__internal_f21b531aaf42b14938ae845816bd7632e616275dfc07a80be29b788b65fd5a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f21b531aaf42b14938ae845816bd7632e616275dfc07a80be29b788b65fd5a2b->leave($__internal_f21b531aaf42b14938ae845816bd7632e616275dfc07a80be29b788b65fd5a2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_904b3177c1273c2c0ac69dd4851d34950ac2f62766e2e7317e1a4fd6c1a520fe = $this->env->getExtension("native_profiler");
        $__internal_904b3177c1273c2c0ac69dd4851d34950ac2f62766e2e7317e1a4fd6c1a520fe->enter($__internal_904b3177c1273c2c0ac69dd4851d34950ac2f62766e2e7317e1a4fd6c1a520fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_904b3177c1273c2c0ac69dd4851d34950ac2f62766e2e7317e1a4fd6c1a520fe->leave($__internal_904b3177c1273c2c0ac69dd4851d34950ac2f62766e2e7317e1a4fd6c1a520fe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_839e4865a96065761995e76ccb2e5c92582b4bb090705c74ccda0f8068dc9804 = $this->env->getExtension("native_profiler");
        $__internal_839e4865a96065761995e76ccb2e5c92582b4bb090705c74ccda0f8068dc9804->enter($__internal_839e4865a96065761995e76ccb2e5c92582b4bb090705c74ccda0f8068dc9804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_839e4865a96065761995e76ccb2e5c92582b4bb090705c74ccda0f8068dc9804->leave($__internal_839e4865a96065761995e76ccb2e5c92582b4bb090705c74ccda0f8068dc9804_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0563a086a2dd8c9cd9fef7bead2a656e6eb7047b6990be2b5af554772597a28 = $this->env->getExtension("native_profiler");
        $__internal_d0563a086a2dd8c9cd9fef7bead2a656e6eb7047b6990be2b5af554772597a28->enter($__internal_d0563a086a2dd8c9cd9fef7bead2a656e6eb7047b6990be2b5af554772597a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0563a086a2dd8c9cd9fef7bead2a656e6eb7047b6990be2b5af554772597a28->leave($__internal_d0563a086a2dd8c9cd9fef7bead2a656e6eb7047b6990be2b5af554772597a28_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dedabd6d0de79d597728be2e16d7219e281aa471faba4182bfd097841c8ddd4a = $this->env->getExtension("native_profiler");
        $__internal_dedabd6d0de79d597728be2e16d7219e281aa471faba4182bfd097841c8ddd4a->enter($__internal_dedabd6d0de79d597728be2e16d7219e281aa471faba4182bfd097841c8ddd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dedabd6d0de79d597728be2e16d7219e281aa471faba4182bfd097841c8ddd4a->leave($__internal_dedabd6d0de79d597728be2e16d7219e281aa471faba4182bfd097841c8ddd4a_prof);

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
