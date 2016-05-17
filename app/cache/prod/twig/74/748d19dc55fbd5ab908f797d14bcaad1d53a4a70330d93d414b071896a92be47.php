<?php

/* PedagogiePedagogieBundle:normal/departement:updatedepartementlayout.html.twig */
class __TwigTemplate_404b1bbe2264170960200e57c540fccd545a4b56451436171a7c48f81404b603 extends Twig_Template
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
        echo "<div id=\"updatedep";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : null), "departement", array()), "html", null, true);
        echo "\" class=\"tabs w3-container w3-section w3-animate-left col-md-10\" style=\"margin-left:20px\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'departementlayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> departement - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : null), "departement", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t";
        // line 7
        if (((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : null) != null)) && ((isset($context["typeuser"]) ? $context["typeuser"] : null) == "admin"))) {
            // line 8
            echo "\t\t\t
\t\t\t\t";
        }
        // line 10
        echo "\t\t</header>
\t\t

\t\t<div class=\"w3-clear\"></div>
\t\t
\t\t<div class=\"container-fluid text-center\">
              <div class=\"col-lg-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
\t\t\t\t\t
\t\t\t\t\t <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"dep-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
               
                <!-- FORM -->
                <form name=\"form";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : null), "departement", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateDepartement(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : null), "departement", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"dep-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomdepartement\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : null), "departement", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"upddeptag\" value=\"updatedep\" hidden>
\t\t\t\t  <input type=\"text\" name=\"olddepname\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dep"]) ? $context["dep"] : null), "departement", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatedepartement_url\" value=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatedepartement");
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
    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:normal/departement:updatedepartementlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 43,  80 => 42,  69 => 34,  60 => 30,  38 => 10,  34 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatedep{{ dep.departement }}" class="tabs w3-container w3-section w3-animate-left col-md-10" style="margin-left:20px">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'departementlayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> departement - {{ dep.departement }} </b></h3>*/
/* 				{% if session_id is defined and session_id != null and typeuser == "admin" %}*/
/* 			*/
/* 				{% endif %}*/
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
/* 					 <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="dep-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ dep.departement }}"  method="POST" onsubmit="updateDepartement(event,'form{{ dep.departement }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="dep-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnomdepartement" class="form-control" value="{{ dep.departement }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="upddeptag" value="updatedep" hidden>*/
/* 				  <input type="text" name="olddepname" value="{{ dep.departement }}" hidden>*/
/* 				  <input type="text" name="updatedepartement_url" value="{{ path('pedagogie_updatedepartement') }}" hidden>*/
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
