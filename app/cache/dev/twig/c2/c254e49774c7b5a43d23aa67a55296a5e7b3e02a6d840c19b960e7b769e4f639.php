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
        $__internal_35726c3759dde1ca5d5b6cc37dfaa561716baffa462a77ed58210b66a2df94e5 = $this->env->getExtension("native_profiler");
        $__internal_35726c3759dde1ca5d5b6cc37dfaa561716baffa462a77ed58210b66a2df94e5->enter($__internal_35726c3759dde1ca5d5b6cc37dfaa561716baffa462a77ed58210b66a2df94e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35726c3759dde1ca5d5b6cc37dfaa561716baffa462a77ed58210b66a2df94e5->leave($__internal_35726c3759dde1ca5d5b6cc37dfaa561716baffa462a77ed58210b66a2df94e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a110ffe59b604a62085ebf990f5267def8cd54e1d1c5499da58cbe2bb333fbb7 = $this->env->getExtension("native_profiler");
        $__internal_a110ffe59b604a62085ebf990f5267def8cd54e1d1c5499da58cbe2bb333fbb7->enter($__internal_a110ffe59b604a62085ebf990f5267def8cd54e1d1c5499da58cbe2bb333fbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a110ffe59b604a62085ebf990f5267def8cd54e1d1c5499da58cbe2bb333fbb7->leave($__internal_a110ffe59b604a62085ebf990f5267def8cd54e1d1c5499da58cbe2bb333fbb7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e9debba80adadc388363f7e0aeec168b139e44408571a6c832584be2b2884e7 = $this->env->getExtension("native_profiler");
        $__internal_8e9debba80adadc388363f7e0aeec168b139e44408571a6c832584be2b2884e7->enter($__internal_8e9debba80adadc388363f7e0aeec168b139e44408571a6c832584be2b2884e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e9debba80adadc388363f7e0aeec168b139e44408571a6c832584be2b2884e7->leave($__internal_8e9debba80adadc388363f7e0aeec168b139e44408571a6c832584be2b2884e7_prof);

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
