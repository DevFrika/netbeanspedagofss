<?php

/* @PedagogiePedagogie/template/user.html.twig */
class __TwigTemplate_a76d221136d273feb0ede4b1f41f77dd1a774d71dc5f1194ca8d6c65806ae5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 1);
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
        $__internal_67c4b41e5fd4a321ecaf05f5e23d6f1a5ed66638606313860c774cfdf951fe3a = $this->env->getExtension("native_profiler");
        $__internal_67c4b41e5fd4a321ecaf05f5e23d6f1a5ed66638606313860c774cfdf951fe3a->enter($__internal_67c4b41e5fd4a321ecaf05f5e23d6f1a5ed66638606313860c774cfdf951fe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/template/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67c4b41e5fd4a321ecaf05f5e23d6f1a5ed66638606313860c774cfdf951fe3a->leave($__internal_67c4b41e5fd4a321ecaf05f5e23d6f1a5ed66638606313860c774cfdf951fe3a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_58c9d6552d87bc98146b2a056bb09a5c531cb4162d9b5800a0cddeb98904343a = $this->env->getExtension("native_profiler");
        $__internal_58c9d6552d87bc98146b2a056bb09a5c531cb4162d9b5800a0cddeb98904343a->enter($__internal_58c9d6552d87bc98146b2a056bb09a5c531cb4162d9b5800a0cddeb98904343a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Admin
";
        
        $__internal_58c9d6552d87bc98146b2a056bb09a5c531cb4162d9b5800a0cddeb98904343a->leave($__internal_58c9d6552d87bc98146b2a056bb09a5c531cb4162d9b5800a0cddeb98904343a_prof);

    }

    // line 7
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_48b30f3d393ad625bdc3c8e0da30199e43cf6a1fe58e086c3c955f05407693e6 = $this->env->getExtension("native_profiler");
        $__internal_48b30f3d393ad625bdc3c8e0da30199e43cf6a1fe58e086c3c955f05407693e6->enter($__internal_48b30f3d393ad625bdc3c8e0da30199e43cf6a1fe58e086c3c955f05407693e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

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
        
        $__internal_48b30f3d393ad625bdc3c8e0da30199e43cf6a1fe58e086c3c955f05407693e6->leave($__internal_48b30f3d393ad625bdc3c8e0da30199e43cf6a1fe58e086c3c955f05407693e6_prof);

    }

    // line 100
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_5260fbe8f9c11845e96ccc4b56179d9ab3f367f5e31004201f14d580940eb0cb = $this->env->getExtension("native_profiler");
        $__internal_5260fbe8f9c11845e96ccc4b56179d9ab3f367f5e31004201f14d580940eb0cb->enter($__internal_5260fbe8f9c11845e96ccc4b56179d9ab3f367f5e31004201f14d580940eb0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 101
        echo "\t\t
\t\t";
        // line 102
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 102)->display($context);
        // line 103
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 103)->display($context);
        // line 104
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 104)->display($context);
        // line 105
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 105)->display($context);
        // line 106
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 106)->display($context);
        // line 107
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 107)->display($context);
        // line 108
        echo "\t
\t";
        
        $__internal_5260fbe8f9c11845e96ccc4b56179d9ab3f367f5e31004201f14d580940eb0cb->leave($__internal_5260fbe8f9c11845e96ccc4b56179d9ab3f367f5e31004201f14d580940eb0cb_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16c6f71291aba33a893c9363f338f5dda19c3d9ad97fabe688efbe779fcbbd04 = $this->env->getExtension("native_profiler");
        $__internal_16c6f71291aba33a893c9363f338f5dda19c3d9ad97fabe688efbe779fcbbd04->enter($__internal_16c6f71291aba33a893c9363f338f5dda19c3d9ad97fabe688efbe779fcbbd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_16c6f71291aba33a893c9363f338f5dda19c3d9ad97fabe688efbe779fcbbd04->leave($__internal_16c6f71291aba33a893c9363f338f5dda19c3d9ad97fabe688efbe779fcbbd04_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/template/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 115,  194 => 114,  188 => 113,  180 => 108,  177 => 107,  174 => 106,  171 => 105,  168 => 104,  165 => 103,  163 => 102,  160 => 101,  154 => 100,  57 => 8,  51 => 7,  43 => 3,  37 => 2,  11 => 1,);
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
