<?php

/* @PedagogiePedagogie/admin/lieux/modallieuxlayout.html.twig */
class __TwigTemplate_92d8e5d3239d27fce902915b19274f5f1b3ef8675dc195917417f75571381f88 extends Twig_Template
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
        $__internal_4a600199620b63c6c2b517cb6edf51a256082f69bad62bad4fa22e14eac30a26 = $this->env->getExtension("native_profiler");
        $__internal_4a600199620b63c6c2b517cb6edf51a256082f69bad62bad4fa22e14eac30a26->enter($__internal_4a600199620b63c6c2b517cb6edf51a256082f69bad62bad4fa22e14eac30a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/lieux/modallieuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"lieux";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "code", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "lieux", array()), "html", null, true);
        echo "    </p>
\t\t\t\t\t\t<p> Ce lieux contient : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "salles", array()), "count", array()), "html", null, true);
        echo "  salles  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_4a600199620b63c6c2b517cb6edf51a256082f69bad62bad4fa22e14eac30a26->leave($__internal_4a600199620b63c6c2b517cb6edf51a256082f69bad62bad4fa22e14eac30a26_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/lieux/modallieuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="lieux{{ lieux.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ lieux.code }} : {{ lieux.lieux }}    </p>*/
/* 						<p> Ce lieux contient : {{ lieux.salles.count }}  salles  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/