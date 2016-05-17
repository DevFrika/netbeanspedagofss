<?php

/* @PedagogiePedagogie/Default/etudiant.html.twig */
class __TwigTemplate_8a16ddb7dce568253d2eb7864e8e2822dd132e3d91ee79b2012097e3cb377b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 1);
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
        $__internal_4d4d3b7a13c59195ec396398f31e4e0044fd47b216417491e3842cc3f0f4714c = $this->env->getExtension("native_profiler");
        $__internal_4d4d3b7a13c59195ec396398f31e4e0044fd47b216417491e3842cc3f0f4714c->enter($__internal_4d4d3b7a13c59195ec396398f31e4e0044fd47b216417491e3842cc3f0f4714c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/Default/etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4d3b7a13c59195ec396398f31e4e0044fd47b216417491e3842cc3f0f4714c->leave($__internal_4d4d3b7a13c59195ec396398f31e4e0044fd47b216417491e3842cc3f0f4714c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78f89b580c4a2d9314cdb23b84229ab48ac8f48b7919555818e30b501ffeeb0e = $this->env->getExtension("native_profiler");
        $__internal_78f89b580c4a2d9314cdb23b84229ab48ac8f48b7919555818e30b501ffeeb0e->enter($__internal_78f89b580c4a2d9314cdb23b84229ab48ac8f48b7919555818e30b501ffeeb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Etudiant
";
        
        $__internal_78f89b580c4a2d9314cdb23b84229ab48ac8f48b7919555818e30b501ffeeb0e->leave($__internal_78f89b580c4a2d9314cdb23b84229ab48ac8f48b7919555818e30b501ffeeb0e_prof);

    }

    // line 6
    public function block_modals($context, array $blocks = array())
    {
        $__internal_61d764ba4612f81e384e5e0e467ed6e1bae070e8c38d2fae4f268da3f2f07f25 = $this->env->getExtension("native_profiler");
        $__internal_61d764ba4612f81e384e5e0e467ed6e1bae070e8c38d2fae4f268da3f2f07f25->enter($__internal_61d764ba4612f81e384e5e0e467ed6e1bae070e8c38d2fae4f268da3f2f07f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 7
        echo "

";
        // line 9
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")))) {
            // line 10
            echo "
\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")));
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
                // line 12
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::etudiant/matiere/modalmatierelayout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 12)->display($context);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t
";
        }
        // line 16
        echo "

";
        // line 18
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")))) {
            // line 19
            echo "
\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")));
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
                // line 21
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::etudiant/groupe/modalgroupelayout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 21)->display($context);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t
";
        }
        // line 25
        echo "

";
        // line 27
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 28
            echo "
\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")));
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
                // line 30
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::etudiant/devoir/modaldevoirlayout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 30)->display($context);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t
";
        }
        // line 34
        echo "
  
  
  ";
        
        $__internal_61d764ba4612f81e384e5e0e467ed6e1bae070e8c38d2fae4f268da3f2f07f25->leave($__internal_61d764ba4612f81e384e5e0e467ed6e1bae070e8c38d2fae4f268da3f2f07f25_prof);

    }

    // line 40
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_e80d80ac88f1482222f30ff6d89d218c22f8772e938206cd196518208ab372bd = $this->env->getExtension("native_profiler");
        $__internal_e80d80ac88f1482222f30ff6d89d218c22f8772e938206cd196518208ab372bd->enter($__internal_e80d80ac88f1482222f30ff6d89d218c22f8772e938206cd196518208ab372bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 41
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
\t\t
\t\t<div class=\"col-xs-2 w3-container menubtn w3-section\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'groupelayout')\">
              <div class=\"w3-container w3-cyan w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"fa fa-group w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Groupes </h4>
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
\t\t
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
        
        $__internal_e80d80ac88f1482222f30ff6d89d218c22f8772e938206cd196518208ab372bd->leave($__internal_e80d80ac88f1482222f30ff6d89d218c22f8772e938206cd196518208ab372bd_prof);

    }

    // line 135
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_291ab732dd847fd0688658a47c295e837f2b7124937e96a5b2db8b56d50c0b0c = $this->env->getExtension("native_profiler");
        $__internal_291ab732dd847fd0688658a47c295e837f2b7124937e96a5b2db8b56d50c0b0c->enter($__internal_291ab732dd847fd0688658a47c295e837f2b7124937e96a5b2db8b56d50c0b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 136
        echo "\t\t
\t\t";
        // line 137
        $this->loadTemplate("PedagogiePedagogieBundle::etudiant/emploi/emploilayout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 137)->display($context);
        // line 138
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::etudiant/discipline/disciplinelayout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 138)->display($context);
        // line 139
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::etudiant/matiere/matierelayout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 139)->display($context);
        // line 140
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::etudiant/modif/modiflayout.html.twig", "@PedagogiePedagogie/Default/etudiant.html.twig", 140)->display($context);
        // line 141
        echo "\t
