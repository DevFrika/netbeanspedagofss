<?php

/* PedagogiePedagogieBundle:etudiant/voeux:modalvoeuxlayout.html.twig */
class __TwigTemplate_f0778d2cb1ee6b28f7f7602fc08145fb194452f40a8b0601ccf282951a0dc28a extends Twig_Template
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
        $__internal_47c558abad42266d47330491f818636480f707450ea78f01835dcf38aa3851d7 = $this->env->getExtension("native_profiler");
        $__internal_47c558abad42266d47330491f818636480f707450ea78f01835dcf38aa3851d7->enter($__internal_47c558abad42266d47330491f818636480f707450ea78f01835dcf38aa3851d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:etudiant/voeux:modalvoeuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"veu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_47c558abad42266d47330491f818636480f707450ea78f01835dcf38aa3851d7->leave($__internal_47c558abad42266d47330491f818636480f707450ea78f01835dcf38aa3851d7_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:etudiant/voeux:modalvoeuxlayout.html.twig";
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
/* <div class="fade modal text-center" id="veu{{ veu.voeux }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ veu.voeux }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
