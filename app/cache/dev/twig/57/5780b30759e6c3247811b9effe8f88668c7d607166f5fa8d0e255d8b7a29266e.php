<?php

/* PedagogiePedagogieBundle:etudiant/departement:modaldepartementlayout.html.twig */
class __TwigTemplate_e09a16902f2de20b2886d09cbf3cdc2fe74146d6d33b8a2fed8d53ec91774d93 extends Twig_Template
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
        $__internal_d2f36dd2eab681f17dd2c69c6f33305f7eec2f39a7e97603015263b4c2cec6c1 = $this->env->getExtension("native_profiler");
        $__internal_d2f36dd2eab681f17dd2c69c6f33305f7eec2f39a7e97603015263b4c2cec6c1->enter($__internal_d2f36dd2eab681f17dd2c69c6f33305f7eec2f39a7e97603015263b4c2cec6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:etudiant/departement:modaldepartementlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"dep";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : $this->getContext($context, "dep")), "departement", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : $this->getContext($context, "dep")), "departement", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dep"]) ? $context["dep"] : $this->getContext($context, "dep")), "filieres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fili"]) {
            // line 12
            echo "\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#fil";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fili"], "filiere", array()), "html", null, true);
            echo "\" > <i class=\"fa fa-eye\"></i> Consulter la filiere  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fili"], "filiere", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fili'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_d2f36dd2eab681f17dd2c69c6f33305f7eec2f39a7e97603015263b4c2cec6c1->leave($__internal_d2f36dd2eab681f17dd2c69c6f33305f7eec2f39a7e97603015263b4c2cec6c1_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:etudiant/departement:modaldepartementlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  43 => 12,  39 => 11,  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="dep{{ dep.departement }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ dep.departement }}  </p>*/
/* 						*/
/* 						{% for fili in dep.filieres  %}*/
/* 							<a class="btn btn-primary" data-toggle="modal" data-target="#fil{{ fili.filiere }}" > <i class="fa fa-eye"></i> Consulter la filiere  {{ fili.filiere }}</a>*/
/* 						{% endfor %}*/
/* 						  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/