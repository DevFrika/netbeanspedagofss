<?php

/* PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig */
class __TwigTemplate_2c01f4be03e64663baf9dec4b640401811899ef7a3b2446c3ab0bda220a9d273 extends Twig_Template
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
        $__internal_1950d2fec3d6625a2a272761a2d08a198e124c8d399e6d33a1ced3225b6d5703 = $this->env->getExtension("native_profiler");
        $__internal_1950d2fec3d6625a2a272761a2d08a198e124c8d399e6d33a1ced3225b6d5703->enter($__internal_1950d2fec3d6625a2a272761a2d08a198e124c8d399e6d33a1ced3225b6d5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig"));

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
        
        $__internal_1950d2fec3d6625a2a272761a2d08a198e124c8d399e6d33a1ced3225b6d5703->leave($__internal_1950d2fec3d6625a2a272761a2d08a198e124c8d399e6d33a1ced3225b6d5703_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig";
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
