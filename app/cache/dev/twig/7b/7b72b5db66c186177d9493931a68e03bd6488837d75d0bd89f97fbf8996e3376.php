<?php

/* PedagogiePedagogieBundle:Default:prof.html.twig */
class __TwigTemplate_dba00795e5525fcf6ed8a809a2d6d296779688c0508d16b039f52bdf71181fb4 extends Twig_Template
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
        $__internal_716f0450f1b152874d091388171d4bdf67abeb29cb146b720a0aca3f7c18cf58 = $this->env->getExtension("native_profiler");
        $__internal_716f0450f1b152874d091388171d4bdf67abeb29cb146b720a0aca3f7c18cf58->enter($__internal_716f0450f1b152874d091388171d4bdf67abeb29cb146b720a0aca3f7c18cf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:Default:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716f0450f1b152874d091388171d4bdf67abeb29cb146b720a0aca3f7c18cf58->leave($__internal_716f0450f1b152874d091388171d4bdf67abeb29cb146b720a0aca3f7c18cf58_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9e39f85c3baee49f70b1af553a9464169efa1e238b3883c44e69d5c3e589b2e = $this->env->getExtension("native_profiler");
        $__internal_d9e39f85c3baee49f70b1af553a9464169efa1e238b3883c44e69d5c3e589b2e->enter($__internal_d9e39f85c3baee49f70b1af553a9464169efa1e238b3883c44e69d5c3e589b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - prof
";
        
        $__internal_d9e39f85c3baee49f70b1af553a9464169efa1e238b3883c44e69d5c3e589b2e->leave($__internal_d9e39f85c3baee49f70b1af553a9464169efa1e238b3883c44e69d5c3e589b2e_prof);

    }

    // line 6
    public function block_modals($context, array $blocks = array())
    {
        $__internal_2ef31b96b65d2565a35981c2a6b5be48f9400f67ab39d59ea3d8b0f5cfa2230e = $this->env->getExtension("native_profiler");
        $__internal_2ef31b96b65d2565a35981c2a6b5be48f9400f67ab39d59ea3d8b0f5cfa2230e->enter($__internal_2ef31b96b65d2565a35981c2a6b5be48f9400f67ab39d59ea3d8b0f5cfa2230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 7
        echo "

";
        // line 9
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 10
            echo "
\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")));
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
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")))) {
            // line 19
            echo "
\t";
            // line 20
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
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")))) {
            // line 28
            echo "
\t";
            // line 29
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
        if ( !(null === (isset($context["allvoeux"]) ? $context["allvoeux"] : $this->getContext($context, "allvoeux")))) {
            // line 39
            echo "
\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allvoeux"]) ? $context["allvoeux"] : $this->getContext($context, "allvoeux")));
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
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 50
            echo "
\t";
            // line 51
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
        
        $__internal_2ef31b96b65d2565a35981c2a6b5be48f9400f67ab39d59ea3d8b0f5cfa2230e->leave($__internal_2ef31b96b65d2565a35981c2a6b5be48f9400f67ab39d59ea3d8b0f5cfa2230e_prof);

    }

    // line 63
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_371f64434db3f278b2192b9d5f2bb47dbba88d12ac4db5c8840f9bd56f4a3171 = $this->env->getExtension("native_profiler");
        $__internal_371f64434db3f278b2192b9d5f2bb47dbba88d12ac4db5c8840f9bd56f4a3171->enter($__internal_371f64434db3f278b2192b9d5f2bb47dbba88d12ac4db5c8840f9bd56f4a3171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

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
        
        $__internal_371f64434db3f278b2192b9d5f2bb47dbba88d12ac4db5c8840f9bd56f4a3171->leave($__internal_371f64434db3f278b2192b9d5f2bb47dbba88d12ac4db5c8840f9bd56f4a3171_prof);

    }

    // line 156
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_2de554a0284c20a58106bb21c539eed50652402c4f75e24302af92b5a0641df8 = $this->env->getExtension("native_profiler");
        $__internal_2de554a0284c20a58106bb21c539eed50652402c4f75e24302af92b5a0641df8->enter($__internal_2de554a0284c20a58106bb21c539eed50652402c4f75e24302af92b5a0641df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

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
        
        $__internal_2de554a0284c20a58106bb21c539eed50652402c4f75e24302af92b5a0641df8->leave($__internal_2de554a0284c20a58106bb21c539eed50652402c4f75e24302af92b5a0641df8_prof);

    }

    // line 167
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb8cc26cc0cbdcd2fea3d28aac49c51b381a0ba2078b2c9e28ae4e2bfeedc262 = $this->env->getExtension("native_profiler");
        $__internal_fb8cc26cc0cbdcd2fea3d28aac49c51b381a0ba2078b2c9e28ae4e2bfeedc262->enter($__internal_fb8cc26cc0cbdcd2fea3d28aac49c51b381a0ba2078b2c9e28ae4e2bfeedc262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fb8cc26cc0cbdcd2fea3d28aac49c51b381a0ba2078b2c9e28ae4e2bfeedc262->leave($__internal_fb8cc26cc0cbdcd2fea3d28aac49c51b381a0ba2078b2c9e28ae4e2bfeedc262_prof);

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
        return array (  484 => 175,  480 => 174,  476 => 173,  472 => 172,  468 => 171,  464 => 170,  460 => 169,  455 => 168,  449 => 167,  441 => 162,  438 => 161,  435 => 160,  432 => 159,  430 => 158,  427 => 157,  421 => 156,  324 => 64,  318 => 63,  308 => 57,  304 => 55,  290 => 54,  287 => 53,  284 => 52,  267 => 51,  264 => 50,  262 => 49,  259 => 48,  257 => 47,  254 => 46,  250 => 44,  236 => 43,  233 => 42,  230 => 41,  213 => 40,  210 => 39,  208 => 38,  205 => 37,  203 => 36,  199 => 34,  195 => 32,  181 => 31,  178 => 30,  161 => 29,  158 => 28,  156 => 27,  152 => 25,  148 => 23,  134 => 22,  131 => 21,  114 => 20,  111 => 19,  109 => 18,  105 => 16,  101 => 14,  87 => 13,  84 => 12,  67 => 11,  64 => 10,  62 => 9,  58 => 7,  52 => 6,  44 => 3,  38 => 2,  11 => 1,);
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