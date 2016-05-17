<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e4ef30677347df7244f8788d3e02a527c664178c8b73cc2961bfa39134182e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8581fbcf3ed91a6f8c29988eefccd0c436c8ee81d1b96cd00fad92c0ab3d2cb9 = $this->env->getExtension("native_profiler");
        $__internal_8581fbcf3ed91a6f8c29988eefccd0c436c8ee81d1b96cd00fad92c0ab3d2cb9->enter($__internal_8581fbcf3ed91a6f8c29988eefccd0c436c8ee81d1b96cd00fad92c0ab3d2cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8581fbcf3ed91a6f8c29988eefccd0c436c8ee81d1b96cd00fad92c0ab3d2cb9->leave($__internal_8581fbcf3ed91a6f8c29988eefccd0c436c8ee81d1b96cd00fad92c0ab3d2cb9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
