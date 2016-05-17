<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_788164099c9c794e98ac88d32e7ae4c68f118a5a817ec5f605f3deced57d96cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5ca8ba944625e9bdd8b39d5e516f54b462912007d9d64604869df8f3655d79e5 = $this->env->getExtension("native_profiler");
        $__internal_5ca8ba944625e9bdd8b39d5e516f54b462912007d9d64604869df8f3655d79e5->enter($__internal_5ca8ba944625e9bdd8b39d5e516f54b462912007d9d64604869df8f3655d79e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca8ba944625e9bdd8b39d5e516f54b462912007d9d64604869df8f3655d79e5->leave($__internal_5ca8ba944625e9bdd8b39d5e516f54b462912007d9d64604869df8f3655d79e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdafb5da873953a96215c3ac279e1c97ab649a2e0ed98ee48d1dead56f80b46f = $this->env->getExtension("native_profiler");
        $__internal_cdafb5da873953a96215c3ac279e1c97ab649a2e0ed98ee48d1dead56f80b46f->enter($__internal_cdafb5da873953a96215c3ac279e1c97ab649a2e0ed98ee48d1dead56f80b46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cdafb5da873953a96215c3ac279e1c97ab649a2e0ed98ee48d1dead56f80b46f->leave($__internal_cdafb5da873953a96215c3ac279e1c97ab649a2e0ed98ee48d1dead56f80b46f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c075bb9540821412642127f5e21ca56fe4649a3b7de03cbc3580b5fe60d7acc3 = $this->env->getExtension("native_profiler");
        $__internal_c075bb9540821412642127f5e21ca56fe4649a3b7de03cbc3580b5fe60d7acc3->enter($__internal_c075bb9540821412642127f5e21ca56fe4649a3b7de03cbc3580b5fe60d7acc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c075bb9540821412642127f5e21ca56fe4649a3b7de03cbc3580b5fe60d7acc3->leave($__internal_c075bb9540821412642127f5e21ca56fe4649a3b7de03cbc3580b5fe60d7acc3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_099e05e79a56bd12ffdd56a4186f6bf58a4e08148c057d1b07693adc84f72e45 = $this->env->getExtension("native_profiler");
        $__internal_099e05e79a56bd12ffdd56a4186f6bf58a4e08148c057d1b07693adc84f72e45->enter($__internal_099e05e79a56bd12ffdd56a4186f6bf58a4e08148c057d1b07693adc84f72e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_099e05e79a56bd12ffdd56a4186f6bf58a4e08148c057d1b07693adc84f72e45->leave($__internal_099e05e79a56bd12ffdd56a4186f6bf58a4e08148c057d1b07693adc84f72e45_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
