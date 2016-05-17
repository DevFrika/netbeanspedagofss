<?php

/* PedagogiePedagogieBundle:template:modalmodulelayout.html.twig */
class __TwigTemplate_34bd808e867ab5ef5e59467e8a4778ae735ccf4259e566310faaa188445b9696 extends Twig_Template
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
        $__internal_3f5b2ea3f3f4b8181fd8684a09ad571b7d95ab31d6d5ca948e7ef4d59f34f5c3 = $this->env->getExtension("native_profiler");
        $__internal_3f5b2ea3f3f4b8181fd8684a09ad571b7d95ab31d6d5ca948e7ef4d59f34f5c3->enter($__internal_3f5b2ea3f3f4b8181fd8684a09ad571b7d95ab31d6d5ca948e7ef4d59f34f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:template:modalmodulelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_3f5b2ea3f3f4b8181fd8684a09ad571b7d95ab31d6d5ca948e7ef4d59f34f5c3->leave($__internal_3f5b2ea3f3f4b8181fd8684a09ad571b7d95ab31d6d5ca948e7ef4d59f34f5c3_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:template:modalmodulelayout.html.twig";
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
/* <div class="fade modal text-center" id="{{ mod.module  }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ mod.module  }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
