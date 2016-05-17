<?php

/* @PedagogiePedagogie/admin/salle/modalsallelayout.html.twig */
class __TwigTemplate_9d05adcceb380b490ce53e6649c634c7f3acb6b93b23e5793760906afcfbe24c extends Twig_Template
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
        $__internal_95dc9009db34ddb652f4fa56d810b543a7771e0d611d5b31510abd9c74162ed8 = $this->env->getExtension("native_profiler");
        $__internal_95dc9009db34ddb652f4fa56d810b543a7771e0d611d5b31510abd9c74162ed8->enter($__internal_95dc9009db34ddb652f4fa56d810b543a7771e0d611d5b31510abd9c74162ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/salle/modalsallelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"salle";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "salle", array()), "html", null, true);
        echo " :</p>
\t\t\t\t\t\t<p> Capacité = ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "capacite", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t\t<p> Audio : ";
        // line 11
        if (($this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "audio", array()) == 0)) {
            echo " Non ";
        } else {
            echo " Oui ";
        }
        echo "</p>
\t\t\t\t\t\t<p> Retro : ";
        // line 12
        if (($this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "retro", array()) == 0)) {
            echo " Non ";
        } else {
            echo " Oui ";
        }
        echo "</p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_95dc9009db34ddb652f4fa56d810b543a7771e0d611d5b31510abd9c74162ed8->leave($__internal_95dc9009db34ddb652f4fa56d810b543a7771e0d611d5b31510abd9c74162ed8_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/salle/modalsallelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  42 => 11,  38 => 10,  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="salle{{ salle.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ salle.salle }} :</p>*/
/* 						<p> Capacité = {{ salle.capacite }}  </p>*/
/* 						<p> Audio : {% if salle.audio == 0 %} Non {% else %} Oui {% endif %}</p>*/
/* 						<p> Retro : {% if salle.retro == 0 %} Non {% else %} Oui {% endif %}</p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
