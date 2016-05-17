<?php

/* @PedagogiePedagogie/normal/groupe/addgroupelayout.html.twig */
class __TwigTemplate_449db691f3cc4ab223bc34b9e20a84401df19735d8a83ce8743133aa30c73a8b extends Twig_Template
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
        $__internal_18a4fc131081adc03cea4a13343476b1812fa7aad6c42d510e2670da23ccfdee = $this->env->getExtension("native_profiler");
        $__internal_18a4fc131081adc03cea4a13343476b1812fa7aad6c42d510e2670da23ccfdee->enter($__internal_18a4fc131081adc03cea4a13343476b1812fa7aad6c42d510e2670da23ccfdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/normal/groupe/addgroupelayout.html.twig"));

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
                
               <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"grp-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form class=\"addgroupeform\"  method=\"POST\">
                  <!-- Nom -->
                  <div class=\"grp-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nomgroupe\" class=\"form-control\" placeholder=\"Nom de la groupe\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"grp-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"depgroupe\" class=\"form-control\" >
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"addfiltag\" value=\"addfil\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addgroupe_url\" value=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("pedagogie_addgroupe");
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
        
        $__internal_18a4fc131081adc03cea4a13343476b1812fa7aad6c42d510e2670da23ccfdee->leave($__internal_18a4fc131081adc03cea4a13343476b1812fa7aad6c42d510e2670da23ccfdee_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/normal/groupe/addgroupelayout.html.twig";
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
/*                 */
/*                <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="grp-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form class="addgroupeform"  method="POST">*/
/*                   <!-- Nom -->*/
/*                   <div class="grp-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nomgroupe" class="form-control" placeholder="Nom de la groupe">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="grp-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="depgroupe" class="form-control" >*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="addfiltag" value="addfil" hidden>*/
/* 				  <input type="text" name="addgroupe_url" value="{{ path('pedagogie_addgroupe') }}" hidden>*/
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
