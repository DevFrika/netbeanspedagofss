<?php

/* PedagogiePedagogieBundle:admin/groupe:modalgroupelayout.html.twig */
class __TwigTemplate_932c93962699912ae96cf9561210d5aeee55dc910777691173960597e64832db extends Twig_Template
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
        $__internal_fa738d9cb5b2e9295f5c3537c995f7237ebc42c6bf62c030f984cf0b6d1d68b9 = $this->env->getExtension("native_profiler");
        $__internal_fa738d9cb5b2e9295f5c3537c995f7237ebc42c6bf62c030f984cf0b6d1d68b9->enter($__internal_fa738d9cb5b2e9295f5c3537c995f7237ebc42c6bf62c030f984cf0b6d1d68b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:admin/groupe:modalgroupelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"grp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "id", array()), "html", null, true);
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
        
        $__internal_fa738d9cb5b2e9295f5c3537c995f7237ebc42c6bf62c030f984cf0b6d1d68b9->leave($__internal_fa738d9cb5b2e9295f5c3537c995f7237ebc42c6bf62c030f984cf0b6d1d68b9_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/groupe:modalgroupelayout.html.twig";
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
/* <div class="fade modal text-center" id="grp{{ grp.id }}">*/
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
