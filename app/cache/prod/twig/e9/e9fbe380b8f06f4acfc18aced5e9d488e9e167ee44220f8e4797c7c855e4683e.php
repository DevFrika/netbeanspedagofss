<?php

/* @PedagoFssUser/Default/dashboardprof.html.twig */
class __TwigTemplate_c65df71546f1d145ab6d4588d055de3f9f5b043c253f004dfe65672ba91951c8 extends Twig_Template
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
        echo "<div id=\"dashboard\" class=\"w3-container tabs w3-animate-left \" >
  
  <div class=\"section pull-left\">
      <div class=\"container \">
        <div class=\"row \">
          
          <div class=\"col-md-6\">
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li role=\"presentation\" class=\"active\">
                <a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Profil</a>
              </li>
              <li role=\"presentation\">
                <a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Messages</a>
              </li>
              <li role=\"presentation\">
                <a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Mes Devoirs</a>
              </li>
              <li role=\"presentation\">
                <a href=\"#settings\" aria-controls=\"settings\" role=\"tab\" data-toggle=\"tab\">Reglages</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class=\"tab-content\">
              <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\"> Contenu home
\t\t\t\t<div class=\"col-md-5 \">
            <div class=\"section\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-sm-2 \">
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/images/drake.jpg"), "html", null, true);
        echo "\" class=\"center-block img-responsive img-thumbnail\">
                  </div>
                  <div class=\"col-sm-4\">
                    <h1>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nomuser"]) ? $context["nomuser"] : null), "html", null, true);
        echo "</h1>
                    <h4>Administrateur</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
\t\t\t  
\t\t\t  </div>
              <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\"> Contenu profil</div>
              <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">Contenu messages</div>
              <div role=\"tabpanel\" class=\"tab-pane\" id=\"settings\"> Contenu settings</div>
            </div>
          </div>
        </div>
      </div>
    </div>
      

    </div>";
    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/dashboardprof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 34,  51 => 31,  19 => 1,);
    }
}
/* <div id="dashboard" class="w3-container tabs w3-animate-left " >*/
/*   */
/*   <div class="section pull-left">*/
/*       <div class="container ">*/
/*         <div class="row ">*/
/*           */
/*           <div class="col-md-6">*/
/*             <!-- Nav tabs -->*/
/*             <ul class="nav nav-tabs" role="tablist">*/
/*               <li role="presentation" class="active">*/
/*                 <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Profil</a>*/
/*               </li>*/
/*               <li role="presentation">*/
/*                 <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Messages</a>*/
/*               </li>*/
/*               <li role="presentation">*/
/*                 <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Mes Devoirs</a>*/
/*               </li>*/
/*               <li role="presentation">*/
/*                 <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Reglages</a>*/
/*               </li>*/
/*             </ul>*/
/*             <!-- Tab panes -->*/
/*             <div class="tab-content">*/
/*               <div role="tabpanel" class="tab-pane active" id="home"> Contenu home*/
/* 				<div class="col-md-5 ">*/
/*             <div class="section">*/
/*               <div class="container">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-2 ">*/
/*                     <img src="{{ asset('includes/images/drake.jpg') }}" class="center-block img-responsive img-thumbnail">*/
/*                   </div>*/
/*                   <div class="col-sm-4">*/
/*                     <h1>{{ nomuser }}</h1>*/
/*                     <h4>Administrateur</h4>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* 			  */
/* 			  </div>*/
/*               <div role="tabpanel" class="tab-pane" id="profile"> Contenu profil</div>*/
/*               <div role="tabpanel" class="tab-pane" id="messages">Contenu messages</div>*/
/*               <div role="tabpanel" class="tab-pane" id="settings"> Contenu settings</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*       */
/* */
/*     </div>*/