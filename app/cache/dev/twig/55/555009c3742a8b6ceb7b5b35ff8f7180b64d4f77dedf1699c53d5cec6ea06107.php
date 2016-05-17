<?php

/* @PedagogiePedagogie/normal/filiere/modalfilierelayout.html.twig */
class __TwigTemplate_7bc6a8d51a9e1eabd84b092cc51204ef42951b859e97753a9583ada8c4641478 extends Twig_Template
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
        $__internal_ad1787f2774b92b70baa2e981bab4e3c4239df8e114c89338b3d98de94ac7ce0 = $this->env->getExtension("native_profiler");
        $__internal_ad1787f2774b92b70baa2e981bab4e3c4239df8e114c89338b3d98de94ac7ce0->enter($__internal_ad1787f2774b92b70baa2e981bab4e3c4239df8e114c89338b3d98de94ac7ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/normal/filiere/modalfilierelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"fil";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_ad1787f2774b92b70baa2e981bab4e3c4239df8e114c89338b3d98de94ac7ce0->leave($__internal_ad1787f2774b92b70baa2e981bab4e3c4239df8e114c89338b3d98de94ac7ce0_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/normal/filiere/modalfilierelayout.html.twig";
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
/* <div class="fade modal text-center" id="fil{{ fil.filiere }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ fil.filiere }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