\t";
        
        $__internal_291ab732dd847fd0688658a47c295e837f2b7124937e96a5b2db8b56d50c0b0c->leave($__internal_291ab732dd847fd0688658a47c295e837f2b7124937e96a5b2db8b56d50c0b0c_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_793a786099d28261a46126a2dac6a5ca514432236bd738f5525469c5912410ea = $this->env->getExtension("native_profiler");
        $__internal_793a786099d28261a46126a2dac6a5ca514432236bd738f5525469c5912410ea->enter($__internal_793a786099d28261a46126a2dac6a5ca514432236bd738f5525469c5912410ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/filierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/departementhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/emploihandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/groupehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/matierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/disciplinehandle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_793a786099d28261a46126a2dac6a5ca514432236bd738f5525469c5912410ea->leave($__internal_793a786099d28261a46126a2dac6a5ca514432236bd738f5525469c5912410ea_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/Default/etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 154,  373 => 153,  369 => 152,  365 => 151,  361 => 150,  357 => 149,  353 => 148,  348 => 147,  342 => 146,  334 => 141,  331 => 140,  328 => 139,  325 => 138,  323 => 137,  320 => 136,  314 => 135,  215 => 41,  209 => 40,  199 => 34,  195 => 32,  181 => 31,  178 => 30,  161 => 29,  158 => 28,  156 => 27,  152 => 25,  148 => 23,  134 => 22,  131 => 21,  114 => 20,  111 => 19,  109 => 18,  105 => 16,  101 => 14,  87 => 13,  84 => 12,  67 => 11,  64 => 10,  62 => 9,  58 => 7,  52 => 6,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Pedagogie - Etudiant*/
/* {% endblock %}*/
/* */
/* {% block modals %}*/
/* */
/* */
/* {% if allmatiere is not null %}*/
/* */
/* 	{% for mat in allmatiere  %}*/
/* 				{% include "PedagogiePedagogieBundle::etudiant/matiere/modalmatierelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% if allgroupe is not null %}*/
/* */
/* 	{% for grp in allgroupe  %}*/
/* 				{% include "PedagogiePedagogieBundle::etudiant/groupe/modalgroupelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% if alldevoir is not null %}*/
/* */
/* 	{% for dev in alldevoir  %}*/
/* 				{% include "PedagogiePedagogieBundle::etudiant/devoir/modaldevoirlayout.html.twig" %}*/
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
/* 		*/
/* 		<div class="col-xs-2 w3-container menubtn w3-section">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'groupelayout')">*/
/*               <div class="w3-container w3-cyan w3-padding-hor-10">*/
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
/* 		*/
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
/* 		{% include "PedagogiePedagogieBundle::etudiant/emploi/emploilayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::etudiant/discipline/disciplinelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::etudiant/matiere/matierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::etudiant/modif/modiflayout.html.twig" %}*/
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
