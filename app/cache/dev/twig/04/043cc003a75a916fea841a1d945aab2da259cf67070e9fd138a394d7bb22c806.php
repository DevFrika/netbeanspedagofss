<?php

/* @PedagogiePedagogie/prof/emploi/modalemploilayout.html.twig */
class __TwigTemplate_d4ddcd9293d9329c4ead44626b0d4448714ec24401f9a59d2b1f78ec9e7c2408 extends Twig_Template
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
        $__internal_5671f21fbc96bd27e6b0533d81ff6937af12e4c170efe78a99e604e8dd27b8ff = $this->env->getExtension("native_profiler");
        $__internal_5671f21fbc96bd27e6b0533d81ff6937af12e4c170efe78a99e604e8dd27b8ff->enter($__internal_5671f21fbc96bd27e6b0533d81ff6937af12e4c170efe78a99e604e8dd27b8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/prof/emploi/modalemploilayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"emp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_5671f21fbc96bd27e6b0533d81ff6937af12e4c170efe78a99e604e8dd27b8ff->leave($__internal_5671f21fbc96bd27e6b0533d81ff6937af12e4c170efe78a99e604e8dd27b8ff_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/prof/emploi/modalemploilayout.html.twig";
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
/* <div class="fade modal text-center" id="emp{{ emp.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ emp.id }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
