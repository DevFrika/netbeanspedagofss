<?php

/* :default:accueil.html.twig */
class __TwigTemplate_e20afb394dd804c15e349ec4fe5a960c788315661c819f5a3a59525940b4784f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", ":default:accueil.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3a3dd612311f76755ebefdccc52d7f2a1ef1c1b1eff070bada468c7fecf3c5e0 = $this->env->getExtension("native_profiler");
        $__internal_3a3dd612311f76755ebefdccc52d7f2a1ef1c1b1eff070bada468c7fecf3c5e0->enter($__internal_3a3dd612311f76755ebefdccc52d7f2a1ef1c1b1eff070bada468c7fecf3c5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3dd612311f76755ebefdccc52d7f2a1ef1c1b1eff070bada468c7fecf3c5e0->leave($__internal_3a3dd612311f76755ebefdccc52d7f2a1ef1c1b1eff070bada468c7fecf3c5e0_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_e0d65c49e4257a25ad9df57e20b2ab60f4d843b793a0f8cf9827d279252dbd65 = $this->env->getExtension("native_profiler");
        $__internal_e0d65c49e4257a25ad9df57e20b2ab60f4d843b793a0f8cf9827d279252dbd65->enter($__internal_e0d65c49e4257a25ad9df57e20b2ab60f4d843b793a0f8cf9827d279252dbd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil   </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_e0d65c49e4257a25ad9df57e20b2ab60f4d843b793a0f8cf9827d279252dbd65->leave($__internal_e0d65c49e4257a25ad9df57e20b2ab60f4d843b793a0f8cf9827d279252dbd65_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_8efadf1a159aeaf9209ba879ab40344d8ca53b948c9ae65bb8e67cb3e225464a = $this->env->getExtension("native_profiler");
        $__internal_8efadf1a159aeaf9209ba879ab40344d8ca53b948c9ae65bb8e67cb3e225464a->enter($__internal_8efadf1a159aeaf9209ba879ab40344d8ca53b948c9ae65bb8e67cb3e225464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t <h2> Body content </h2>
\t\t 
\t\t";
        
        $__internal_8efadf1a159aeaf9209ba879ab40344d8ca53b948c9ae65bb8e67cb3e225464a->leave($__internal_8efadf1a159aeaf9209ba879ab40344d8ca53b948c9ae65bb8e67cb3e225464a_prof);

    }

    public function getTemplateName()
    {
        return ":default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  54 => 11,  45 => 7,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* 		{% block submenu %}*/
/* 			<h2> Bienvenue sur l'interface d'accueil   </h2>*/
/* */
/* 			<p> Page en construction {{ lang['PAGE_TITLE'] }} </p>*/
/* 		{% endblock %}*/
/* 		*/
/* 		*/
/* 		{% block bodycontent %}*/
/* 		*/
/* 		 <h2> Body content </h2>*/
/* 		 */
/* 		{% endblock %}*/
/* 		*/
/* */
