<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0042853a622c8ebb0e197e74d93655439ff42605c4be3cd1deb0c96d9b2b895d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_9c31d60b221ac4452dcd1de768e97919b0d8c65bbd03eb398db7ca54c4ac85ab = $this->env->getExtension("native_profiler");
        $__internal_9c31d60b221ac4452dcd1de768e97919b0d8c65bbd03eb398db7ca54c4ac85ab->enter($__internal_9c31d60b221ac4452dcd1de768e97919b0d8c65bbd03eb398db7ca54c4ac85ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c31d60b221ac4452dcd1de768e97919b0d8c65bbd03eb398db7ca54c4ac85ab->leave($__internal_9c31d60b221ac4452dcd1de768e97919b0d8c65bbd03eb398db7ca54c4ac85ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_420cee80f837877f6ccce17486fdad78a88b9d281c6c662c1497e8eec666bf59 = $this->env->getExtension("native_profiler");
        $__internal_420cee80f837877f6ccce17486fdad78a88b9d281c6c662c1497e8eec666bf59->enter($__internal_420cee80f837877f6ccce17486fdad78a88b9d281c6c662c1497e8eec666bf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_420cee80f837877f6ccce17486fdad78a88b9d281c6c662c1497e8eec666bf59->leave($__internal_420cee80f837877f6ccce17486fdad78a88b9d281c6c662c1497e8eec666bf59_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7ec142d978725f99354e435f5421c0effa055c95239ddf4a587c877db66414e = $this->env->getExtension("native_profiler");
        $__internal_a7ec142d978725f99354e435f5421c0effa055c95239ddf4a587c877db66414e->enter($__internal_a7ec142d978725f99354e435f5421c0effa055c95239ddf4a587c877db66414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7ec142d978725f99354e435f5421c0effa055c95239ddf4a587c877db66414e->leave($__internal_a7ec142d978725f99354e435f5421c0effa055c95239ddf4a587c877db66414e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
