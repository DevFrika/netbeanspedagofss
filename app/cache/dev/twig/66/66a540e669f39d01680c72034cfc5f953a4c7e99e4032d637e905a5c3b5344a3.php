<?php

/* PedagogiePedagogieBundle:etudiant/filiere:modalfilierelayout.html.twig */
class __TwigTemplate_fa8afdfeb8c7fd2fb3b0d41ced79312e84d85e243dd81b5735abb60e9bb5ba75 extends Twig_Template
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
        $__internal_d3334b8ff29d47f1bca5150e9e36cb20d7371528052c6e0b588f8f39a31b2ddd = $this->env->getExtension("native_profiler");
        $__internal_d3334b8ff29d47f1bca5150e9e36cb20d7371528052c6e0b588f8f39a31b2ddd->enter($__internal_d3334b8ff29d47f1bca5150e9e36cb20d7371528052c6e0b588f8f39a31b2ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:etudiant/filiere:modalfilierelayout.html.twig"));

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
        
        $__internal_d3334b8ff29d47f1bca5150e9e36cb20d7371528052c6e0b588f8f39a31b2ddd->leave($__internal_d3334b8ff29d47f1bca5150e9e36cb20d7371528052c6e0b588f8f39a31b2ddd_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:etudiant/filiere:modalfilierelayout.html.twig";
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