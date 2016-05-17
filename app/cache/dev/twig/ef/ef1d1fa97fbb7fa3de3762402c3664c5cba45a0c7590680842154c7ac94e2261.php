<?php

/* @PedagogiePedagogie/etudiant/voeux/modalvoeuxlayout.html.twig */
class __TwigTemplate_f9a463addfb756e620865a23fd4e75bc2f291c94253968f3be2028fa65274d4b extends Twig_Template
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
        $__internal_ae5c496a160c8a2876a138b8da3a8d1b66b6d658dd0f18004371fb6ceed6a45c = $this->env->getExtension("native_profiler");
        $__internal_ae5c496a160c8a2876a138b8da3a8d1b66b6d658dd0f18004371fb6ceed6a45c->enter($__internal_ae5c496a160c8a2876a138b8da3a8d1b66b6d658dd0f18004371fb6ceed6a45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/voeux/modalvoeuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"veu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_ae5c496a160c8a2876a138b8da3a8d1b66b6d658dd0f18004371fb6ceed6a45c->leave($__internal_ae5c496a160c8a2876a138b8da3a8d1b66b6d658dd0f18004371fb6ceed6a45c_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/voeux/modalvoeuxlayout.html.twig";
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
/* <div class="fade modal text-center" id="veu{{ veu.voeux }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ veu.voeux }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
