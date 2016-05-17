<?php

/* PedagogiePedagogieBundle:Default:prof.html.twig */
class __TwigTemplate_694e17d485d8d7f1fadced8d8c113aaa822b736a1e1ccdc2e5905c17cb7ce291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modals' => array($this, 'block_modals'),
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
        echo "Pedagogie - prof
";
    }

    // line 6
    public function block_modals($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : null))) {
            // line 10
            echo "
\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allemploi"]) ? $context["allemploi"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                // line 12
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::prof/emploi/modalemploilayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 12)->display($context);
                // line 13
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t
";
        }
        // line 16
        echo "

";
        // line 18
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : null))) {
            // line 19
            echo "
\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
                // line 21
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::prof/matiere/modalmatierelayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 21)->display($context);
                // line 22
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t
";
        }
        // line 25
        echo "

";
        // line 27
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : null))) {
            // line 28
            echo "
\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroupe"]) ? $context["allgroupe"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["grp"]) {
                // line 30
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::prof/groupe/modalgroupelayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 30)->display($context);
                // line 31
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t
";
        }
        // line 34
        echo "

";
        // line 36
        $this->loadTemplate("PedagogiePedagogieBundle::prof/voeux/addvoeuxlayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 36)->display($context);
        // line 37
        echo "
";
        // line 38
        if ( !(null === (isset($context["allvoeux"]) ? $context["allvoeux"] : null))) {
            // line 39
            echo "
\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allvoeux"]) ? $context["allvoeux"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["veu"]) {
                // line 41
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::prof/voeux/modalvoeuxlayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 41)->display($context);
                // line 42
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::prof/voeux/deletevoeuxlayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 42)->display($context);
                // line 43
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t
";
        }
        // line 46
        echo "
";
        // line 47
        $this->loadTemplate("PedagogiePedagogieBundle::prof/devoir/adddevoirlayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 47)->display($context);
        // line 48
        echo "
";
        // line 49
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 50
            echo "
\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldevoir"]) ? $context["alldevoir"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                // line 52
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::prof/devoir/modaldevoirlayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 52)->display($context);
                // line 53
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::prof/devoir/deletedevoirlayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 53)->display($context);
                // line 54
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t
";
        }
        // line 57
        echo "
  
  
  ";
    }

    // line 63
    public function block_submenu($context, array $blocks = array())
    {
        // line 64
        echo "\t
        <div class=\"col-xs-2 w3-container menubtn w3-section\">
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
        
    
        
        
        <div class=\"col-xs-2 w3-container menubtn w3-section\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'classelayout')\">
              <div class=\"w3-container w3-blue w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"glyphicon glyphicon-list-alt w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Classes </h4>
              </div>
            </a>
        </div>
        
        
        
        <div class=\"col-xs-2 w3-container menubtn w3-section\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'disciplinelayout')\">
              <div class=\"w3-container w3-khaki w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">library_books</i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Disciplines </h4>
              </div>
            </a>
        </div>
       
        
        
\t\t
\t\t<div class=\"col-xs-2 w3-container menubtn w3-section\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'matierelayout')\">
              <div class=\"w3-container w3-khaki w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"fa fa-list-alt w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Matieres </h4>
              </div>
            </a>
        </div>
\t\t
\t\t<div class=\"col-xs-2 w3-container menubtn w3-section\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'voeuxlayout')\">
              <div class=\"w3-container w3-aqua w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"glyphicon glyphicon-star w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Voeux </h4>
              </div>
            </a>
        </div>
\t\t
\t\t<div class=\"col-xs-2 w3-container menubtn w3-section\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'devoirslayout')\">
              <div class=\"w3-container w3-aqua w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"glyphicon glyphicon-book w3-xlarge\"></i><i class=\"glyphicon glyphicon-text-background w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Devoirs </h4>
              </div>
            </a>
        </div>
        
        
    
\t
\t";
    }

    // line 156
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 157
        echo "\t\t
\t\t";
        // line 158
        $this->loadTemplate("PedagogiePedagogieBundle::prof/emploi/emploilayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 158)->display($context);
        // line 159
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::prof/discipline/disciplinelayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 159)->display($context);
        // line 160
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::prof/matiere/matierelayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 160)->display($context);
        // line 161
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::prof/modif/modiflayout.html.twig", "PedagogiePedagogieBundle:Default:prof.html.twig", 161)->display($context);
        // line 162
        echo "\t
