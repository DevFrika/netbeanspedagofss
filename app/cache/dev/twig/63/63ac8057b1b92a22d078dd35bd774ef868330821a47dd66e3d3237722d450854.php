<?php

/* PedagogiePedagogieBundle::admin/salle/deletesallelayout.html.twig */
class __TwigTemplate_9f8406da29b4a39eda00f2601bd1f4fa496266090c916951537d790f07a6970a extends Twig_Template
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
        $__internal_3eaf63ddf5b03447d8a28b1ea6c503668c25886519d219ab122f49cd41daec3e = $this->env->getExtension("native_profiler");
        $__internal_3eaf63ddf5b03447d8a28b1ea6c503668c25886519d219ab122f49cd41daec3e->enter($__internal_3eaf63ddf5b03447d8a28b1ea6c503668c25886519d219ab122f49cd41daec3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/salle/deletesallelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delsalle";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette Salle ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "salle", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteSalle(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "','#delsalle";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_3eaf63ddf5b03447d8a28b1ea6c503668c25886519d219ab122f49cd41daec3e->leave($__internal_3eaf63ddf5b03447d8a28b1ea6c503668c25886519d219ab122f49cd41daec3e_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/salle/deletesallelayout.html.twig";
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
/* <div class="fade modal text-center" id="delsalle{{ salle.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette Salle {{ salle.salle }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteSalle(event, '{{ salle.id }}','#delsalle{{ salle.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/