<?php

/* @PedagogiePedagogie/prof/discipline/adddisciplinelayout.html.twig */
class __TwigTemplate_acecbe26e70e572cfb8c521672d88275e7a9ad1ab26bdc4092cbce2dea1bade5 extends Twig_Template
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
        $__internal_9d54246c5040b897c568609504ebb12e81a844bec1a106d003260ddf0e8bf3f6 = $this->env->getExtension("native_profiler");
        $__internal_9d54246c5040b897c568609504ebb12e81a844bec1a106d003260ddf0e8bf3f6->enter($__internal_9d54246c5040b897c568609504ebb12e81a844bec1a106d003260ddf0e8bf3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/prof/discipline/adddisciplinelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"adddiscipline\">
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
                
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"dis-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form class=\"adddisciplineform\"  method=\"POST\">
                  <!-- Nom -->
                  <div class=\"dis-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nomdiscipline\" class=\"form-control\" placeholder=\"Nom de la discipline\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"dis-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"depdiscipline\" class=\"form-control\" >
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"addfiltag\" value=\"addfil\" hidden>
\t\t\t\t  <input type=\"text\" name=\"adddiscipline_url\" value=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("pedagogie_adddiscipline");
        echo "\" hidden>
\t\t\t\t  
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
        
        $__internal_9d54246c5040b897c568609504ebb12e81a844bec1a106d003260ddf0e8bf3f6->leave($__internal_9d54246c5040b897c568609504ebb12e81a844bec1a106d003260ddf0e8bf3f6_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/prof/discipline/adddisciplinelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 41,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="adddiscipline">*/
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
/*                 */
/*                 <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="dis-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form class="adddisciplineform"  method="POST">*/
/*                   <!-- Nom -->*/
/*                   <div class="dis-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nomdiscipline" class="form-control" placeholder="Nom de la discipline">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="dis-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="depdiscipline" class="form-control" >*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="addfiltag" value="addfil" hidden>*/
/* 				  <input type="text" name="adddiscipline_url" value="{{ path('pedagogie_adddiscipline') }}" hidden>*/
/* 				  */
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
