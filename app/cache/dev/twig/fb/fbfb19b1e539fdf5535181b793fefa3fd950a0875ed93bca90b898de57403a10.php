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
        $__internal_30f591168ed0958c09f904fc6d60a29f01809ee7c9a80d0793035406b96b689a = $this->env->getExtension("native_profiler");
        $__internal_30f591168ed0958c09f904fc6d60a29f01809ee7c9a80d0793035406b96b689a->enter($__internal_30f591168ed0958c09f904fc6d60a29f01809ee7c9a80d0793035406b96b689a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f591168ed0958c09f904fc6d60a29f01809ee7c9a80d0793035406b96b689a->leave($__internal_30f591168ed0958c09f904fc6d60a29f01809ee7c9a80d0793035406b96b689a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b7dbe29d0d2a0f0ffeaf5ac466e3918722474b7a771a43a941b9e36d3da7513 = $this->env->getExtension("native_profiler");
        $__internal_0b7dbe29d0d2a0f0ffeaf5ac466e3918722474b7a771a43a941b9e36d3da7513->enter($__internal_0b7dbe29d0d2a0f0ffeaf5ac466e3918722474b7a771a43a941b9e36d3da7513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b7dbe29d0d2a0f0ffeaf5ac466e3918722474b7a771a43a941b9e36d3da7513->leave($__internal_0b7dbe29d0d2a0f0ffeaf5ac466e3918722474b7a771a43a941b9e36d3da7513_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b810510231a8ba9d731c836718c0d644b3d3b98b6082ed7f38de0e213c1e284f = $this->env->getExtension("native_profiler");
        $__internal_b810510231a8ba9d731c836718c0d644b3d3b98b6082ed7f38de0e213c1e284f->enter($__internal_b810510231a8ba9d731c836718c0d644b3d3b98b6082ed7f38de0e213c1e284f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b810510231a8ba9d731c836718c0d644b3d3b98b6082ed7f38de0e213c1e284f->leave($__internal_b810510231a8ba9d731c836718c0d644b3d3b98b6082ed7f38de0e213c1e284f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d1c10be00a2cfd55aa0ab38fc0ba89a932241ef4f58bdb52fa7c36018658f1e = $this->env->getExtension("native_profiler");
        $__internal_3d1c10be00a2cfd55aa0ab38fc0ba89a932241ef4f58bdb52fa7c36018658f1e->enter($__internal_3d1c10be00a2cfd55aa0ab38fc0ba89a932241ef4f58bdb52fa7c36018658f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d1c10be00a2cfd55aa0ab38fc0ba89a932241ef4f58bdb52fa7c36018658f1e->leave($__internal_3d1c10be00a2cfd55aa0ab38fc0ba89a932241ef4f58bdb52fa7c36018658f1e_prof);

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
