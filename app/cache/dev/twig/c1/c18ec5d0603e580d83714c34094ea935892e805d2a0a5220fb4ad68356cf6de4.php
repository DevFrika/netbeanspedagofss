<?php

/* PedagogiePedagogieBundle:etudiant/groupe:modalgroupelayout.html.twig */
class __TwigTemplate_07805b06b1b36d3ab3bbf0b67e6278fdb4a3018344975dee85d3ed10b643f6c5 extends Twig_Template
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
        $__internal_5c3964fe74b21ddb1a1cd8476d589ff1aad568c8ab0660fea486c6b65b5273be = $this->env->getExtension("native_profiler");
        $__internal_5c3964fe74b21ddb1a1cd8476d589ff1aad568c8ab0660fea486c6b65b5273be->enter($__internal_5c3964fe74b21ddb1a1cd8476d589ff1aad568c8ab0660fea486c6b65b5273be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:etudiant/groupe:modalgroupelayout.html.twig"));

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
        
        $__internal_5c3964fe74b21ddb1a1cd8476d589ff1aad568c8ab0660fea486c6b65b5273be->leave($__internal_5c3964fe74b21ddb1a1cd8476d589ff1aad568c8ab0660fea486c6b65b5273be_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:etudiant/groupe:modalgroupelayout.html.twig";
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
