<?php

/* @PedagoFssUser/Default/dashboardprof.html.twig */
class __TwigTemplate_fc6ec0e6eb20b72fa5edc512ff17db3ca76fd33ef42c4c68babd86d39ed370a8 extends Twig_Template
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
        $__internal_ad4fc300eabd79db1dd6341a04c8b5e88894c964b478a8e490b3d8391e1ed4d3 = $this->env->getExtension("native_profiler");
        $__internal_ad4fc300eabd79db1dd6341a04c8b5e88894c964b478a8e490b3d8391e1ed4d3->enter($__internal_ad4fc300eabd79db1dd6341a04c8b5e88894c964b478a8e490b3d8391e1ed4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/dashboardprof.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["nomuser"]) ? $context["nomuser"] : $this->getContext($context, "nomuser")), "html", null, true);
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
        
        $__internal_ad4fc300eabd79db1dd6341a04c8b5e88894c964b478a8e490b3d8391e1ed4d3->leave($__internal_ad4fc300eabd79db1dd6341a04c8b5e88894c964b478a8e490b3d8391e1ed4d3_prof);

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
        return array (  60 => 34,  54 => 31,  22 => 1,);
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
