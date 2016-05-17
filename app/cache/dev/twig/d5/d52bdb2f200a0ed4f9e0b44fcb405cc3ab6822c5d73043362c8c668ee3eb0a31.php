<?php

/* @PedagogiePedagogie/prof/enseignant/modalenseignantlayout.html.twig */
class __TwigTemplate_e08d43e65678e12990a0bd015432d00fc8e404f94c62bf9a076ec5cbaafa39c6 extends Twig_Template
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
        $__internal_a3d9f27fcd5229ee0b02286f49e4dec2b6aee9635a3407f6a47fdbd69961df1a = $this->env->getExtension("native_profiler");
        $__internal_a3d9f27fcd5229ee0b02286f49e4dec2b6aee9635a3407f6a47fdbd69961df1a->enter($__internal_a3d9f27fcd5229ee0b02286f49e4dec2b6aee9635a3407f6a47fdbd69961df1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/prof/enseignant/modalenseignantlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"ens";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_a3d9f27fcd5229ee0b02286f49e4dec2b6aee9635a3407f6a47fdbd69961df1a->leave($__internal_a3d9f27fcd5229ee0b02286f49e4dec2b6aee9635a3407f6a47fdbd69961df1a_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/prof/enseignant/modalenseignantlayout.html.twig";
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
/* <div class="fade modal text-center" id="ens{{ ens.enseignant }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ ens.enseignant }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
