<?php

/* :default:accueiletudiant.html.twig */
class __TwigTemplate_1035484b54c9b06bc600ee86f6a444a81c6d10bcae82036251939cd2c4539e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueiletudiant.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b2ff3c96e09f9fc7684d8baae07bae392a87a440c8530ed7149d611d3730a58 = $this->env->getExtension("native_profiler");
        $__internal_7b2ff3c96e09f9fc7684d8baae07bae392a87a440c8530ed7149d611d3730a58->enter($__internal_7b2ff3c96e09f9fc7684d8baae07bae392a87a440c8530ed7149d611d3730a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueiletudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2ff3c96e09f9fc7684d8baae07bae392a87a440c8530ed7149d611d3730a58->leave($__internal_7b2ff3c96e09f9fc7684d8baae07bae392a87a440c8530ed7149d611d3730a58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b36a6d3e48f661b23a766203046a39018c6aebe67033e1acc9cf5cf905b174d = $this->env->getExtension("native_profiler");
        $__internal_5b36a6d3e48f661b23a766203046a39018c6aebe67033e1acc9cf5cf905b174d->enter($__internal_5b36a6d3e48f661b23a766203046a39018c6aebe67033e1acc9cf5cf905b174d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t\t";
        $this->displayBlock('submenu', $context, $blocks);
        // line 9
        echo "\t\t
\t\t";
        // line 10
        $this->displayBlock('bodycontent', $context, $blocks);
        // line 13
        echo "\t\t
";
        
        $__internal_5b36a6d3e48f661b23a766203046a39018c6aebe67033e1acc9cf5cf905b174d->leave($__internal_5b36a6d3e48f661b23a766203046a39018c6aebe67033e1acc9cf5cf905b174d_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_6f8dc8013bbd5956375d4919e79339e171398401799b841fc0f5d1c6bc9eea34 = $this->env->getExtension("native_profiler");
        $__internal_6f8dc8013bbd5956375d4919e79339e171398401799b841fc0f5d1c6bc9eea34->enter($__internal_6f8dc8013bbd5956375d4919e79339e171398401799b841fc0f5d1c6bc9eea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_6f8dc8013bbd5956375d4919e79339e171398401799b841fc0f5d1c6bc9eea34->leave($__internal_6f8dc8013bbd5956375d4919e79339e171398401799b841fc0f5d1c6bc9eea34_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_04b90af9d262cb4df2b84b355a64d82936ab7c64becf9dfd62e05ef85046259d = $this->env->getExtension("native_profiler");
        $__internal_04b90af9d262cb4df2b84b355a64d82936ab7c64becf9dfd62e05ef85046259d->enter($__internal_04b90af9d262cb4df2b84b355a64d82936ab7c64becf9dfd62e05ef85046259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_04b90af9d262cb4df2b84b355a64d82936ab7c64becf9dfd62e05ef85046259d->leave($__internal_04b90af9d262cb4df2b84b355a64d82936ab7c64becf9dfd62e05ef85046259d_prof);

    }

    public function getTemplateName()
    {
        return ":default:accueiletudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  77 => 10,  68 => 7,  64 => 5,  58 => 4,  50 => 13,  48 => 10,  45 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 		{% block submenu %}*/
/* 			<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>*/
/* */
/* 			<p> Page en construction {{ lang['PAGE_TITLE'] }} </p>*/
/* 		{% endblock %}*/
/* 		*/
/* 		{% block bodycontent %}*/
/* 		*/
/* 		{% endblock %}*/
/* 		*/
/* {% endblock %}*/
