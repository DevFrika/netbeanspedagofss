<?php

/* PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig */
class __TwigTemplate_a712b3dea04e8324316094ce19b2f1c1552382a611baf323c9a63b0e9ae66c49 extends Twig_Template
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
        $__internal_3dec7dce5c3cf0ac465d1bf2f6d698cf45cdbe369b90efa43f352b0f789272c3 = $this->env->getExtension("native_profiler");
        $__internal_3dec7dce5c3cf0ac465d1bf2f6d698cf45cdbe369b90efa43f352b0f789272c3->enter($__internal_3dec7dce5c3cf0ac465d1bf2f6d698cf45cdbe369b90efa43f352b0f789272c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"mat";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_3dec7dce5c3cf0ac465d1bf2f6d698cf45cdbe369b90efa43f352b0f789272c3->leave($__internal_3dec7dce5c3cf0ac465d1bf2f6d698cf45cdbe369b90efa43f352b0f789272c3_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig";
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
/* <div class="fade modal text-center" id="mat{{ mat.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ mat.matiere }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
