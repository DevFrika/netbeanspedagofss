<?php

/* ::layout_loginform.html.twig */
class __TwigTemplate_654cd49fa583c8f0b9323d08bd8b7697616bb6cb6668ea5d1e534a642494212e extends Twig_Template
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
        echo "<div id=\"container\" class=\"container-fluid text-center\">
              <div class=\"col-sm-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
                
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
                <div id=\"login_messages\">
\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form id=\"connexionform\" method=\"POST\">
\t\t\t\t
                  <!-- E-mail -->
                  <div id=\"email-group\" class=\"form-group\">
                    <label> E-mail </label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"e-mail...\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Password -->
                  <div id=\"password-group\" class=\"form-group\">
                    <label></label>
                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password...\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"tag\" value=\"login\" hidden>
\t\t\t\t  <input type=\"text\" name=\"login_url\" value=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">
                    <i class=\"glyphicon glyphicon-log-in\"></i> Connexion </button>
                </form>
              </div>
\t\t\t  </div>";
    }

    public function getTemplateName()
    {
        return "::layout_loginform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 35,  19 => 1,);
    }
}
/* <div id="container" class="container-fluid text-center">*/
/*               <div class="col-sm-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/*                 */
/*                 <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/*                 <div id="login_messages">*/
/* 					<span class="help-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form id="connexionform" method="POST">*/
/* 				*/
/*                   <!-- E-mail -->*/
/*                   <div id="email-group" class="form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="email" name="email" class="form-control" placeholder="e-mail...">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- Password -->*/
/*                   <div id="password-group" class="form-group">*/
/*                     <label></label>*/
/*                     <input type="password" name="password" class="form-control" placeholder="password...">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="tag" value="login" hidden>*/
/* 				  <input type="text" name="login_url" value="{{ path('user_login') }}" hidden>*/
/*                   <!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success btn-lg btn-block">*/
/*                     <i class="glyphicon glyphicon-log-in"></i> Connexion </button>*/
/*                 </form>*/
/*               </div>*/
/* 			  </div>*/
