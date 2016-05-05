<?php

/* PedagogiePedagogieBundle:template:user.html.twig */
class __TwigTemplate_c9c56e1f2c894106e0d874e1248747eb9368d7583eb0403684c1830d9196d0ce extends Twig_Template
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
        $__internal_27db4b9fd7e56136e8da544b18a061fb47ead3e60ba2ab215984a3914d87f0ee = $this->env->getExtension("native_profiler");
        $__internal_27db4b9fd7e56136e8da544b18a061fb47ead3e60ba2ab215984a3914d87f0ee->enter($__internal_27db4b9fd7e56136e8da544b18a061fb47ead3e60ba2ab215984a3914d87f0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:template:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27db4b9fd7e56136e8da544b18a061fb47ead3e60ba2ab215984a3914d87f0ee->leave($__internal_27db4b9fd7e56136e8da544b18a061fb47ead3e60ba2ab215984a3914d87f0ee_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_72890cb516b9a15aac5547f40328cd81221834ef2646611593e2f6aa70a6b042 = $this->env->getExtension("native_profiler");
        $__internal_72890cb516b9a15aac5547f40328cd81221834ef2646611593e2f6aa70a6b042->enter($__internal_72890cb516b9a15aac5547f40328cd81221834ef2646611593e2f6aa70a6b042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Admin
";
        
        $__internal_72890cb516b9a15aac5547f40328cd81221834ef2646611593e2f6aa70a6b042->leave($__internal_72890cb516b9a15aac5547f40328cd81221834ef2646611593e2f6aa70a6b042_prof);

    }

    // line 7
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_8d564a69f9c4753096826ccdc56cada83de36e2290863a1b3904b26aca25c048 = $this->env->getExtension("native_profiler");
        $__internal_8d564a69f9c4753096826ccdc56cada83de36e2290863a1b3904b26aca25c048->enter($__internal_8d564a69f9c4753096826ccdc56cada83de36e2290863a1b3904b26aca25c048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

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
        
        $__internal_8d564a69f9c4753096826ccdc56cada83de36e2290863a1b3904b26aca25c048->leave($__internal_8d564a69f9c4753096826ccdc56cada83de36e2290863a1b3904b26aca25c048_prof);

    }

    // line 100
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_2ff10be8195e1ff9cd6c836caecb32ea0835a61ad45f7a86629d6b6ace0b7eff = $this->env->getExtension("native_profiler");
        $__internal_2ff10be8195e1ff9cd6c836caecb32ea0835a61ad45f7a86629d6b6ace0b7eff->enter($__internal_2ff10be8195e1ff9cd6c836caecb32ea0835a61ad45f7a86629d6b6ace0b7eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

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
        
        $__internal_2ff10be8195e1ff9cd6c836caecb32ea0835a61ad45f7a86629d6b6ace0b7eff->leave($__internal_2ff10be8195e1ff9cd6c836caecb32ea0835a61ad45f7a86629d6b6ace0b7eff_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac54e85b8a1b7aa0da588341ca814665f66c79a2820bb6a7bc43815300078b70 = $this->env->getExtension("native_profiler");
        $__internal_ac54e85b8a1b7aa0da588341ca814665f66c79a2820bb6a7bc43815300078b70->enter($__internal_ac54e85b8a1b7aa0da588341ca814665f66c79a2820bb6a7bc43815300078b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ac54e85b8a1b7aa0da588341ca814665f66c79a2820bb6a7bc43815300078b70->leave($__internal_ac54e85b8a1b7aa0da588341ca814665f66c79a2820bb6a7bc43815300078b70_prof);

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
