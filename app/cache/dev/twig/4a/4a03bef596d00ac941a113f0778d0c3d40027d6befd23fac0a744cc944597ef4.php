<?php

/* @PedagogiePedagogie/etudiant/filiere/deletefilierelayout.html.twig */
class __TwigTemplate_fada747b1604e5a159e8ee10e609c956aca7c431ed03356de79a1c320b1be282 extends Twig_Template
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
        $__internal_1ef21629bf76a47ef0fd9da10577fdd76bccf26c6f65c53580dba2b25a0be229 = $this->env->getExtension("native_profiler");
        $__internal_1ef21629bf76a47ef0fd9da10577fdd76bccf26c6f65c53580dba2b25a0be229->enter($__internal_1ef21629bf76a47ef0fd9da10577fdd76bccf26c6f65c53580dba2b25a0be229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/filiere/deletefilierelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delfil";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette filiere ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteFiliere(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "','#delfil";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_1ef21629bf76a47ef0fd9da10577fdd76bccf26c6f65c53580dba2b25a0be229->leave($__internal_1ef21629bf76a47ef0fd9da10577fdd76bccf26c6f65c53580dba2b25a0be229_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/filiere/deletefilierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="delfil{{ fil.filiere }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette filiere {{ fil.filiere }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteFiliere(event, '{{ fil.filiere }}','#delfil{{ fil.filiere }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/