<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_893956af82849094a88865bda9d3019e7875d01deda9e07ae78b9969161c77cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1db3751b9b78226139667dbad40aaf7cf964d361ecf5ac112424d459c25d7c30 = $this->env->getExtension("native_profiler");
        $__internal_1db3751b9b78226139667dbad40aaf7cf964d361ecf5ac112424d459c25d7c30->enter($__internal_1db3751b9b78226139667dbad40aaf7cf964d361ecf5ac112424d459c25d7c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1db3751b9b78226139667dbad40aaf7cf964d361ecf5ac112424d459c25d7c30->leave($__internal_1db3751b9b78226139667dbad40aaf7cf964d361ecf5ac112424d459c25d7c30_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_27ef5acc284855494eaf844f2f4c70661bc913713b579d3330da464fc4590fd9 = $this->env->getExtension("native_profiler");
        $__internal_27ef5acc284855494eaf844f2f4c70661bc913713b579d3330da464fc4590fd9->enter($__internal_27ef5acc284855494eaf844f2f4c70661bc913713b579d3330da464fc4590fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27ef5acc284855494eaf844f2f4c70661bc913713b579d3330da464fc4590fd9->leave($__internal_27ef5acc284855494eaf844f2f4c70661bc913713b579d3330da464fc4590fd9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
