<?php

/* PedagogiePedagogieBundle:prof/departement:deletedepartementlayout.html.twig */
class __TwigTemplate_d4850eecf16d98928ba7716a6173b91892c37af71fb569a3e550436284ef121b extends Twig_Template
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
        $__internal_3b5526f987f93ecc73d97f8198bb44133a6102db2a6b561dbc6343b76c1acdd4 = $this->env->getExtension("native_profiler");
        $__internal_3b5526f987f93ecc73d97f8198bb44133a6102db2a6b561dbc6343b76c1acdd4->enter($__internal_3b5526f987f93ecc73d97f8198bb44133a6102db2a6b561dbc6343b76c1acdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:prof/departement:deletedepartementlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"deldep";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : $this->getContext($context, "dep")), "departement", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : $this->getContext($context, "dep")), "departement", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteDepartement(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : $this->getContext($context, "dep")), "departement", array()), "html", null, true);
        echo "','#deldep";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : $this->getContext($context, "dep")), "departement", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_3b5526f987f93ecc73d97f8198bb44133a6102db2a6b561dbc6343b76c1acdd4->leave($__internal_3b5526f987f93ecc73d97f8198bb44133a6102db2a6b561dbc6343b76c1acdd4_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:prof/departement:deletedepartementlayout.html.twig";
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
/* <div class="fade modal text-center" id="deldep{{ dep.departement }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette filiere {{ dep.departement }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteDepartement(event, '{{ dep.departement }}','#deldep{{ dep.departement }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
