<?php

/* PedagogiePedagogieBundle:prof/matiere:modalmatierelayout.html.twig */
class __TwigTemplate_248510486066d3f09f998f82a4883b486106eeb03d5036cc86d3cd98456c9e62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0755bdd65d0e6448323dd63d7a349ffa51a04b99eb0da1a485da74f586c1d8e = $this->env->getExtension("native_profiler");
        $__internal_e0755bdd65d0e6448323dd63d7a349ffa51a04b99eb0da1a485da74f586c1d8e->enter($__internal_e0755bdd65d0e6448323dd63d7a349ffa51a04b99eb0da1a485da74f586c1d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:prof/matiere:modalmatierelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"mat";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_e0755bdd65d0e6448323dd63d7a349ffa51a04b99eb0da1a485da74f586c1d8e->leave($__internal_e0755bdd65d0e6448323dd63d7a349ffa51a04b99eb0da1a485da74f586c1d8e_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:prof/matiere:modalmatierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="mat{{ mat.matiere }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ mat.matiere }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