\t";
    }

    // line 167
    public function block_javascripts($context, array $blocks = array())
    {
        // line 168
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/filierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/departementhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/emploihandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/groupehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/matierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/disciplinehandle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:Default:prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 175,  447 => 174,  443 => 173,  439 => 172,  435 => 171,  431 => 170,  427 => 169,  422 => 168,  419 => 167,  414 => 162,  411 => 161,  408 => 160,  405 => 159,  403 => 158,  400 => 157,  397 => 156,  303 => 64,  300 => 63,  293 => 57,  289 => 55,  275 => 54,  272 => 53,  269 => 52,  252 => 51,  249 => 50,  247 => 49,  244 => 48,  242 => 47,  239 => 46,  235 => 44,  221 => 43,  218 => 42,  215 => 41,  198 => 40,  195 => 39,  193 => 38,  190 => 37,  188 => 36,  184 => 34,  180 => 32,  166 => 31,  163 => 30,  146 => 29,  143 => 28,  141 => 27,  137 => 25,  133 => 23,  119 => 22,  116 => 21,  99 => 20,  96 => 19,  94 => 18,  90 => 16,  86 => 14,  72 => 13,  69 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 7,  40 => 6,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Pedagogie - prof*/
/* {% endblock %}*/
/* */
/* {% block modals %}*/
/* */
/* */
/* {% if allemploi is not null %}*/
/* */
/* 	{% for emp in allemploi  %}*/
/* 				{% include "PedagogiePedagogieBundle::prof/emploi/modalemploilayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% if allmatiere is not null %}*/
/* */
/* 	{% for mat in allmatiere  %}*/
/* 				{% include "PedagogiePedagogieBundle::prof/matiere/modalmatierelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% if allgroupe is not null %}*/
/* */
/* 	{% for grp in allgroupe  %}*/
/* 				{% include "PedagogiePedagogieBundle::prof/groupe/modalgroupelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::prof/voeux/addvoeuxlayout.html.twig" %}*/
/* */
/* {% if allvoeux is not null %}*/
/* */
/* 	{% for veu in allvoeux  %}*/
/* 				{% include "PedagogiePedagogieBundle::prof/voeux/modalvoeuxlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::prof/voeux/deletevoeuxlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::prof/devoir/adddevoirlayout.html.twig" %}*/
/* */
/* {% if alldevoir is not null %}*/
/* */
/* 	{% for dev in alldevoir  %}*/
/* 				{% include "PedagogiePedagogieBundle::prof/devoir/modaldevoirlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::prof/devoir/deletedevoirlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/*   */
/*   */
/*   {% endblock %}*/
/* */
/* */
/*     {% block submenu %}*/
/* 	*/
/*         <div class="col-xs-2 w3-container menubtn w3-section">*/
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
/*         */
/*         <div class="col-xs-2 w3-container menubtn w3-section">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'classelayout')">*/
/*               <div class="w3-container w3-blue w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="glyphicon glyphicon-list-alt w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Classes </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn w3-section">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'disciplinelayout')">*/
/*               <div class="w3-container w3-khaki w3-padding-hor-10">*/
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
/* 		*/
/* 		<div class="col-xs-2 w3-container menubtn w3-section">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'matierelayout')">*/
/*               <div class="w3-container w3-khaki w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="fa fa-list-alt w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Matieres </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/* 		*/
/* 		<div class="col-xs-2 w3-container menubtn w3-section">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'voeuxlayout')">*/
/*               <div class="w3-container w3-aqua w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="glyphicon glyphicon-star w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Voeux </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/* 		*/
/* 		<div class="col-xs-2 w3-container menubtn w3-section">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'devoirslayout')">*/
/*               <div class="w3-container w3-aqua w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="glyphicon glyphicon-book w3-xlarge"></i><i class="glyphicon glyphicon-text-background w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Devoirs </h4>*/
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
/* 		{% include "PedagogiePedagogieBundle::prof/emploi/emploilayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::prof/discipline/disciplinelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::prof/matiere/matierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::prof/modif/modiflayout.html.twig" %}*/
/* 	*/
/* 	{% endblock %}*/
/*     */
/* */
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/pedagogie.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/filierehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/departementhandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/emploihandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/groupehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/matierehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/disciplinehandle.js') }}"></script>*/
/* {% endblock %}*/
