<?php

/* @PedagogiePedagogie/admin/discipline/updatedisciplinelayout.html.twig */
class __TwigTemplate_d7bdd6a102d2a293f06c82a31ccf591f4bb1eea47558c1cfb647414c39b2d588 extends Twig_Template
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
        $__internal_1f7be98c75a44063e65426f03e9ef87be73c3877bbe861bbc9af6ca3f5371a7a = $this->env->getExtension("native_profiler");
        $__internal_1f7be98c75a44063e65426f03e9ef87be73c3877bbe861bbc9af6ca3f5371a7a->enter($__internal_1f7be98c75a44063e65426f03e9ef87be73c3877bbe861bbc9af6ca3f5371a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/discipline/updatedisciplinelayout.html.twig"));

        // line 1
        echo "<div id=\"updatedis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "id", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'disciplinelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> discipline - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
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
                <div class=\"dis-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"formdis";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "id", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateDiscipline(event,'formdis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "id", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "id", array()), "html", null, true);
        echo "')\" >
                 
\t\t\t\t  <!-- Nom -->
                  <div class=\"form-group dis-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nomdiscipline\" class=\"form-control\" placeholder=\"Nom de la discipline\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t   <!-- Departements -->
                  <div class=\"form-group dis-form-group\">
                    <label> Départements </label>
                    <select id=\"depdisselect\" onchange=\"disLoadFiliere(this.value,'fildisselect')\" class=\"form-control\" class=\"form-control\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 43
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t
\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group dis-form-group\">
                    <label> Filieres </label>
                    <select id=\"updfildisselect";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" class=\"form-control\">
\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"upddistag\" value=\"updatedis\" hidden>
\t\t\t\t  <input type=\"text\" name=\"olddisname\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getfil_url\" value=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatediscipline_url\" value=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatediscipline");
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
        
        $__internal_1f7be98c75a44063e65426f03e9ef87be73c3877bbe861bbc9af6ca3f5371a7a->leave($__internal_1f7be98c75a44063e65426f03e9ef87be73c3877bbe861bbc9af6ca3f5371a7a_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/discipline/updatedisciplinelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 66,  123 => 65,  119 => 64,  105 => 53,  95 => 45,  84 => 43,  80 => 42,  67 => 32,  55 => 27,  31 => 6,  22 => 1,);
    }
}
/* <div id="updatedis{{ dis.id }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'disciplinelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> discipline - {{ dis.discipline }} </b></h3>*/
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
/*                 <div class="dis-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="formdis{{ dis.id }}"  method="POST" onsubmit="updateDiscipline(event,'formdis{{ dis.id }}','{{ dis.id }}')" >*/
/*                  */
/* 				  <!-- Nom -->*/
/*                   <div class="form-group dis-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nomdiscipline" class="form-control" placeholder="Nom de la discipline" value="{{ dis.discipline }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				   <!-- Departements -->*/
/*                   <div class="form-group dis-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="depdisselect" onchange="disLoadFiliere(this.value,'fildisselect')" class="form-control" class="form-control">*/
/* 						*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.departement }}">{{ dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 						*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group dis-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="updfildisselect{{ dis.id }}" class="form-control" class="form-control">*/
/* 					*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="upddistag" value="updatedis" hidden>*/
/* 				  <input type="text" name="olddisname" value="{{ dis.discipline }}" hidden>*/
/* 				  <input type="text" name="getfil_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
/* 				  <input type="text" name="updatediscipline_url" value="{{ path('pedagogie_updatediscipline') }}" hidden>*/
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
