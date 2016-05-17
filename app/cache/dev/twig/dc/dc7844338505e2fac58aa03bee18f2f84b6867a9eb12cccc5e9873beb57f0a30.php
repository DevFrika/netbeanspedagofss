<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1ccd86f3c47079786f9dca776f4e3deea66ae7768cdcd08b7612b5bad5bfd1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dba2143241a0a40d159ef33fa7ae162d9aea22e742369e4953c082c5e2e31a7 = $this->env->getExtension("native_profiler");
        $__internal_8dba2143241a0a40d159ef33fa7ae162d9aea22e742369e4953c082c5e2e31a7->enter($__internal_8dba2143241a0a40d159ef33fa7ae162d9aea22e742369e4953c082c5e2e31a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dba2143241a0a40d159ef33fa7ae162d9aea22e742369e4953c082c5e2e31a7->leave($__internal_8dba2143241a0a40d159ef33fa7ae162d9aea22e742369e4953c082c5e2e31a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64c5a621f861b4683d56390c0b3ef74f9d3f26d03ffa8297e2b4d46bb2396543 = $this->env->getExtension("native_profiler");
        $__internal_64c5a621f861b4683d56390c0b3ef74f9d3f26d03ffa8297e2b4d46bb2396543->enter($__internal_64c5a621f861b4683d56390c0b3ef74f9d3f26d03ffa8297e2b4d46bb2396543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64c5a621f861b4683d56390c0b3ef74f9d3f26d03ffa8297e2b4d46bb2396543->leave($__internal_64c5a621f861b4683d56390c0b3ef74f9d3f26d03ffa8297e2b4d46bb2396543_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba86d04cc671c16c3ea30711357e280ec696f4fe9355641690d96fbb55d2f420 = $this->env->getExtension("native_profiler");
        $__internal_ba86d04cc671c16c3ea30711357e280ec696f4fe9355641690d96fbb55d2f420->enter($__internal_ba86d04cc671c16c3ea30711357e280ec696f4fe9355641690d96fbb55d2f420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba86d04cc671c16c3ea30711357e280ec696f4fe9355641690d96fbb55d2f420->leave($__internal_ba86d04cc671c16c3ea30711357e280ec696f4fe9355641690d96fbb55d2f420_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d345b56a4e8a335ccea38412f0449956caf8cebf5cdaed18e4297df159400c6 = $this->env->getExtension("native_profiler");
        $__internal_2d345b56a4e8a335ccea38412f0449956caf8cebf5cdaed18e4297df159400c6->enter($__internal_2d345b56a4e8a335ccea38412f0449956caf8cebf5cdaed18e4297df159400c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d345b56a4e8a335ccea38412f0449956caf8cebf5cdaed18e4297df159400c6->leave($__internal_2d345b56a4e8a335ccea38412f0449956caf8cebf5cdaed18e4297df159400c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
