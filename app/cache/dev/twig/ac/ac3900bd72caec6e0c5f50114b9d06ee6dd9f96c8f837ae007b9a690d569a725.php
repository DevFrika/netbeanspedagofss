<?php

/* @PedagogiePedagogie/template/addmodulelayout.html.twig */
class __TwigTemplate_59c15b303be4518ab44f47cf74215daf1b00fc5e7fa0d958c3919045231a2ef0 extends Twig_Template
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
        $__internal_d2622d33fb30d405f31502054ebe3f695605728ad8ffad41c09b565d3798658d = $this->env->getExtension("native_profiler");
        $__internal_d2622d33fb30d405f31502054ebe3f695605728ad8ffad41c09b565d3798658d->enter($__internal_d2622d33fb30d405f31502054ebe3f695605728ad8ffad41c09b565d3798658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/template/addmodulelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addmodule\">
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
                <div id=\"messages\" class=\"addmodule \"></div>
                <!-- FORM -->
                <form class=\"addmoduleform\"  method=\"POST\">
                  <!-- Nom -->
                  <div class=\"form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nommodule\" class=\"form-control\" placeholder=\"Nom du module \">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"depmodule\" class=\"form-control\" >
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"addmodtag\" value=\"addmodule\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addmodule_url\" value=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("pedagogie_addmodule");
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
        
        $__internal_d2622d33fb30d405f31502054ebe3f695605728ad8ffad41c09b565d3798658d->leave($__internal_d2622d33fb30d405f31502054ebe3f695605728ad8ffad41c09b565d3798658d_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/template/addmodulelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 37,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addmodule">*/
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
/*                 <div id="messages" class="addmodule "></div>*/
/*                 <!-- FORM -->*/
/*                 <form class="addmoduleform"  method="POST">*/
/*                   <!-- Nom -->*/
/*                   <div class="form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nommodule" class="form-control" placeholder="Nom du module ">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="depmodule" class="form-control" >*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="addmodtag" value="addmodule" hidden>*/
/* 				  <input type="text" name="addmodule_url" value="{{ path('pedagogie_addmodule') }}" hidden>*/
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
