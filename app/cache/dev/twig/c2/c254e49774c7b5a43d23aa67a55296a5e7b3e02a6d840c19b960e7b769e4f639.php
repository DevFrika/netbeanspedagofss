<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ebd69dedc3932d6db4353db0218b2ad520b30dc053464eab96d93708291991e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa24d3fd5e0882c90b79fe2b271456422a6b056ef026d17e7169eeb91ae73a13 = $this->env->getExtension("native_profiler");
        $__internal_fa24d3fd5e0882c90b79fe2b271456422a6b056ef026d17e7169eeb91ae73a13->enter($__internal_fa24d3fd5e0882c90b79fe2b271456422a6b056ef026d17e7169eeb91ae73a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa24d3fd5e0882c90b79fe2b271456422a6b056ef026d17e7169eeb91ae73a13->leave($__internal_fa24d3fd5e0882c90b79fe2b271456422a6b056ef026d17e7169eeb91ae73a13_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f3cd907e7bb0b9c914f979cac3c2b4e0d2dbbff5c7c8637c74e8bb24ec4d289 = $this->env->getExtension("native_profiler");
        $__internal_3f3cd907e7bb0b9c914f979cac3c2b4e0d2dbbff5c7c8637c74e8bb24ec4d289->enter($__internal_3f3cd907e7bb0b9c914f979cac3c2b4e0d2dbbff5c7c8637c74e8bb24ec4d289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3f3cd907e7bb0b9c914f979cac3c2b4e0d2dbbff5c7c8637c74e8bb24ec4d289->leave($__internal_3f3cd907e7bb0b9c914f979cac3c2b4e0d2dbbff5c7c8637c74e8bb24ec4d289_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e9cfaefa4614f12f99badbed427e75c88564021189a60b7b20a939494ba9c69 = $this->env->getExtension("native_profiler");
        $__internal_7e9cfaefa4614f12f99badbed427e75c88564021189a60b7b20a939494ba9c69->enter($__internal_7e9cfaefa4614f12f99badbed427e75c88564021189a60b7b20a939494ba9c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7e9cfaefa4614f12f99badbed427e75c88564021189a60b7b20a939494ba9c69->leave($__internal_7e9cfaefa4614f12f99badbed427e75c88564021189a60b7b20a939494ba9c69_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
