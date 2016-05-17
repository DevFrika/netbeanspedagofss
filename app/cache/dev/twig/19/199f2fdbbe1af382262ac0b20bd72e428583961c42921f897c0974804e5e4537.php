<?php

/* PedagogiePedagogieBundle:prof/classe:modalclasselayout.html.twig */
class __TwigTemplate_827dca9769b076046944c16d4b97d2e857926d9677b1328120ab2b1bb33b58b2 extends Twig_Template
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
        $__internal_d95ac320cbc83abbb45b6fa5c1ada76a5a19e7bc6c660b4c13b868fb3fc5f27d = $this->env->getExtension("native_profiler");
        $__internal_d95ac320cbc83abbb45b6fa5c1ada76a5a19e7bc6c660b4c13b868fb3fc5f27d->enter($__internal_d95ac320cbc83abbb45b6fa5c1ada76a5a19e7bc6c660b4c13b868fb3fc5f27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:prof/classe:modalclasselayout.html.twig"));

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
        
        $__internal_d95ac320cbc83abbb45b6fa5c1ada76a5a19e7bc6c660b4c13b868fb3fc5f27d->leave($__internal_d95ac320cbc83abbb45b6fa5c1ada76a5a19e7bc6c660b4c13b868fb3fc5f27d_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:prof/classe:modalclasselayout.html.twig";
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
