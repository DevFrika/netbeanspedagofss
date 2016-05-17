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
        $__internal_4d63cc401903126b6aab4da1169c94d4764648174aa9d0c9b91a9ce1ffa3181a = $this->env->getExtension("native_profiler");
        $__internal_4d63cc401903126b6aab4da1169c94d4764648174aa9d0c9b91a9ce1ffa3181a->enter($__internal_4d63cc401903126b6aab4da1169c94d4764648174aa9d0c9b91a9ce1ffa3181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d63cc401903126b6aab4da1169c94d4764648174aa9d0c9b91a9ce1ffa3181a->leave($__internal_4d63cc401903126b6aab4da1169c94d4764648174aa9d0c9b91a9ce1ffa3181a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b55ee71952f5bb02af86d09e2474348672ef3a3a77169b02466bb535940cbfd = $this->env->getExtension("native_profiler");
        $__internal_5b55ee71952f5bb02af86d09e2474348672ef3a3a77169b02466bb535940cbfd->enter($__internal_5b55ee71952f5bb02af86d09e2474348672ef3a3a77169b02466bb535940cbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b55ee71952f5bb02af86d09e2474348672ef3a3a77169b02466bb535940cbfd->leave($__internal_5b55ee71952f5bb02af86d09e2474348672ef3a3a77169b02466bb535940cbfd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca0c1bed92b792804c21e770295cc1d24771df7412d1c014ccc0c17985b70239 = $this->env->getExtension("native_profiler");
        $__internal_ca0c1bed92b792804c21e770295cc1d24771df7412d1c014ccc0c17985b70239->enter($__internal_ca0c1bed92b792804c21e770295cc1d24771df7412d1c014ccc0c17985b70239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca0c1bed92b792804c21e770295cc1d24771df7412d1c014ccc0c17985b70239->leave($__internal_ca0c1bed92b792804c21e770295cc1d24771df7412d1c014ccc0c17985b70239_prof);

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
