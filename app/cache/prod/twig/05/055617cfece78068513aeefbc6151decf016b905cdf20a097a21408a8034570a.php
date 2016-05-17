<?php

/* @PedagogiePedagogie/admin/matiere/updatematierelayout.html.twig */
class __TwigTemplate_6bc34e71aeade9f1fed67c2287ee6502167fd4af9c78f1c8063a5fe8a7eb07b2 extends Twig_Template
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
        echo "<div id=\"updatemat";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "id", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'matierelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Matiere - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "matiere", array()), "html", null, true);
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
                <div class=\"mat-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"formupdmat";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "id", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateMatiere(event,'formupdmat";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "id", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "id", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"mat-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnommatiere";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "matiere", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Departement -->
                  <div class=\"mat-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepmatiere";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "matiere", array()), "html", null, true);
        echo "\" disabled>
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updmattag\" value=\"updatemat\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldmatname\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : null), "matiere", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatematiere_url\" value=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatematiere");
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
        return "@PedagogiePedagogie/admin/matiere/updatematierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 47,  88 => 46,  75 => 38,  63 => 31,  52 => 27,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatemat{{ mat.id }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'matierelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> Matiere - {{ mat.matiere }} </b></h3>*/
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
/*                 <div class="mat-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="formupdmat{{ mat.id }}"  method="POST" onsubmit="updateMatiere(event,'formupdmat{{ mat.id }}','{{ mat.id }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="mat-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnommatiere{{ mat.id }}" class="form-control" value="{{ mat.matiere }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- Departement -->*/
/*                   <div class="mat-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="upddepmatiere{{ mat.id }}" class="form-control" value="{{ mat.matiere }}" disabled>*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updmattag" value="updatemat" hidden>*/
/* 				  <input type="text" name="oldmatname" value="{{ mat.matiere }}" hidden>*/
/* 				  <input type="text" name="updatematiere_url" value="{{ path('pedagogie_updatematiere') }}" hidden>*/
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
