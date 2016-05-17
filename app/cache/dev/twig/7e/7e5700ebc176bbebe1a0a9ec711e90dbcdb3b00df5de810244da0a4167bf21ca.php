<?php

/* default/accueiletudiant.html.twig */
class __TwigTemplate_1857de1354f2777986b68647784093fd06c64dc51c21f2623586f6ca7ed73384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "default/accueiletudiant.html.twig", 1);
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
        $__internal_061f87055dbb01ab2761e7970b91dfc295e3544543392fca97e240b3de16c823 = $this->env->getExtension("native_profiler");
        $__internal_061f87055dbb01ab2761e7970b91dfc295e3544543392fca97e240b3de16c823->enter($__internal_061f87055dbb01ab2761e7970b91dfc295e3544543392fca97e240b3de16c823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueiletudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061f87055dbb01ab2761e7970b91dfc295e3544543392fca97e240b3de16c823->leave($__internal_061f87055dbb01ab2761e7970b91dfc295e3544543392fca97e240b3de16c823_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f848eba6c515c881967fea6f1d84371f958b7936221af544137a961b158918e = $this->env->getExtension("native_profiler");
        $__internal_7f848eba6c515c881967fea6f1d84371f958b7936221af544137a961b158918e->enter($__internal_7f848eba6c515c881967fea6f1d84371f958b7936221af544137a961b158918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f848eba6c515c881967fea6f1d84371f958b7936221af544137a961b158918e->leave($__internal_7f848eba6c515c881967fea6f1d84371f958b7936221af544137a961b158918e_prof);

    }

    // line 4
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_0a2a657175cd17afc48bb83cd8e2f9886f53a0ac1064c47373f5792b4fa18582 = $this->env->getExtension("native_profiler");
        $__internal_0a2a657175cd17afc48bb83cd8e2f9886f53a0ac1064c47373f5792b4fa18582->enter($__internal_0a2a657175cd17afc48bb83cd8e2f9886f53a0ac1064c47373f5792b4fa18582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 5
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil Etudiant  </h2>

\t\t\t<p> Page en construction ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_0a2a657175cd17afc48bb83cd8e2f9886f53a0ac1064c47373f5792b4fa18582->leave($__internal_0a2a657175cd17afc48bb83cd8e2f9886f53a0ac1064c47373f5792b4fa18582_prof);

    }

    // line 10
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_b289a7a2bebabd70a566842516b506e39ea3b9465113bb92f1621be36ba27efb = $this->env->getExtension("native_profiler");
        $__internal_b289a7a2bebabd70a566842516b506e39ea3b9465113bb92f1621be36ba27efb->enter($__internal_b289a7a2bebabd70a566842516b506e39ea3b9465113bb92f1621be36ba27efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 11
        echo "\t\t
\t\t";
        
        $__internal_b289a7a2bebabd70a566842516b506e39ea3b9465113bb92f1621be36ba27efb->leave($__internal_b289a7a2bebabd70a566842516b506e39ea3b9465113bb92f1621be36ba27efb_prof);

    }

    public function getTemplateName()
    {
        return "default/accueiletudiant.html.twig";
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
