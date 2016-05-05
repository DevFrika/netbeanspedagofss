<?php

/* PedagoFssUserBundle::layout.html.twig */
class __TwigTemplate_c2b57a1c2424d3a430e9888ea20e20e646e5d282eb608d64c3bb45e8e2de611f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodycontent' => array($this, 'block_bodycontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a91cc9b6d27e872288799be52c3b406d62e045bad88b15a8945e1ff236e793e1 = $this->env->getExtension("native_profiler");
        $__internal_a91cc9b6d27e872288799be52c3b406d62e045bad88b15a8945e1ff236e793e1->enter($__internal_a91cc9b6d27e872288799be52c3b406d62e045bad88b15a8945e1ff236e793e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91cc9b6d27e872288799be52c3b406d62e045bad88b15a8945e1ff236e793e1->leave($__internal_a91cc9b6d27e872288799be52c3b406d62e045bad88b15a8945e1ff236e793e1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e964302b0d3d815d3e7e0cf7c12a7710a296542385f4f3c36771d3659de2c95b = $this->env->getExtension("native_profiler");
        $__internal_e964302b0d3d815d3e7e0cf7c12a7710a296542385f4f3c36771d3659de2c95b->enter($__internal_e964302b0d3d815d3e7e0cf7c12a7710a296542385f4f3c36771d3659de2c95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Admin
";
        
        $__internal_e964302b0d3d815d3e7e0cf7c12a7710a296542385f4f3c36771d3659de2c95b->leave($__internal_e964302b0d3d815d3e7e0cf7c12a7710a296542385f4f3c36771d3659de2c95b_prof);

    }

    // line 7
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_a34e6c804e4a52ee3436c7c7a9fcaf8bcf5af4a6c09e47439eedf58ada18d215 = $this->env->getExtension("native_profiler");
        $__internal_a34e6c804e4a52ee3436c7c7a9fcaf8bcf5af4a6c09e47439eedf58ada18d215->enter($__internal_a34e6c804e4a52ee3436c7c7a9fcaf8bcf5af4a6c09e47439eedf58ada18d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 8
        echo "<h2>Utilisateur - Page d'amin - Page en construction </h2>


<nav class=\"w3-sidenav w3-dark-grey w3-card-2 w3-animate-left\" style=\"display:none\">
  <a href=\"javascript:void(0)\" onclick=\"w3_close()\" class=\"w3-closenav w3-large\">Fermer<i class=\"glyphicon glyphicon-remove\"></i> </a>
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'collections')\">Dashboard <i class=\"glyphicon glyphicon-th-list\"></i></a>
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'documents')\">Gerer 1 <i class=\"glyphicon glyphicon-book\"></i></a>
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'index')\"> Gerer 2 <i class=\"glyphicon glyphicon-list-alt\"></i></a>\t\t
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'construct')\"> Gerer 3 </a>
</nav>

<div id=\"main\">

<header class=\"w3-container w3-blue-grey\">
  <span class=\"w3-opennav w3-xlarge pull-left\" onclick=\"w3_open()\">&#9776;</span>
  <h1> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "MENU_ESPACE", array(), "array"), "html", null, true);
        echo " </h1>
  
</header>


