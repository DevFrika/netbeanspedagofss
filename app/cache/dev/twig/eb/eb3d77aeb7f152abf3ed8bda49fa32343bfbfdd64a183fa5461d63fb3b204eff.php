<?php

/* default/accueiladmin.html.twig */
class __TwigTemplate_caef2b783c2153e99294d00ac6ea32ff26c1454f760245ca8c5da6ec29f002d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "default/accueiladmin.html.twig", 1);
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
        $__internal_8a64c68957b9f9742d5522fcbb6f0bdbb6c38c4dcf0f8adafcd3734640c9590d = $this->env->getExtension("native_profiler");
        $__internal_8a64c68957b9f9742d5522fcbb6f0bdbb6c38c4dcf0f8adafcd3734640c9590d->enter($__internal_8a64c68957b9f9742d5522fcbb6f0bdbb6c38c4dcf0f8adafcd3734640c9590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueiladmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a64c68957b9f9742d5522fcbb6f0bdbb6c38c4dcf0f8adafcd3734640c9590d->leave($__internal_8a64c68957b9f9742d5522fcbb6f0bdbb6c38c4dcf0f8adafcd3734640c9590d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2bcec0e6812a9eea336fc75de321c3ed459847ccc6c7f1ec1f5cee3bd57021b = $this->env->getExtension("native_profiler");
        $__internal_f2bcec0e6812a9eea336fc75de321c3ed459847ccc6c7f1ec1f5cee3bd57021b->enter($__internal_f2bcec0e6812a9eea336fc75de321c3ed459847ccc6c7f1ec1f5cee3bd57021b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t\t";
        $this->displayBlock('submenu', $context, $blocks);
        // line 10
        echo "\t\t
\t\t";
        // line 11
        $this->displayBlock('bodycontent', $context, $blocks);
        // line 14
        echo "\t\t
";
        
        $__internal_f2bcec0e6812a9eea336fc75de321c3ed459847ccc6c7f1ec1f5cee3bd57021b->leave($__internal_f2bcec0e6812a9eea336fc75de321c3ed459847ccc6c7f1ec1f5cee3bd57021b_prof);

    }

    // line 5
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_5df582f8fb595b4f29f25e85e971a13d342f5419d2feaa0450eabfbe622c874f = $this->env->getExtension("native_profiler");
        $__internal_5df582f8fb595b4f29f25e85e971a13d342f5419d2feaa0450eabfbe622c874f->enter($__internal_5df582f8fb595b4f29f25e85e971a13d342f5419d2feaa0450eabfbe622c874f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 6
        echo "\t\t\t<h2> Bienvenue sur l'interface d'accueil administration  </h2>

\t\t\t<p> Page en construction ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "PAGE_TITLE", array(), "array"), "html", null, true);
        echo " </p>
\t\t";
        
        $__internal_5df582f8fb595b4f29f25e85e971a13d342f5419d2feaa0450eabfbe622c874f->leave($__internal_5df582f8fb595b4f29f25e85e971a13d342f5419d2feaa0450eabfbe622c874f_prof);

    }

    // line 11
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_08c7428bdf918fc4eb4feb8be07543b673725cc5acab3da64d3d5805ddfcae37 = $this->env->getExtension("native_profiler");
        $__internal_08c7428bdf918fc4eb4feb8be07543b673725cc5acab3da64d3d5805ddfcae37->enter($__internal_08c7428bdf918fc4eb4feb8be07543b673725cc5acab3da64d3d5805ddfcae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 12
        echo "\t\t
\t\t";
        
        $__internal_08c7428bdf918fc4eb4feb8be07543b673725cc5acab3da64d3d5805ddfcae37->leave($__internal_08c7428bdf918fc4eb4feb8be07543b673725cc5acab3da64d3d5805ddfcae37_prof);

    }

    public function getTemplateName()
    {
        return "default/accueiladmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  77 => 11,  68 => 8,  64 => 6,  58 => 5,  50 => 14,  48 => 11,  45 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* 		{% block submenu %}*/
/* 			<h2> Bienvenue sur l'interface d'accueil administration  </h2>*/
/* */
/* 			<p> Page en construction {{ lang['PAGE_TITLE'] }} </p>*/
/* 		{% endblock %}*/
/* 		*/
/* 		{% block bodycontent %}*/
/* 		*/
/* 		{% endblock %}*/
/* 		*/
/* {% endblock %}*/
/* 	*/
/* 	*/
