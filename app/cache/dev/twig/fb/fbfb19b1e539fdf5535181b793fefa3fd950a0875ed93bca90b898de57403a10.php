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
        $__internal_84598cb29f543480bb9c3a5c06423daf849e225202ca6e0bfbc396f3c8a53ae8 = $this->env->getExtension("native_profiler");
        $__internal_84598cb29f543480bb9c3a5c06423daf849e225202ca6e0bfbc396f3c8a53ae8->enter($__internal_84598cb29f543480bb9c3a5c06423daf849e225202ca6e0bfbc396f3c8a53ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84598cb29f543480bb9c3a5c06423daf849e225202ca6e0bfbc396f3c8a53ae8->leave($__internal_84598cb29f543480bb9c3a5c06423daf849e225202ca6e0bfbc396f3c8a53ae8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e51c4051d5444574f731096c24756c18765c5d9e3bba77015d7fec3262d5534 = $this->env->getExtension("native_profiler");
        $__internal_4e51c4051d5444574f731096c24756c18765c5d9e3bba77015d7fec3262d5534->enter($__internal_4e51c4051d5444574f731096c24756c18765c5d9e3bba77015d7fec3262d5534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e51c4051d5444574f731096c24756c18765c5d9e3bba77015d7fec3262d5534->leave($__internal_4e51c4051d5444574f731096c24756c18765c5d9e3bba77015d7fec3262d5534_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91af940c339c725e4404358458323b35ee97c186dbe7b5921426003d33bdbd7a = $this->env->getExtension("native_profiler");
        $__internal_91af940c339c725e4404358458323b35ee97c186dbe7b5921426003d33bdbd7a->enter($__internal_91af940c339c725e4404358458323b35ee97c186dbe7b5921426003d33bdbd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91af940c339c725e4404358458323b35ee97c186dbe7b5921426003d33bdbd7a->leave($__internal_91af940c339c725e4404358458323b35ee97c186dbe7b5921426003d33bdbd7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_539c5ab8ff03916e1447613e979b19bb332ab59037d0abf121bb04bdacdc2f9b = $this->env->getExtension("native_profiler");
        $__internal_539c5ab8ff03916e1447613e979b19bb332ab59037d0abf121bb04bdacdc2f9b->enter($__internal_539c5ab8ff03916e1447613e979b19bb332ab59037d0abf121bb04bdacdc2f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_539c5ab8ff03916e1447613e979b19bb332ab59037d0abf121bb04bdacdc2f9b->leave($__internal_539c5ab8ff03916e1447613e979b19bb332ab59037d0abf121bb04bdacdc2f9b_prof);

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
