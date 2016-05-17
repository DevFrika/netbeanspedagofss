<?php

/* PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig */
class __TwigTemplate_a7a95016d451c43015149c4c8a51da5dbe3b28e8e63090a60b722de89de595b7 extends Twig_Template
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
        $__internal_671d6f62f1c7da1ba39e17e66d001ea9dd8da16dbc3c27947884561e3f5e0f13 = $this->env->getExtension("native_profiler");
        $__internal_671d6f62f1c7da1ba39e17e66d001ea9dd8da16dbc3c27947884561e3f5e0f13->enter($__internal_671d6f62f1c7da1ba39e17e66d001ea9dd8da16dbc3c27947884561e3f5e0f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"ens";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
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
        
        $__internal_671d6f62f1c7da1ba39e17e66d001ea9dd8da16dbc3c27947884561e3f5e0f13->leave($__internal_671d6f62f1c7da1ba39e17e66d001ea9dd8da16dbc3c27947884561e3f5e0f13_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig";
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
/* <div class="fade modal text-center" id="ens{{ ens.id }}">*/
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
