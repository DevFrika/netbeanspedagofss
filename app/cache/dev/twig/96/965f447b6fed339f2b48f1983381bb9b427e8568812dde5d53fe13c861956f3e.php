<?php

/* @PedagogiePedagogie/admin/devoir/modaldevoirlayout.html.twig */
class __TwigTemplate_522c69809143294c6191027cdbd2369af9cf2a74dc067fb0be7a7c53a2470673 extends Twig_Template
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
        $__internal_11b3f84dd755444faa25b58dfc8e3501f4c91d4bad969c66567d35548a2fec61 = $this->env->getExtension("native_profiler");
        $__internal_11b3f84dd755444faa25b58dfc8e3501f4c91d4bad969c66567d35548a2fec61->enter($__internal_11b3f84dd755444faa25b58dfc8e3501f4c91d4bad969c66567d35548a2fec61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/devoir/modaldevoirlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"dev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_11b3f84dd755444faa25b58dfc8e3501f4c91d4bad969c66567d35548a2fec61->leave($__internal_11b3f84dd755444faa25b58dfc8e3501f4c91d4bad969c66567d35548a2fec61_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/devoir/modaldevoirlayout.html.twig";
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
/* <div class="fade modal text-center" id="dev{{ dev.devoir }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ dev.devoir }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
