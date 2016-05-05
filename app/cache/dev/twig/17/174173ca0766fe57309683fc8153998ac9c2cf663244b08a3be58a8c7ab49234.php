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
        $__internal_d3c9e83dd8eb453158e46e91f3aabc3663d7496ad8bd40ea264d08a9f562295e = $this->env->getExtension("native_profiler");
        $__internal_d3c9e83dd8eb453158e46e91f3aabc3663d7496ad8bd40ea264d08a9f562295e->enter($__internal_d3c9e83dd8eb453158e46e91f3aabc3663d7496ad8bd40ea264d08a9f562295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c9e83dd8eb453158e46e91f3aabc3663d7496ad8bd40ea264d08a9f562295e->leave($__internal_d3c9e83dd8eb453158e46e91f3aabc3663d7496ad8bd40ea264d08a9f562295e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75d80fc816419793aebff0d1cc89bf986770d323085f4d67279cc60c7e120518 = $this->env->getExtension("native_profiler");
        $__internal_75d80fc816419793aebff0d1cc89bf986770d323085f4d67279cc60c7e120518->enter($__internal_75d80fc816419793aebff0d1cc89bf986770d323085f4d67279cc60c7e120518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75d80fc816419793aebff0d1cc89bf986770d323085f4d67279cc60c7e120518->leave($__internal_75d80fc816419793aebff0d1cc89bf986770d323085f4d67279cc60c7e120518_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8504ca0e318d5f218b56af2b17c52c7a1d7d7e4d0ad36a4fcfcd24c5136fcee1 = $this->env->getExtension("native_profiler");
        $__internal_8504ca0e318d5f218b56af2b17c52c7a1d7d7e4d0ad36a4fcfcd24c5136fcee1->enter($__internal_8504ca0e318d5f218b56af2b17c52c7a1d7d7e4d0ad36a4fcfcd24c5136fcee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8504ca0e318d5f218b56af2b17c52c7a1d7d7e4d0ad36a4fcfcd24c5136fcee1->leave($__internal_8504ca0e318d5f218b56af2b17c52c7a1d7d7e4d0ad36a4fcfcd24c5136fcee1_prof);

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
