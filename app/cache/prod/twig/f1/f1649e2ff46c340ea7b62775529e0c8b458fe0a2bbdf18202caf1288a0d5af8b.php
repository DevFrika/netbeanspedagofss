<?php

/* PedagogiePedagogieBundle:template:user.html.twig */
class __TwigTemplate_d84038167a844e44b9e2b4b03e66cd175a51eb660b72eac2129c7d7ad3bd7c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagogiePedagogieBundle:template:user.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Pedagogie - Admin
";
    }

    // line 7
    public function block_submenu($context, array $blocks = array())
    {
        // line 8
        echo "        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink \" onclick=\"openMenu(event, 'emploilayout')\">
              <div class=\"w3-container w3-teal w3-padding-hor-1\">
                <div class=\"w3-left\"><i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Emploi du temps </h4>
              </div>
             </a>
        </div>
        
    
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'departementlayout')\">
              <div class=\"w3-container w3-red w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"glyphicon glyphicon-education w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Départements </h4>
              </div>
            </a>
        </div>
        
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'filierelayout')\">
              <div class=\"w3-container w3-blue w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">class</i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Filieres </h4>
              </div>
            </a>
        </div>
        
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'groupelayout')\">
              <div class=\"w3-container w3-blue-grey w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"fa fa-group w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Groupes </h4>
              </div>
            </a>
        </div>
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'disciplinelayout')\">
              <div class=\"w3-container w3-light-blue w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">library_books</i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Disciplines </h4>
              </div>
            </a>
        </div>
       
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'matierelayout')\">
              <div class=\"w3-container w3-dark-grey w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"fa fa-list-alt w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Matieres </h4>
              </div>
            </a>
        </div>
        
        
    
\t
\t";
    }

    // line 100
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 101
        echo "\t\t
\t\t";
        // line 102
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig", "PedagogiePedagogieBundle:template:user.html.twig", 102)->display($context);
        // line 103
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig", "PedagogiePedagogieBundle:template:user.html.twig", 103)->display($context);
        // line 104
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig", "PedagogiePedagogieBundle:template:user.html.twig", 104)->display($context);
        // line 105
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig", "PedagogiePedagogieBundle:template:user.html.twig", 105)->display($context);
        // line 106
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig", "PedagogiePedagogieBundle:template:user.html.twig", 106)->display($context);
        // line 107
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig", "PedagogiePedagogieBundle:template:user.html.twig", 107)->display($context);
        // line 108
        echo "\t
\t";
    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        // line 114
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:template:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 115,  167 => 114,  164 => 113,  159 => 108,  156 => 107,  153 => 106,  150 => 105,  147 => 104,  144 => 103,  142 => 102,  139 => 101,  136 => 100,  42 => 8,  39 => 7,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Pedagogie - Admin*/
/* {% endblock %}*/
/* */
/* */
/*     {% block submenu %}*/
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink " onclick="openMenu(event, 'emploilayout')">*/
/*               <div class="w3-container w3-teal w3-padding-hor-1">*/
/*                 <div class="w3-left"><i class="glyphicon glyphicon-calendar w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Emploi du temps </h4>*/
/*               </div>*/
/*              </a>*/
/*         </div>*/
/*         */
/*     */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'departementlayout')">*/
/*               <div class="w3-container w3-red w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="glyphicon glyphicon-education w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Départements </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'filierelayout')">*/
/*               <div class="w3-container w3-blue w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="material-icons w3-xlarge">class</i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Filieres </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'groupelayout')">*/
/*               <div class="w3-container w3-blue-grey w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="fa fa-group w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Groupes </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'disciplinelayout')">*/
/*               <div class="w3-container w3-light-blue w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="material-icons w3-xlarge">library_books</i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Disciplines </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*        */
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'matierelayout')">*/
/*               <div class="w3-container w3-dark-grey w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="fa fa-list-alt w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Matieres </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*     */
/* 	*/
/* 	{% endblock %}*/
/* 	*/
/* 	{% block bodycontent %}*/
/* 		*/
/* 		{% include "PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig" %}*/
/* 	*/
/* 	{% endblock %}*/
/*     */
/* */
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/pedagogie.js') }}"></script>*/
/* {% endblock %}*/
