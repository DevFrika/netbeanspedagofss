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
        $__internal_ab3f055e5b9cc32ab2eeb9d397ef54b471567dcce145009606ba0d9f14287581 = $this->env->getExtension("native_profiler");
        $__internal_ab3f055e5b9cc32ab2eeb9d397ef54b471567dcce145009606ba0d9f14287581->enter($__internal_ab3f055e5b9cc32ab2eeb9d397ef54b471567dcce145009606ba0d9f14287581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3f055e5b9cc32ab2eeb9d397ef54b471567dcce145009606ba0d9f14287581->leave($__internal_ab3f055e5b9cc32ab2eeb9d397ef54b471567dcce145009606ba0d9f14287581_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8ccc53e7df1c8643bccfee577d2f208f7991e15db578cc9805d1c56f1298b2e = $this->env->getExtension("native_profiler");
        $__internal_b8ccc53e7df1c8643bccfee577d2f208f7991e15db578cc9805d1c56f1298b2e->enter($__internal_b8ccc53e7df1c8643bccfee577d2f208f7991e15db578cc9805d1c56f1298b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8ccc53e7df1c8643bccfee577d2f208f7991e15db578cc9805d1c56f1298b2e->leave($__internal_b8ccc53e7df1c8643bccfee577d2f208f7991e15db578cc9805d1c56f1298b2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21e6843de4d9a4a87ad29813bd6afdc2bad0326aceb9292f629033754ee3a7e8 = $this->env->getExtension("native_profiler");
        $__internal_21e6843de4d9a4a87ad29813bd6afdc2bad0326aceb9292f629033754ee3a7e8->enter($__internal_21e6843de4d9a4a87ad29813bd6afdc2bad0326aceb9292f629033754ee3a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21e6843de4d9a4a87ad29813bd6afdc2bad0326aceb9292f629033754ee3a7e8->leave($__internal_21e6843de4d9a4a87ad29813bd6afdc2bad0326aceb9292f629033754ee3a7e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6f7741c54ac368f2283fe98b92784f708eb5f5e328f66b35bc2058d85f74c9d = $this->env->getExtension("native_profiler");
        $__internal_e6f7741c54ac368f2283fe98b92784f708eb5f5e328f66b35bc2058d85f74c9d->enter($__internal_e6f7741c54ac368f2283fe98b92784f708eb5f5e328f66b35bc2058d85f74c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6f7741c54ac368f2283fe98b92784f708eb5f5e328f66b35bc2058d85f74c9d->leave($__internal_e6f7741c54ac368f2283fe98b92784f708eb5f5e328f66b35bc2058d85f74c9d_prof);

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
