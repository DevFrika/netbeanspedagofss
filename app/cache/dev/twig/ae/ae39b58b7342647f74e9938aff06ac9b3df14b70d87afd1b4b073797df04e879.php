<?php

/* FssWebsiteDepartementBundle:Default:adminindex.html.twig */
class __TwigTemplate_7f9a4b062dbe5e5c486198694781da3d8057da046b7ecc4f47efb40c441a810f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:adminindex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FssWebsiteDepartementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58c36ad78ae7bf74fe46c290c586a2cdf9106b5bc291558b60035c460cea7b48 = $this->env->getExtension("native_profiler");
        $__internal_58c36ad78ae7bf74fe46c290c586a2cdf9106b5bc291558b60035c460cea7b48->enter($__internal_58c36ad78ae7bf74fe46c290c586a2cdf9106b5bc291558b60035c460cea7b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:adminindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c36ad78ae7bf74fe46c290c586a2cdf9106b5bc291558b60035c460cea7b48->leave($__internal_58c36ad78ae7bf74fe46c290c586a2cdf9106b5bc291558b60035c460cea7b48_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_713dd2ed2bee796c28677e0849ef7cb14e2356d3bfeb047bc2634793ffcf7b65 = $this->env->getExtension("native_profiler");
        $__internal_713dd2ed2bee796c28677e0849ef7cb14e2356d3bfeb047bc2634793ffcf7b65->enter($__internal_713dd2ed2bee796c28677e0849ef7cb14e2356d3bfeb047bc2634793ffcf7b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_713dd2ed2bee796c28677e0849ef7cb14e2356d3bfeb047bc2634793ffcf7b65->leave($__internal_713dd2ed2bee796c28677e0849ef7cb14e2356d3bfeb047bc2634793ffcf7b65_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_50776ce60ba66c6db76583a0ae27995184f771f04e5557196bf56cfff1a2757d = $this->env->getExtension("native_profiler");
        $__internal_50776ce60ba66c6db76583a0ae27995184f771f04e5557196bf56cfff1a2757d->enter($__internal_50776ce60ba66c6db76583a0ae27995184f771f04e5557196bf56cfff1a2757d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement accueil - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_50776ce60ba66c6db76583a0ae27995184f771f04e5557196bf56cfff1a2757d->leave($__internal_50776ce60ba66c6db76583a0ae27995184f771f04e5557196bf56cfff1a2757d_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_9197383986bb6337b0b83cd5cf0b0d5d259719b929bfd0739fbe3f619ab98628 = $this->env->getExtension("native_profiler");
        $__internal_9197383986bb6337b0b83cd5cf0b0d5d259719b929bfd0739fbe3f619ab98628->enter($__internal_9197383986bb6337b0b83cd5cf0b0d5d259719b929bfd0739fbe3f619ab98628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_9197383986bb6337b0b83cd5cf0b0d5d259719b929bfd0739fbe3f619ab98628->leave($__internal_9197383986bb6337b0b83cd5cf0b0d5d259719b929bfd0739fbe3f619ab98628_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:adminindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  68 => 15,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Admin*/
/* {% endblock %}*/
/* */
/* {% block submenu %}*/
/* */
/* */
/* <h2>Departement accueil - Submenu admin - Page en construction </h2>*/
/* */
/*        */
/* {% endblock %}*/
/* */
/* */
/* {% block bodycontent %}*/
/* */
/* */
/* <h2>Departement - Body Content admin </h2>*/
/* */
/*        */
/* {% endblock %}*/
