<?php

/* @PedagogiePedagogie/admin/discipline/modaldisciplinelayout.html.twig */
class __TwigTemplate_03392cfc4f83c14ba9b2a9cb44a82e5b0ff7da43a7a2de435bb563275da75673 extends Twig_Template
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
        $__internal_ce3a151c2cc83350b4a4527fc21f407b18981e04ef3725d5f366a6f3cfdcfb2b = $this->env->getExtension("native_profiler");
        $__internal_ce3a151c2cc83350b4a4527fc21f407b18981e04ef3725d5f366a6f3cfdcfb2b->enter($__internal_ce3a151c2cc83350b4a4527fc21f407b18981e04ef3725d5f366a6f3cfdcfb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/discipline/modaldisciplinelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"dis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "id", array()), "html", null, true);
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
        
        $__internal_ce3a151c2cc83350b4a4527fc21f407b18981e04ef3725d5f366a6f3cfdcfb2b->leave($__internal_ce3a151c2cc83350b4a4527fc21f407b18981e04ef3725d5f366a6f3cfdcfb2b_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/discipline/modaldisciplinelayout.html.twig";
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
/* <div class="fade modal text-center" id="dis{{ dis.id }}">*/
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
