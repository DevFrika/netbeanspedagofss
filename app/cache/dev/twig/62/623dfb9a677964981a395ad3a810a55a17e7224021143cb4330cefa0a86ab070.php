<?php

/* @PedagoFssUser/Default/index.html.twig */
class __TwigTemplate_ae31db69e9adea88b7172eeb69ebb35c3aae78ba58f512641a6f511c1e5cdeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d83e5137c2cb616d3d547b34212337fb55a188d7527b74fae6f8fe03559bfbc5 = $this->env->getExtension("native_profiler");
        $__internal_d83e5137c2cb616d3d547b34212337fb55a188d7527b74fae6f8fe03559bfbc5->enter($__internal_d83e5137c2cb616d3d547b34212337fb55a188d7527b74fae6f8fe03559bfbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83e5137c2cb616d3d547b34212337fb55a188d7527b74fae6f8fe03559bfbc5->leave($__internal_d83e5137c2cb616d3d547b34212337fb55a188d7527b74fae6f8fe03559bfbc5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5067e64e5050e28d5ffebd0692a4684f6c7629dec60ca67b8abbed92840c2ba4 = $this->env->getExtension("native_profiler");
        $__internal_5067e64e5050e28d5ffebd0692a4684f6c7629dec60ca67b8abbed92840c2ba4->enter($__internal_5067e64e5050e28d5ffebd0692a4684f6c7629dec60ca67b8abbed92840c2ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur 
";
        
        $__internal_5067e64e5050e28d5ffebd0692a4684f6c7629dec60ca67b8abbed92840c2ba4->leave($__internal_5067e64e5050e28d5ffebd0692a4684f6c7629dec60ca67b8abbed92840c2ba4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1772af4a865a2709106a1fe07976c3073ed046f1c588edde488337b8c749dad0 = $this->env->getExtension("native_profiler");
        $__internal_1772af4a865a2709106a1fe07976c3073ed046f1c588edde488337b8c749dad0->enter($__internal_1772af4a865a2709106a1fe07976c3073ed046f1c588edde488337b8c749dad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Normale </h2>

<p>
Page en construction
</p>

";
        
        $__internal_1772af4a865a2709106a1fe07976c3073ed046f1c588edde488337b8c749dad0->leave($__internal_1772af4a865a2709106a1fe07976c3073ed046f1c588edde488337b8c749dad0_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur */
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Normale </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
