<?php

/* @PedagogiePedagogie/normal/departement/adddepartementlayout.html.twig */
class __TwigTemplate_93b0f0b52c6dc22d42662f93396ff35d2d12666fb77352820b7ccacdfc91981f extends Twig_Template
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
        $__internal_905dbb8e49319e8045e3fafa4184e21dd1d5d3aeb6f6630057a175a45c8d7d54 = $this->env->getExtension("native_profiler");
        $__internal_905dbb8e49319e8045e3fafa4184e21dd1d5d3aeb6f6630057a175a45c8d7d54->enter($__internal_905dbb8e49319e8045e3fafa4184e21dd1d5d3aeb6f6630057a175a45c8d7d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/normal/departement/adddepartementlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"adddepartement\">
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
                <div class=\"dep-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form class=\"adddepartementform\"  method=\"POST\">
                  <!-- Nom -->
                  <div class=\"dep-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nomdepartement\" class=\"form-control\" placeholder=\"Nom du departement\">
                    <span class=\"help-block\"></span>
                  </div>
                 
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"adddeptag\" value=\"adddep\" hidden>
\t\t\t\t  <input type=\"text\" name=\"adddepartement_url\" value=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pedagogie_adddepartement");
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
        
        $__internal_905dbb8e49319e8045e3fafa4184e21dd1d5d3aeb6f6630057a175a45c8d7d54->leave($__internal_905dbb8e49319e8045e3fafa4184e21dd1d5d3aeb6f6630057a175a45c8d7d54_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/normal/departement/adddepartementlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 35,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="adddepartement">*/
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
/*                 <div class="dep-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form class="adddepartementform"  method="POST">*/
/*                   <!-- Nom -->*/
/*                   <div class="dep-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nomdepartement" class="form-control" placeholder="Nom du departement">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="adddeptag" value="adddep" hidden>*/
/* 				  <input type="text" name="adddepartement_url" value="{{ path('pedagogie_adddepartement') }}" hidden>*/
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
