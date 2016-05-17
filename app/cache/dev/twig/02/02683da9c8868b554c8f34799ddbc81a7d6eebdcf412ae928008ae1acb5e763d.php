<?php

/* @PedagogiePedagogie/prof/groupe/updategroupelayout.html.twig */
class __TwigTemplate_fd791e26796d5a954ea0e5f88578657c463d2403437eaf98780cdc13db68bd10 extends Twig_Template
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
        $__internal_aae1b6eb7d1536ec50e2faf3e99d23910e4d2da7ae86340b1d3a2c6e18b0968e = $this->env->getExtension("native_profiler");
        $__internal_aae1b6eb7d1536ec50e2faf3e99d23910e4d2da7ae86340b1d3a2c6e18b0968e->enter($__internal_aae1b6eb7d1536ec50e2faf3e99d23910e4d2da7ae86340b1d3a2c6e18b0968e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/prof/groupe/updategroupelayout.html.twig"));

        // line 1
        echo "<div id=\"updategrp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'groupelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> groupe - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t";
        // line 7
        if (((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : $this->getContext($context, "session_id")) != null)) && ((isset($context["typeuser"]) ? $context["typeuser"] : $this->getContext($context, "typeuser")) == "admin"))) {
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
              <div class=\"col-sm-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
\t\t\t\t\t
\t\t\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"grp-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateGroupe(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"grp-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomgroupe\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"grp-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepgroupe\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "departement", array()), "departement", array()), "html", null, true);
        echo "\">
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updgrptag\" value=\"updategrp\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldgrpname\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updategroupe_url\" value=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("pedagogie_updategroupe");
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
        
        $__internal_aae1b6eb7d1536ec50e2faf3e99d23910e4d2da7ae86340b1d3a2c6e18b0968e->leave($__internal_aae1b6eb7d1536ec50e2faf3e99d23910e4d2da7ae86340b1d3a2c6e18b0968e_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/prof/groupe/updategroupelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 48,  91 => 47,  80 => 39,  71 => 33,  62 => 29,  41 => 10,  37 => 8,  35 => 7,  31 => 6,  22 => 1,);
    }
}
/* <div id="updategrp{{ grp.groupe }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'groupelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> groupe - {{ grp.groupe }} </b></h3>*/
/* 				{% if session_id is defined and session_id != null and typeuser == "admin" %}*/
/* 			*/
/* 				{% endif %}*/
/* 		</header>*/
/* 		*/
/* */
/* 		<div class="w3-clear"></div>*/
/* 		*/
/* 		<div class="container-fluid text-center">*/
/*               <div class="col-sm-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/* 					*/
/* 					<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="grp-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ grp.groupe }}"  method="POST" onsubmit="updateGroupe(event,'form{{ grp.groupe }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="grp-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnomgroupe" class="form-control" value="{{ grp.groupe }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="grp-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="upddepgroupe" class="form-control" value="{{ grp.departement.departement }}">*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updgrptag" value="updategrp" hidden>*/
/* 				  <input type="text" name="oldgrpname" value="{{ grp.groupe }}" hidden>*/
/* 				  <input type="text" name="updategroupe_url" value="{{ path('pedagogie_updategroupe') }}" hidden>*/
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
