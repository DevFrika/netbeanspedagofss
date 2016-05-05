<?php

/* @PedagogiePedagogie/template/modalmodulelayout.html.twig */
class __TwigTemplate_4554f6f21ced8399ef18a8c318a1a591697b5303f4439f72af0ce36478fb825c extends Twig_Template
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
        $__internal_1c0ec8978d6e7ed8091dbd70765660fc4a5570df9fd04e12247028d8ef163341 = $this->env->getExtension("native_profiler");
        $__internal_1c0ec8978d6e7ed8091dbd70765660fc4a5570df9fd04e12247028d8ef163341->enter($__internal_1c0ec8978d6e7ed8091dbd70765660fc4a5570df9fd04e12247028d8ef163341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/template/modalmodulelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_1c0ec8978d6e7ed8091dbd70765660fc4a5570df9fd04e12247028d8ef163341->leave($__internal_1c0ec8978d6e7ed8091dbd70765660fc4a5570df9fd04e12247028d8ef163341_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/template/modalmodulelayout.html.twig";
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
/* <div class="fade modal text-center" id="{{ mod.module  }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ mod.module  }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
