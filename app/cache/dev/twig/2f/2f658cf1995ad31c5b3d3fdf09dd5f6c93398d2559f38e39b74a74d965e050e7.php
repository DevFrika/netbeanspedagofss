<?php

/* @PedagogiePedagogie/normal/classe/modalclasselayout.html.twig */
class __TwigTemplate_7d0089c51f52313921341fe647dfbb64b8bbd40f95eb38c12f7a41fdce60d125 extends Twig_Template
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
        $__internal_b7518f69716037f9f26d9e06d5fdb4c6beca884543fa100f11b59e9ca51e85a5 = $this->env->getExtension("native_profiler");
        $__internal_b7518f69716037f9f26d9e06d5fdb4c6beca884543fa100f11b59e9ca51e85a5->enter($__internal_b7518f69716037f9f26d9e06d5fdb4c6beca884543fa100f11b59e9ca51e85a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/normal/classe/modalclasselayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"cls";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")), "classe", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")), "classe", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_b7518f69716037f9f26d9e06d5fdb4c6beca884543fa100f11b59e9ca51e85a5->leave($__internal_b7518f69716037f9f26d9e06d5fdb4c6beca884543fa100f11b59e9ca51e85a5_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/normal/classe/modalclasselayout.html.twig";
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
/* <div class="fade modal text-center" id="cls{{ cls.classe }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ cls.classe }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
