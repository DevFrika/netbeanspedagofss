<?php

/* @PedagogiePedagogie/prof/filiere/updatefilierelayout.html.twig */
class __TwigTemplate_7d337f6060036a4269c6b17570cb09d9a8920063e136cc421faf723557d28544 extends Twig_Template
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
        echo "<div id=\"updatefil";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo "\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'filierelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Filiere - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t
\t\t</header>
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
                <div class=\"fil-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateFiliere(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"fil-form-groupp\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomfiliere\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"fil-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepfiliere\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "departement", array()), "departement", array()), "html", null, true);
        echo "\">
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updfiltag\" value=\"updatefil\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldfilname\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatefiliere_url\" value=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatefiliere");
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
        return "@PedagogiePedagogie/prof/filiere/updatefilierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 46,  81 => 45,  70 => 37,  61 => 31,  52 => 27,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatefil{{ fil.filiere }}" class="tabs w3-container w3-section w3-animate-left">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'filierelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> Filiere - {{ fil.filiere }} </b></h3>*/
/* 				*/
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
/*                 <div class="fil-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ fil.filiere }}"  method="POST" onsubmit="updateFiliere(event,'form{{ fil.filiere }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="fil-form-groupp">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnomfiliere" class="form-control" value="{{ fil.filiere }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="fil-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="upddepfiliere" class="form-control" value="{{ fil.departement.departement }}">*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updfiltag" value="updatefil" hidden>*/
/* 				  <input type="text" name="oldfilname" value="{{ fil.filiere }}" hidden>*/
/* 				  <input type="text" name="updatefiliere_url" value="{{ path('pedagogie_updatefiliere') }}" hidden>*/
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
