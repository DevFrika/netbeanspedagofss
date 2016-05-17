<?php

/* @PedagogiePedagogie/prof/groupe/modalgroupelayout.html.twig */
class __TwigTemplate_d85525a33c55c3fe9c3be7f2ba2e7d051001cd23417d5df8c383f4e5faab4fd4 extends Twig_Template
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
        $__internal_6ce6d8c5ea9ff1eb6d17e5bf94c7b1388829929659ef938679ce902df180c084 = $this->env->getExtension("native_profiler");
        $__internal_6ce6d8c5ea9ff1eb6d17e5bf94c7b1388829929659ef938679ce902df180c084->enter($__internal_6ce6d8c5ea9ff1eb6d17e5bf94c7b1388829929659ef938679ce902df180c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/prof/groupe/modalgroupelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"grp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_6ce6d8c5ea9ff1eb6d17e5bf94c7b1388829929659ef938679ce902df180c084->leave($__internal_6ce6d8c5ea9ff1eb6d17e5bf94c7b1388829929659ef938679ce902df180c084_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/prof/groupe/modalgroupelayout.html.twig";
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
/* <div class="fade modal text-center" id="grp{{ grp.groupe }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ grp.groupe }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
