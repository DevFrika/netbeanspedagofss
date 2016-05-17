<?php

/* @PedagogiePedagogie/admin/groupe/addgroupelayout.html.twig */
class __TwigTemplate_ccd5c0a985c80743eef468752ef62fe716c90cae5dd66061694cac48d266e2fd extends Twig_Template
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
        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addgroupe\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<div id=\"container\" class=\"container-fluid text-center\">
              <div class=\"col-sm-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
               
                <!-- FORM -->
                <form class=\"addgroupeform\"  method=\"POST\">
\t\t\t\t
\t\t\t\t<div class=\"form-group grp-form-group\">
                    <label> Département du groupe </label>
                    <select id=\"addgrpdepselect\" class=\"form-control\" onchange=\"grpLoadFiliere(this.value,'addgrpfilselect')\">
\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 23
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group grp-form-group\">
                    <label> Filieres du groupe </label>
                    <select id=\"addgrpfilselect\" class=\"form-control\" onchange=\"grpLoadClasse(this.value,'addgrpclsselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Classes -->
                  <div class=\"form-group grp-form-group\">
                    <label> Classe du groupe </label>
                    <select id=\"addgrpclsselect\" class=\"form-control\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t
                  <!-- Nom -->
                  <div class=\"form-group grp-form-group\">
                    <label> Nom du Groupe </label>
                    <input type=\"text\" name=\"addnomgroupe\" class=\"form-control\" placeholder=\"Nom du groupe\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t 
\t\t\t\t  
               <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"form-group grp-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t  <input type=\"text\" name=\"addgrptag\" value=\"addgrp\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addgroupe_url\" value=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("pedagogie_addgroupe");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getfil_url\" value=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getcls_url\" value=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("pedagogie_getfilclasses");
        echo "\" hidden>
                  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t<!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success \"><i class=\"fa fa-plus\"></i> Enregistrer </button>
\t\t\t\t\t
\t\t\t\t\t  </div>
                  
                </form>
              </div>
\t\t\t  </div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/groupe/addgroupelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 66,  102 => 65,  98 => 64,  57 => 25,  46 => 23,  42 => 22,  19 => 1,);
    }
}
/* <div class="fade modal text-center" id="addgroupe">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<div id="container" class="container-fluid text-center">*/
/*               <div class="col-sm-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form class="addgroupeform"  method="POST">*/
/* 				*/
/* 				<div class="form-group grp-form-group">*/
/*                     <label> Département du groupe </label>*/
/*                     <select id="addgrpdepselect" class="form-control" onchange="grpLoadFiliere(this.value,'addgrpfilselect')">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.departement }}">{{ dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group grp-form-group">*/
/*                     <label> Filieres du groupe </label>*/
/*                     <select id="addgrpfilselect" class="form-control" onchange="grpLoadClasse(this.value,'addgrpclsselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Classes -->*/
/*                   <div class="form-group grp-form-group">*/
/*                     <label> Classe du groupe </label>*/
/*                     <select id="addgrpclsselect" class="form-control">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/*                   <!-- Nom -->*/
/*                   <div class="form-group grp-form-group">*/
/*                     <label> Nom du Groupe </label>*/
/*                     <input type="text" name="addnomgroupe" class="form-control" placeholder="Nom du groupe">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				 */
/* 				  */
/*                <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="form-group grp-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				  <input type="text" name="addgrptag" value="addgrp" hidden>*/
/* 				  <input type="text" name="addgroupe_url" value="{{ path('pedagogie_addgroupe') }}" hidden>*/
/* 				  <input type="text" name="getfil_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
/* 				  <input type="text" name="getcls_url" value="{{ path('pedagogie_getfilclasses') }}" hidden>*/
/*                   <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						<!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success "><i class="fa fa-plus"></i> Enregistrer </button>*/
/* 					*/
/* 					  </div>*/
/*                   */
/*                 </form>*/
/*               </div>*/
/* 			  </div>*/
/* 					  </div>*/
/* 					  */
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
