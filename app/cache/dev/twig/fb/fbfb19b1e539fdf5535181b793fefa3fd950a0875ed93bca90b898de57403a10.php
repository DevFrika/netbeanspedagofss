<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36b361e34198457354cb3dfe0600ab935ea7ab7c93e002917d576358fab1d5d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d717778c8dcf881758640e81341263d5d5379adc591fbf1fc2d07de80f24f22c = $this->env->getExtension("native_profiler");
        $__internal_d717778c8dcf881758640e81341263d5d5379adc591fbf1fc2d07de80f24f22c->enter($__internal_d717778c8dcf881758640e81341263d5d5379adc591fbf1fc2d07de80f24f22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d717778c8dcf881758640e81341263d5d5379adc591fbf1fc2d07de80f24f22c->leave($__internal_d717778c8dcf881758640e81341263d5d5379adc591fbf1fc2d07de80f24f22c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ecc074754660b9ff454d6bd0023b39b6cb5edc6c2377faad762548c4fc0a4d10 = $this->env->getExtension("native_profiler");
        $__internal_ecc074754660b9ff454d6bd0023b39b6cb5edc6c2377faad762548c4fc0a4d10->enter($__internal_ecc074754660b9ff454d6bd0023b39b6cb5edc6c2377faad762548c4fc0a4d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ecc074754660b9ff454d6bd0023b39b6cb5edc6c2377faad762548c4fc0a4d10->leave($__internal_ecc074754660b9ff454d6bd0023b39b6cb5edc6c2377faad762548c4fc0a4d10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45413414730c834c49a729c62b2bf9a1b42356a83d1b6536980f8ac602cc72a2 = $this->env->getExtension("native_profiler");
        $__internal_45413414730c834c49a729c62b2bf9a1b42356a83d1b6536980f8ac602cc72a2->enter($__internal_45413414730c834c49a729c62b2bf9a1b42356a83d1b6536980f8ac602cc72a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_45413414730c834c49a729c62b2bf9a1b42356a83d1b6536980f8ac602cc72a2->leave($__internal_45413414730c834c49a729c62b2bf9a1b42356a83d1b6536980f8ac602cc72a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e342ff2b20643daceb1d6b5d73b18fc261c1f0e23808ab1cbc0df9cab4b54eb = $this->env->getExtension("native_profiler");
        $__internal_7e342ff2b20643daceb1d6b5d73b18fc261c1f0e23808ab1cbc0df9cab4b54eb->enter($__internal_7e342ff2b20643daceb1d6b5d73b18fc261c1f0e23808ab1cbc0df9cab4b54eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e342ff2b20643daceb1d6b5d73b18fc261c1f0e23808ab1cbc0df9cab4b54eb->leave($__internal_7e342ff2b20643daceb1d6b5d73b18fc261c1f0e23808ab1cbc0df9cab4b54eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
