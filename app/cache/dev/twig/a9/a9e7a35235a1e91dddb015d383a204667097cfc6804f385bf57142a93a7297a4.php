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
        $__internal_d40b3f2e4f77bf6966cdcb97796cad821389d74417cd987debccc96b6c373bdc = $this->env->getExtension("native_profiler");
        $__internal_d40b3f2e4f77bf6966cdcb97796cad821389d74417cd987debccc96b6c373bdc->enter($__internal_d40b3f2e4f77bf6966cdcb97796cad821389d74417cd987debccc96b6c373bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d40b3f2e4f77bf6966cdcb97796cad821389d74417cd987debccc96b6c373bdc->leave($__internal_d40b3f2e4f77bf6966cdcb97796cad821389d74417cd987debccc96b6c373bdc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_18c974a297fe759432100427d70e387467e85642f273bd6c39410629d3247518 = $this->env->getExtension("native_profiler");
        $__internal_18c974a297fe759432100427d70e387467e85642f273bd6c39410629d3247518->enter($__internal_18c974a297fe759432100427d70e387467e85642f273bd6c39410629d3247518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_18c974a297fe759432100427d70e387467e85642f273bd6c39410629d3247518->leave($__internal_18c974a297fe759432100427d70e387467e85642f273bd6c39410629d3247518_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a08c025c240b3e9c826da778814877ee0a1eec21721e577d4c1fcd51b4fa5e33 = $this->env->getExtension("native_profiler");
        $__internal_a08c025c240b3e9c826da778814877ee0a1eec21721e577d4c1fcd51b4fa5e33->enter($__internal_a08c025c240b3e9c826da778814877ee0a1eec21721e577d4c1fcd51b4fa5e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a08c025c240b3e9c826da778814877ee0a1eec21721e577d4c1fcd51b4fa5e33->leave($__internal_a08c025c240b3e9c826da778814877ee0a1eec21721e577d4c1fcd51b4fa5e33_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cdd7b62d9798867e3aad0f2f5998e54b9be39511424f9d133d74a2593c7e697 = $this->env->getExtension("native_profiler");
        $__internal_8cdd7b62d9798867e3aad0f2f5998e54b9be39511424f9d133d74a2593c7e697->enter($__internal_8cdd7b62d9798867e3aad0f2f5998e54b9be39511424f9d133d74a2593c7e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8cdd7b62d9798867e3aad0f2f5998e54b9be39511424f9d133d74a2593c7e697->leave($__internal_8cdd7b62d9798867e3aad0f2f5998e54b9be39511424f9d133d74a2593c7e697_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0de3bfddc4482c7b25322a07b0d44e40c66c5dca22c791f3665a197bd8375e63 = $this->env->getExtension("native_profiler");
        $__internal_0de3bfddc4482c7b25322a07b0d44e40c66c5dca22c791f3665a197bd8375e63->enter($__internal_0de3bfddc4482c7b25322a07b0d44e40c66c5dca22c791f3665a197bd8375e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0de3bfddc4482c7b25322a07b0d44e40c66c5dca22c791f3665a197bd8375e63->leave($__internal_0de3bfddc4482c7b25322a07b0d44e40c66c5dca22c791f3665a197bd8375e63_prof);

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