<div class=\"w3-container\" style=\"margin-left:130px\">

    <div id=\"userinfo\" class=\"w3-container userinfo w3-animate-left\">
        
        <h2>\${maplangue[\"Welcome\"]} \${sessionUtilisateur.getNom()}</h2>
          
          <h4>\${maplangue[\"UserHave\"]} \${empty nbcol?0:nbcol} \${nbcol>1?\"Collections\":\"Collection\"} </h4>
          <h4>\${maplangue[\"UserHave\"]} \${empty nbdoc?0:nbdoc} \${nbdoc>1?\"Documents\":\"Document\"} </h4>
          <h4>\${ form.resultat }</h4>
          
          
           
    </div>
    
  <div id=\"collections\" class=\"w3-container tabs w3-animate-left \" >
  
  <div class=\"section\">
      <div class=\"container \">
        <div class=\"row pull-left\">
          <div class=\"col-md-5 \">
            <div class=\"section\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-sm-2 \">
                    <img src=\"https://unsplash.imgix.net/photo-1423683249427-8ca22bd873e0?w=1024&amp;q=50&amp;fm=jpg&amp;s=5e57c661d0f772ce269188a6f5325708\"
                    class=\"center-block img-responsive img-thumbnail\">
                  </div>
                  <div class=\"col-sm-4\">
                    <h1>Bachir Diop</h1>
                    <h4>Filiere : LFI 3</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
              <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\"> Contenu home</div>
              <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\"> Contenu profil</div>
              <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">Contenu messages</div>
              <div role=\"tabpanel\" class=\"tab-pane\" id=\"settings\"> Contenu settings</div>
            </div>
          </div>
        </div>
      </div>
    </div>
      

    </div>
       
        <c:import url=\"/WEB-INF/jsp/user/colinfo.jsp\"></c:import>
        
   
        
    
        <div id=\"documents\" class=\"w3-container tabs w3-animate-left col-md-8\" >
            
            <div class=\"row\">
          <div class=\"col-md-8\">
            <h2 class=\"text-center\">\${maplangue[\"MyDocs\"]}</h2>
    
        <button type=\"button\" id=\"button-adddoc\" class=\"center-block text-center btn btn-sm btn-success\" role=\"button\" data-target=\"#adddoc-modal\" data-toggle=\"modal\">
        \${maplangue[\"AddDoc\"]} <i class=\"glyphicon glyphicon-plus\"></i></button>
        
          </div>
        </div>
            <br>
            
                <table class=\"col-md-8\">
            <c:forEach items=\"\${documents}\" var=\"docs\" varStatus=\"nbdocinfo\">
                <tr>
                    <td>
                        
                            <div class=\"col-md-8\">
                              <h3 class=\"text-left\">\${docs.docname}</h3> 
                              <a href=\"#\" onclick=\"openTabs(event, 'docinfo\${nbdocinfo.index}')\"  class=\"w3-btn btn btn-info tablink\"> \${maplangue[\"View\"]}</a>
                            </div>
                        
                    </td>
                     
                </tr>

           </c:forEach>
        </table>
                
           
            <c:import url=\"/jspf/adddocument.jsp\"></c:import>
            
        </div>
            
            <c:import url=\"/WEB-INF/jsp/user/docinfo.jsp\"></c:import>

        
  <div id=\"index\" class=\"w3-container tabs w3-animate-opacity\">
   <c:import url=\"/WEB-INF/jsp/user/indexinfo.jsp\"></c:import>
    
  </div>

  <div id=\"construct\" class=\"w3-container tabs w3-animate-zoom\">
    
      
 
<a href=\"#\" onclick=\"openTabs(event, 'buildindex')\"  class=\"w3-btn btn btn-info tablink\"> \${maplangue[\"CreationInd\"]} </a>


        
    
     
    
   </div>
   


  

</div>



</div>

";
        
        $__internal_a34e6c804e4a52ee3436c7c7a9fcaf8bcf5af4a6c09e47439eedf58ada18d215->leave($__internal_a34e6c804e4a52ee3436c7c7a9fcaf8bcf5af4a6c09e47439eedf58ada18d215_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  55 => 8,  49 => 7,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur - Admin*/
/* {% endblock %}*/
/* */
/* */
/* {% block bodycontent %}*/
/* <h2>Utilisateur - Page d'amin - Page en construction </h2>*/
/* */
/* */
/* <nav class="w3-sidenav w3-dark-grey w3-card-2 w3-animate-left" style="display:none">*/
/*   <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-large">Fermer<i class="glyphicon glyphicon-remove"></i> </a>*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'collections')">Dashboard <i class="glyphicon glyphicon-th-list"></i></a>*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'documents')">Gerer 1 <i class="glyphicon glyphicon-book"></i></a>*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'index')"> Gerer 2 <i class="glyphicon glyphicon-list-alt"></i></a>		*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'construct')"> Gerer 3 </a>*/
/* </nav>*/
/* */
/* <div id="main">*/
/* */
/* <header class="w3-container w3-blue-grey">*/
/*   <span class="w3-opennav w3-xlarge pull-left" onclick="w3_open()">&#9776;</span>*/
/*   <h1> {{ lang['MENU_ESPACE'] }} </h1>*/
/*   */
/* </header>*/
/* */
/* */
/* <div class="w3-container" style="margin-left:130px">*/
/* */
/*     <div id="userinfo" class="w3-container userinfo w3-animate-left">*/
/*         */
/*         <h2>${maplangue["Welcome"]} ${sessionUtilisateur.getNom()}</h2>*/
/*           */
/*           <h4>${maplangue["UserHave"]} ${empty nbcol?0:nbcol} ${nbcol>1?"Collections":"Collection"} </h4>*/
/*           <h4>${maplangue["UserHave"]} ${empty nbdoc?0:nbdoc} ${nbdoc>1?"Documents":"Document"} </h4>*/
/*           <h4>${ form.resultat }</h4>*/
/*           */
/*           */
/*            */
/*     </div>*/
/*     */
/*   <div id="collections" class="w3-container tabs w3-animate-left " >*/
/*   */
/*   <div class="section">*/
/*       <div class="container ">*/
/*         <div class="row pull-left">*/
/*           <div class="col-md-5 ">*/
/*             <div class="section">*/
/*               <div class="container">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-2 ">*/
/*                     <img src="https://unsplash.imgix.net/photo-1423683249427-8ca22bd873e0?w=1024&amp;q=50&amp;fm=jpg&amp;s=5e57c661d0f772ce269188a6f5325708"*/
/*                     class="center-block img-responsive img-thumbnail">*/
/*                   </div>*/
/*                   <div class="col-sm-4">*/
/*                     <h1>Bachir Diop</h1>*/
/*                     <h4>Filiere : LFI 3</h4>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
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
/*               <div role="tabpanel" class="tab-pane active" id="home"> Contenu home</div>*/
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
/*        */
/*         <c:import url="/WEB-INF/jsp/user/colinfo.jsp"></c:import>*/
/*         */
/*    */
/*         */
/*     */
/*         <div id="documents" class="w3-container tabs w3-animate-left col-md-8" >*/
/*             */
/*             <div class="row">*/
/*           <div class="col-md-8">*/
/*             <h2 class="text-center">${maplangue["MyDocs"]}</h2>*/
/*     */
/*         <button type="button" id="button-adddoc" class="center-block text-center btn btn-sm btn-success" role="button" data-target="#adddoc-modal" data-toggle="modal">*/
/*         ${maplangue["AddDoc"]} <i class="glyphicon glyphicon-plus"></i></button>*/
/*         */
/*           </div>*/
/*         </div>*/
/*             <br>*/
/*             */
/*                 <table class="col-md-8">*/
/*             <c:forEach items="${documents}" var="docs" varStatus="nbdocinfo">*/
/*                 <tr>*/
/*                     <td>*/
/*                         */
/*                             <div class="col-md-8">*/
/*                               <h3 class="text-left">${docs.docname}</h3> */
/*                               <a href="#" onclick="openTabs(event, 'docinfo${nbdocinfo.index}')"  class="w3-btn btn btn-info tablink"> ${maplangue["View"]}</a>*/
/*                             </div>*/
/*                         */
/*                     </td>*/
/*                      */
/*                 </tr>*/
/* */
/*            </c:forEach>*/
/*         </table>*/
/*                 */
/*            */
/*             <c:import url="/jspf/adddocument.jsp"></c:import>*/
/*             */
/*         </div>*/
/*             */
/*             <c:import url="/WEB-INF/jsp/user/docinfo.jsp"></c:import>*/
/* */
/*         */
/*   <div id="index" class="w3-container tabs w3-animate-opacity">*/
/*    <c:import url="/WEB-INF/jsp/user/indexinfo.jsp"></c:import>*/
/*     */
/*   </div>*/
/* */
/*   <div id="construct" class="w3-container tabs w3-animate-zoom">*/
/*     */
/*       */
/*  */
/* <a href="#" onclick="openTabs(event, 'buildindex')"  class="w3-btn btn btn-info tablink"> ${maplangue["CreationInd"]} </a>*/
/* */
/* */
/*         */
/*     */
/*      */
/*     */
/*    </div>*/
/*    */
/* */
/* */
/*   */
/* */
/* </div>*/
/* */
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}   */
/* */
/* */