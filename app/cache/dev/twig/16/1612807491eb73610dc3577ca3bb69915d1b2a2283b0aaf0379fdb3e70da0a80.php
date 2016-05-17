<?php

/* PedagogiePedagogieBundle::admin/salle/updatesallelayout.html.twig */
class __TwigTemplate_762577c53c4e267d86af5f480ca6d3fa3942880004258940a3438670f36f5787 extends Twig_Template
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
        $__internal_10d1c97c9e1a0df72978aa78655e201040fd32edd32d10ed13ac353696f5ac57 = $this->env->getExtension("native_profiler");
        $__internal_10d1c97c9e1a0df72978aa78655e201040fd32edd32d10ed13ac353696f5ac57->enter($__internal_10d1c97c9e1a0df72978aa78655e201040fd32edd32d10ed13ac353696f5ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/salle/updatesallelayout.html.twig"));

        // line 1
        echo "<div id=\"updatesalle";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'sallelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Salle - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "salle", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t
\t\t</header>
\t\t

\t\t<div class=\"w3-clear\"></div>
\t\t
\t\t<div class=\"container-fluid text-center\">
              <div class=\"col-lg-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
\t\t\t\t\t
\t\t\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                
               
                <!-- FORM -->
                <form name=\"formsalle";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal\"  method=\"POST\" onsubmit=\"updatesalle(event,'formsalle";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "')\" >
\t\t\t\t
                  <!-- Nom -->
                  <div class=\"form-group salle-form-groupp\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomsalle\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "salle", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t
\t\t\t\t  
\t\t\t\t  <div class=\"form-group salle-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updsalletag\" value=\"updatesalle\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldsallename\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "salle", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatesalle_url\" value=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatesalle");
        echo "\" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">
                    Enregistrer <i class=\"glyphicon glyphicon-save\"></i> </button>
                </form>
              </div>
\t\t\t  </div>
\t\t\t\t
\t\t
\t
\t</div>
";
        
        $__internal_10d1c97c9e1a0df72978aa78655e201040fd32edd32d10ed13ac353696f5ac57->leave($__internal_10d1c97c9e1a0df72978aa78655e201040fd32edd32d10ed13ac353696f5ac57_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/salle/updatesallelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 45,  80 => 44,  63 => 30,  53 => 25,  31 => 6,  22 => 1,);
    }
}
/* <div id="updatesalle{{ salle.id}}" class="tabs w3-container w3-section w3-animate-left">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'sallelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> Salle - {{ salle.salle }} </b></h3>*/
/* 				*/
/* 		</header>*/
/* 		*/
/* */
/* 		<div class="w3-clear"></div>*/
/* 		*/
/* 		<div class="container-fluid text-center">*/
/*               <div class="col-lg-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/* 					*/
/* 					<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 */
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="formsalle{{ salle.id }}" class="form-horizontal"  method="POST" onsubmit="updatesalle(event,'formsalle{{ salle.id }}')" >*/
/* 				*/
/*                   <!-- Nom -->*/
/*                   <div class="form-group salle-form-groupp">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnomsalle" class="form-control" value="{{ salle.salle }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				*/
/* 				  */
/* 				  <div class="form-group salle-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updsalletag" value="updatesalle" hidden>*/
/* 				  <input type="text" name="oldsallename" value="{{ salle.salle }}" hidden>*/
/* 				  <input type="text" name="updatesalle_url" value="{{ path('pedagogie_updatesalle') }}" hidden>*/
/*                   <!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success btn-lg btn-block">*/
/*                     Enregistrer <i class="glyphicon glyphicon-save"></i> </button>*/
/*                 </form>*/
/*               </div>*/
/* 			  </div>*/
/* 				*/
/* 		*/
/* 	*/
/* 	</div>*/
/* */
