<?php

/* @PedagogiePedagogie/etudiant/matiere/modalmatierelayout.html.twig */
class __TwigTemplate_8fdb1cdad08dd0af898625f94fc6b27ad8a4971323aa907494274d11e864c013 extends Twig_Template
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
        $__internal_7b6fd25b3ef5504056fd5246b0faf3944f828885798fefb6ae39326f6c7dc5bc = $this->env->getExtension("native_profiler");
        $__internal_7b6fd25b3ef5504056fd5246b0faf3944f828885798fefb6ae39326f6c7dc5bc->enter($__internal_7b6fd25b3ef5504056fd5246b0faf3944f828885798fefb6ae39326f6c7dc5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/matiere/modalmatierelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"mat";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
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
        
        $__internal_7b6fd25b3ef5504056fd5246b0faf3944f828885798fefb6ae39326f6c7dc5bc->leave($__internal_7b6fd25b3ef5504056fd5246b0faf3944f828885798fefb6ae39326f6c7dc5bc_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/matiere/modalmatierelayout.html.twig";
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
/* <div class="fade modal text-center" id="mat{{ mat.matiere }}">*/
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