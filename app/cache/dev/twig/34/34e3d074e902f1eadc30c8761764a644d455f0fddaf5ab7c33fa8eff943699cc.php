<?php

/* PedagogiePedagogieBundle:etudiant/discipline:modaldisciplinelayout.html.twig */
class __TwigTemplate_369151f7438bad81a6c75371afd292a98e7b0bfc0e57b6bb11affbfded43baa2 extends Twig_Template
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
        $__internal_9fd7da13a158a47570ebb6a5a209f94a885f773ff1dbb6bfb36f9423de543c78 = $this->env->getExtension("native_profiler");
        $__internal_9fd7da13a158a47570ebb6a5a209f94a885f773ff1dbb6bfb36f9423de543c78->enter($__internal_9fd7da13a158a47570ebb6a5a209f94a885f773ff1dbb6bfb36f9423de543c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:etudiant/discipline:modaldisciplinelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"dis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_9fd7da13a158a47570ebb6a5a209f94a885f773ff1dbb6bfb36f9423de543c78->leave($__internal_9fd7da13a158a47570ebb6a5a209f94a885f773ff1dbb6bfb36f9423de543c78_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:etudiant/discipline:modaldisciplinelayout.html.twig";
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
/* <div class="fade modal text-center" id="dis{{ dis.discipline }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ dis.discipline }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
