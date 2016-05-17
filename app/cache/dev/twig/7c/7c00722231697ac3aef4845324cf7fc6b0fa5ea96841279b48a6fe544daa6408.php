<?php

/* @PedagogiePedagogie/etudiant/filiere/updatefilierelayout.html.twig */
class __TwigTemplate_509ea832a3e347ce93aff84a3eb048bcee35a3bdf16a69b9a367faa4659f34cb extends Twig_Template
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
        $__internal_05f9626ef01e17748dc2ed2e38383ee9e1ef5a8698fc833819b2b48140704ba1 = $this->env->getExtension("native_profiler");
        $__internal_05f9626ef01e17748dc2ed2e38383ee9e1ef5a8698fc833819b2b48140704ba1->enter($__internal_05f9626ef01e17748dc2ed2e38383ee9e1ef5a8698fc833819b2b48140704ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/filiere/updatefilierelayout.html.twig"));

        // line 1
        echo "<div id=\"updatefil";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'filierelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Filiere - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateFiliere(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"fil-form-groupp\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomfiliere\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"fil-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepfiliere\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "departement", array()), "departement", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "filiere", array()), "html", null, true);
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
        
        $__internal_05f9626ef01e17748dc2ed2e38383ee9e1ef5a8698fc833819b2b48140704ba1->leave($__internal_05f9626ef01e17748dc2ed2e38383ee9e1ef5a8698fc833819b2b48140704ba1_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/filiere/updatefilierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 46,  84 => 45,  73 => 37,  64 => 31,  55 => 27,  31 => 6,  22 => 1,);
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
