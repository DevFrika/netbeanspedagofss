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
        $__internal_57e7f2c839540b7453cd4e45ba653b7749fcfe6d74fb6b5afbc70e98ebd0e9d9 = $this->env->getExtension("native_profiler");
        $__internal_57e7f2c839540b7453cd4e45ba653b7749fcfe6d74fb6b5afbc70e98ebd0e9d9->enter($__internal_57e7f2c839540b7453cd4e45ba653b7749fcfe6d74fb6b5afbc70e98ebd0e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e7f2c839540b7453cd4e45ba653b7749fcfe6d74fb6b5afbc70e98ebd0e9d9->leave($__internal_57e7f2c839540b7453cd4e45ba653b7749fcfe6d74fb6b5afbc70e98ebd0e9d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d785262554e21aae6952d3f93b0a12ba0c1c048faa54718b23120da296a7bd79 = $this->env->getExtension("native_profiler");
        $__internal_d785262554e21aae6952d3f93b0a12ba0c1c048faa54718b23120da296a7bd79->enter($__internal_d785262554e21aae6952d3f93b0a12ba0c1c048faa54718b23120da296a7bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d785262554e21aae6952d3f93b0a12ba0c1c048faa54718b23120da296a7bd79->leave($__internal_d785262554e21aae6952d3f93b0a12ba0c1c048faa54718b23120da296a7bd79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75b66aaa6de391c18102590b510b5b6d2e3857bdee03d3faf1f0322b2414ec81 = $this->env->getExtension("native_profiler");
        $__internal_75b66aaa6de391c18102590b510b5b6d2e3857bdee03d3faf1f0322b2414ec81->enter($__internal_75b66aaa6de391c18102590b510b5b6d2e3857bdee03d3faf1f0322b2414ec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75b66aaa6de391c18102590b510b5b6d2e3857bdee03d3faf1f0322b2414ec81->leave($__internal_75b66aaa6de391c18102590b510b5b6d2e3857bdee03d3faf1f0322b2414ec81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_404b95dbe1a3944ba160f80ab615c7ce073663bfd55203c2df9e589234e20ae7 = $this->env->getExtension("native_profiler");
        $__internal_404b95dbe1a3944ba160f80ab615c7ce073663bfd55203c2df9e589234e20ae7->enter($__internal_404b95dbe1a3944ba160f80ab615c7ce073663bfd55203c2df9e589234e20ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_404b95dbe1a3944ba160f80ab615c7ce073663bfd55203c2df9e589234e20ae7->leave($__internal_404b95dbe1a3944ba160f80ab615c7ce073663bfd55203c2df9e589234e20ae7_prof);

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
