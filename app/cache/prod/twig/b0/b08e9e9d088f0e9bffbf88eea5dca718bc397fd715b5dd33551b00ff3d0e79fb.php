<?php

/* PedagogiePedagogieBundle:admin/filiere:updatefilierelayout.html.twig */
class __TwigTemplate_9f2a7a8cd8007ab98784d03d49c1a211c5c2cb4be445548dd0e2543361f0c9a0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "id", array()), "html", null, true);
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
              <div class=\"col-lg-10 col-md-offset-1\" >
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
                <form name=\"formfil";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "id", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateFiliere(event,'formfil";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "id", array()), "html", null, true);
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
\t\t\t\t  
\t\t\t\t  <!-- Description de la  Filiere -->
                  <div class=\"fil-form-group\">
                    <label> Déscription </label>
                    <input type=\"text\" name=\"upddescfiliere\" class=\"form-control\" placeholder=\"Description de la  Filiere\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "description", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
                  <!-- Departement -->
                  <div class=\"fil-form-group\">
                    <label> Département </label>
                   <select type=\"text\" name=\"upddepfiliere\" class=\"form-control\" >
\t\t\t\t   <option value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "departement", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "departement", array()), "departement", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 49
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "departement", array()), "id", array()) != $this->getAttribute($context["dep"], "id", array()))) {
                // line 50
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updfiltag\" value=\"updatefil\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldfilname\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatefiliere_url\" value=\"";
        // line 61
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
        return "PedagogiePedagogieBundle:admin/filiere:updatefilierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  119 => 60,  110 => 53,  104 => 52,  96 => 50,  93 => 49,  89 => 48,  83 => 47,  71 => 38,  61 => 31,  52 => 27,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatefil{{ fil.id}}" class="tabs w3-container w3-section w3-animate-left">*/
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
/*               <div class="col-lg-10 col-md-offset-1" >*/
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
/*                 <form name="formfil{{ fil.id }}"  method="POST" onsubmit="updateFiliere(event,'formfil{{ fil.id }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="fil-form-groupp">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnomfiliere" class="form-control" value="{{ fil.filiere }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Description de la  Filiere -->*/
/*                   <div class="fil-form-group">*/
/*                     <label> Déscription </label>*/
/*                     <input type="text" name="upddescfiliere" class="form-control" placeholder="Description de la  Filiere" value="{{ fil.description }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/*                   <!-- Departement -->*/
/*                   <div class="fil-form-group">*/
/*                     <label> Département </label>*/
/*                    <select type="text" name="upddepfiliere" class="form-control" >*/
/* 				   <option value="{{ fil.departement.id }}">{{ fil.departement.departement }}</option>*/
/* 						{%for dep in alldepartement %}*/
/* 							{% if fil.departement.id != dep.id %}*/
/* 							<option value="{{ dep.departement }}">{{ dep.departement}}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
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