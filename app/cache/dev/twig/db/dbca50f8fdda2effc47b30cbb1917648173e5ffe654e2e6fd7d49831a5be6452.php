<?php

/* @PedagogiePedagogie/admin/enseignant/deleteenseignantlayout.html.twig */
class __TwigTemplate_b4924c641659a7ffeb5d13e5cf98a6580adac5e827a34395efcb005d68784747 extends Twig_Template
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
        $__internal_8756f2dc6fc5e204b0a9d00ab2dcdbe1381351b5f0286dfae8a2433f27c65dba = $this->env->getExtension("native_profiler");
        $__internal_8756f2dc6fc5e204b0a9d00ab2dcdbe1381351b5f0286dfae8a2433f27c65dba->enter($__internal_8756f2dc6fc5e204b0a9d00ab2dcdbe1381351b5f0286dfae8a2433f27c65dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/enseignant/deleteenseignantlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delens";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cet enseignant ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo " ? </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteEnseignant(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo "','#delens";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_8756f2dc6fc5e204b0a9d00ab2dcdbe1381351b5f0286dfae8a2433f27c65dba->leave($__internal_8756f2dc6fc5e204b0a9d00ab2dcdbe1381351b5f0286dfae8a2433f27c65dba_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/enseignant/deleteenseignantlayout.html.twig";
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
/* <div class="fade modal text-center" id="delens{{ ens.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cet enseignant {{ ens.enseignant }} ? </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteEnseignant(event, '{{ ens.enseignant }}','#delens{{ ens.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/