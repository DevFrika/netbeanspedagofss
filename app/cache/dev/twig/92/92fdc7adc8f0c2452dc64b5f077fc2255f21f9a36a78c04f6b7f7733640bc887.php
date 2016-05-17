<?php

/* @PedagogiePedagogie/normal/emploi/modalemploilayout.html.twig */
class __TwigTemplate_b89a2b5287a4bf216ef9a9d11d36b3c8a9518bc55cd88bb26d0754566ef5823e extends Twig_Template
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
        $__internal_ef5a6dc1e7e9aba27b86a76ef3ce7756d421e391bcdac1992a9ececdd1ab58b8 = $this->env->getExtension("native_profiler");
        $__internal_ef5a6dc1e7e9aba27b86a76ef3ce7756d421e391bcdac1992a9ececdd1ab58b8->enter($__internal_ef5a6dc1e7e9aba27b86a76ef3ce7756d421e391bcdac1992a9ececdd1ab58b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/normal/emploi/modalemploilayout.html.twig"));

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
        
        $__internal_ef5a6dc1e7e9aba27b86a76ef3ce7756d421e391bcdac1992a9ececdd1ab58b8->leave($__internal_ef5a6dc1e7e9aba27b86a76ef3ce7756d421e391bcdac1992a9ececdd1ab58b8_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/normal/emploi/modalemploilayout.html.twig";
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
