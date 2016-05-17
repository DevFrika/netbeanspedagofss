<?php

/* @PedagogiePedagogie/Default/admin.html.twig */
class __TwigTemplate_40f6dfb2ad7bf313dc6c6e3212d1979658ab4d9d0373d4dd05f805ea3beae0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 1);
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
        $__internal_488b918532e7cf2ec74865fbe9ea8c561daabe37c186166888655aaaf95e0f14 = $this->env->getExtension("native_profiler");
        $__internal_488b918532e7cf2ec74865fbe9ea8c561daabe37c186166888655aaaf95e0f14->enter($__internal_488b918532e7cf2ec74865fbe9ea8c561daabe37c186166888655aaaf95e0f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/Default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_488b918532e7cf2ec74865fbe9ea8c561daabe37c186166888655aaaf95e0f14->leave($__internal_488b918532e7cf2ec74865fbe9ea8c561daabe37c186166888655aaaf95e0f14_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_add75c4eeca73342100607ad86ed179fc7cddbe0e418b0ecf746c36b26d18925 = $this->env->getExtension("native_profiler");
        $__internal_add75c4eeca73342100607ad86ed179fc7cddbe0e418b0ecf746c36b26d18925->enter($__internal_add75c4eeca73342100607ad86ed179fc7cddbe0e418b0ecf746c36b26d18925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Admin
";
        
        $__internal_add75c4eeca73342100607ad86ed179fc7cddbe0e418b0ecf746c36b26d18925->leave($__internal_add75c4eeca73342100607ad86ed179fc7cddbe0e418b0ecf746c36b26d18925_prof);

    }

    // line 6
    public function block_modals($context, array $blocks = array())
    {
        $__internal_412fc660a223ff2ef6db46dd188de64eb02f09e11003b3282dbf896321cde378 = $this->env->getExtension("native_profiler");
        $__internal_412fc660a223ff2ef6db46dd188de64eb02f09e11003b3282dbf896321cde378->enter($__internal_412fc660a223ff2ef6db46dd188de64eb02f09e11003b3282dbf896321cde378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 7
        echo "

";
        // line 9
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/addemploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 9)->display($context);
        // line 10
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploitemplatelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 10)->display($context);
        // line 11
        echo "
";
        // line 12
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 13
            echo "
\t";
            // line 14
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
                // line 15
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/modalemploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 15)->display($context);
                // line 16
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/deleteemploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 16)->display($context);
                // line 17
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
            // line 18
            echo "\t
";
        }
        // line 20
        echo "

";
        // line 22
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/adddepartementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 22)->display($context);
        // line 23
        echo "
";
        // line 24
        if ( !(null === (isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")))) {
            // line 25
            echo "
\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 27
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/modaldepartementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 27)->display($context);
                // line 28
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/deletedepartementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 28)->display($context);
                // line 29
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t
";
        }
        // line 32
        echo "
";
        // line 33
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/addfilierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 33)->display($context);
        // line 34
        echo "
";
        // line 35
        if ( !(null === (isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")))) {
            // line 36
            echo "
\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                // line 38
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/modalfilierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 38)->display($context);
                // line 39
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/deletefilierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 39)->display($context);
                // line 40
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t
";
        }
        // line 43
        echo "
";
        // line 44
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/adddisciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 44)->display($context);
        // line 45
        echo "
";
        // line 46
        if ( !(null === (isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")))) {
            // line 47
            echo "
\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dis"]) {
                // line 49
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 49)->display($context);
                // line 50
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/deletedisciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 50)->display($context);
                // line 51
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t
";
        }
        // line 54
        echo "


";
        // line 57
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/addmatierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 57)->display($context);
        // line 58
        echo "
";
        // line 59
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")))) {
            // line 60
            echo "
\t";
            // line 61
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
                // line 62
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 62)->display($context);
                // line 63
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/deletematierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 63)->display($context);
                // line 64
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
            // line 65
            echo "\t
";
        }
        // line 67
        echo "
";
        // line 68
        $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/addclasselayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 68)->display($context);
        // line 69
        echo "
";
        // line 70
        if ( !(null === (isset($context["allclasse"]) ? $context["allclasse"] : $this->getContext($context, "allclasse")))) {
            // line 71
            echo "
\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allclasse"]) ? $context["allclasse"] : $this->getContext($context, "allclasse")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
                // line 73
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/modalclasselayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 73)->display($context);
                // line 74
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/deleteclasselayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 74)->display($context);
                // line 75
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t
";
        }
        // line 78
        echo "

";
        // line 80
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/addgroupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 80)->display($context);
        // line 81
        echo "
";
        // line 82
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")))) {
            // line 83
            echo "
\t";
            // line 84
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
                // line 85
                echo "\t\t\t\t
\t\t\t\t";
                // line 86
                $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/modalgroupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 86)->display($context);
                // line 87
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/deletegroupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 87)->display($context);
                // line 88
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
            // line 89
            echo "\t
";
        }
        // line 91
        echo "

";
        // line 93
        $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/addvoeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 93)->display($context);
        // line 94
        echo "
";
        // line 95
        if ( !(null === (isset($context["allvoeux"]) ? $context["allvoeux"] : $this->getContext($context, "allvoeux")))) {
            // line 96
            echo "
\t";
            // line 97
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
                // line 98
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/modalvoeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 98)->display($context);
                // line 99
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/deletevoeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 99)->display($context);
                // line 100
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
            // line 101
            echo "\t
";
        }
        // line 103
        echo "
";
        // line 104
        $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/adddevoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 104)->display($context);
        // line 105
        echo "
";
        // line 106
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 107
            echo "
\t";
            // line 108
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
                // line 109
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/modaldevoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 109)->display($context);
                // line 110
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/deletedevoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 110)->display($context);
                // line 111
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
            // line 112
            echo "\t
";
        }
        // line 114
        echo "

";
        // line 116
        $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/addenseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 116)->display($context);
        // line 117
        echo "
";
        // line 118
        if ( !(null === (isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")))) {
            // line 119
            echo "
\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 121
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 121)->display($context);
                // line 122
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/deleteenseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 122)->display($context);
                // line 123
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t
";
        }
        // line 126
        echo "

";
        // line 128
        $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/addlieuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 128)->display($context);
        // line 129
        echo "
";
        // line 130
        if ( !(null === (isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")))) {
            // line 131
            echo "
\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["lieux"]) {
                // line 133
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/modallieuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 133)->display($context);
                // line 134
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/deletelieuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 134)->display($context);
                // line 135
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieux'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "\t
";
        }
        // line 138
        echo "
";
        // line 139
        $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/addsallelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 139)->display($context);
        // line 140
        echo "
";
        // line 141
        if ( !(null === (isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")))) {
            // line 142
            echo "
\t";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 144
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/modalsallelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 144)->display($context);
                // line 145
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/deletesallelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 145)->display($context);
                // line 146
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t
";
        }
        // line 149
        echo "  
  
  ";
        
        $__internal_412fc660a223ff2ef6db46dd188de64eb02f09e11003b3282dbf896321cde378->leave($__internal_412fc660a223ff2ef6db46dd188de64eb02f09e11003b3282dbf896321cde378_prof);

    }

    // line 154
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_4c81b2cb51b3e963ce72d9d507b3f57bf4bbf6df2e7778f0960b1b5614d5d677 = $this->env->getExtension("native_profiler");
        $__internal_4c81b2cb51b3e963ce72d9d507b3f57bf4bbf6df2e7778f0960b1b5614d5d677->enter($__internal_4c81b2cb51b3e963ce72d9d507b3f57bf4bbf6df2e7778f0960b1b5614d5d677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 155
        echo "\t
        <div class=\"row\">
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink \" onclick=\"openMenu(event, 'emploilayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-1\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Emploi du temps </h4>
\t\t\t\t  </div>
\t\t\t\t </a>
\t\t\t</div>
\t\t\t
\t\t
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'departementlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-education w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Départements </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'filierelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">class</i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Filieres </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'classelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-list-alt w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Classes </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'groupelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"fa fa-group w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Groupes </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'enseignantlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-user w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Enseignants </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t\t
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'disciplinelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">library_books</i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Disciplines </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'matierelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"fa fa-list-alt w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Matieres </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'voeuxlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-star w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Voeux </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'devoirlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-book w3-xlarge\"></i><i class=\"glyphicon glyphicon-text-background w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Devoirs </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'lieuxlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-book w3-xlarge\"></i><i class=\"glyphicon glyphicon-text-background w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Lieux </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'sallelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-book w3-xlarge\"></i><i class=\"glyphicon glyphicon-text-background w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Salles  </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t";
        
        $__internal_4c81b2cb51b3e963ce72d9d507b3f57bf4bbf6df2e7778f0960b1b5614d5d677->leave($__internal_4c81b2cb51b3e963ce72d9d507b3f57bf4bbf6df2e7778f0960b1b5614d5d677_prof);

    }

    // line 298
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_16bc72d22a0b043d3b2d5a15ead56705f80510142890c1e337e6ede9c6cf0d64 = $this->env->getExtension("native_profiler");
        $__internal_16bc72d22a0b043d3b2d5a15ead56705f80510142890c1e337e6ede9c6cf0d64->enter($__internal_16bc72d22a0b043d3b2d5a15ead56705f80510142890c1e337e6ede9c6cf0d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 299
        echo "\t\t
\t\t";
        // line 300
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 300)->display($context);
        // line 301
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 301)->display($context);
        // line 302
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 302)->display($context);
        // line 303
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/classelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 303)->display($context);
        // line 304
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 304)->display($context);
        // line 305
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/enseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 305)->display($context);
        // line 306
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 306)->display($context);
        // line 307
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 307)->display($context);
        // line 308
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/voeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 308)->display($context);
        // line 309
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/devoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 309)->display($context);
        // line 310
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/lieuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 310)->display($context);
        // line 311
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/sallelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 311)->display($context);
        // line 312
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/modif/modiflayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 312)->display($context);
        // line 313
        echo "\t
\t";
        
        $__internal_16bc72d22a0b043d3b2d5a15ead56705f80510142890c1e337e6ede9c6cf0d64->leave($__internal_16bc72d22a0b043d3b2d5a15ead56705f80510142890c1e337e6ede9c6cf0d64_prof);

    }

    // line 318
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1651cd998285aed3134eafba89c65402226734ae6ecacc51129dbf980b37dd9b = $this->env->getExtension("native_profiler");
        $__internal_1651cd998285aed3134eafba89c65402226734ae6ecacc51129dbf980b37dd9b->enter($__internal_1651cd998285aed3134eafba89c65402226734ae6ecacc51129dbf980b37dd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 319
        echo "
\t";
        // line 320
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/emploihandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/departementhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/filierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/classehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/groupehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/enseignanthandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/disciplinehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/matierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/lieuxhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/sallehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/devoirhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/voeuxhandle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1651cd998285aed3134eafba89c65402226734ae6ecacc51129dbf980b37dd9b->leave($__internal_1651cd998285aed3134eafba89c65402226734ae6ecacc51129dbf980b37dd9b_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/Default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  998 => 334,  994 => 333,  990 => 332,  986 => 331,  982 => 330,  978 => 329,  974 => 328,  970 => 327,  966 => 326,  962 => 325,  958 => 324,  954 => 323,  950 => 322,  945 => 320,  942 => 319,  936 => 318,  928 => 313,  925 => 312,  922 => 311,  919 => 310,  916 => 309,  913 => 308,  910 => 307,  907 => 306,  904 => 305,  901 => 304,  898 => 303,  895 => 302,  892 => 301,  890 => 300,  887 => 299,  881 => 298,  733 => 155,  727 => 154,  718 => 149,  714 => 147,  700 => 146,  697 => 145,  694 => 144,  677 => 143,  674 => 142,  672 => 141,  669 => 140,  667 => 139,  664 => 138,  660 => 136,  646 => 135,  643 => 134,  640 => 133,  623 => 132,  620 => 131,  618 => 130,  615 => 129,  613 => 128,  609 => 126,  605 => 124,  591 => 123,  588 => 122,  585 => 121,  568 => 120,  565 => 119,  563 => 118,  560 => 117,  558 => 116,  554 => 114,  550 => 112,  536 => 111,  533 => 110,  530 => 109,  513 => 108,  510 => 107,  508 => 106,  505 => 105,  503 => 104,  500 => 103,  496 => 101,  482 => 100,  479 => 99,  476 => 98,  459 => 97,  456 => 96,  454 => 95,  451 => 94,  449 => 93,  445 => 91,  441 => 89,  427 => 88,  424 => 87,  422 => 86,  419 => 85,  402 => 84,  399 => 83,  397 => 82,  394 => 81,  392 => 80,  388 => 78,  384 => 76,  370 => 75,  367 => 74,  364 => 73,  347 => 72,  344 => 71,  342 => 70,  339 => 69,  337 => 68,  334 => 67,  330 => 65,  316 => 64,  313 => 63,  310 => 62,  293 => 61,  290 => 60,  288 => 59,  285 => 58,  283 => 57,  278 => 54,  274 => 52,  260 => 51,  257 => 50,  254 => 49,  237 => 48,  234 => 47,  232 => 46,  229 => 45,  227 => 44,  224 => 43,  220 => 41,  206 => 40,  203 => 39,  200 => 38,  183 => 37,  180 => 36,  178 => 35,  175 => 34,  173 => 33,  170 => 32,  166 => 30,  152 => 29,  149 => 28,  146 => 27,  129 => 26,  126 => 25,  124 => 24,  121 => 23,  119 => 22,  115 => 20,  111 => 18,  97 => 17,  94 => 16,  91 => 15,  74 => 14,  71 => 13,  69 => 12,  66 => 11,  64 => 10,  62 => 9,  58 => 7,  52 => 6,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Pedagogie - Admin*/
/* {% endblock %}*/
/* */
/* {% block modals %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/emploi/addemploilayout.html.twig" %}*/
/* {% include "PedagogiePedagogieBundle::admin/emploi/emploitemplatelayout.html.twig" %}*/
/* */
/* {% if allemploi is not null %}*/
/* */
/* 	{% for emp in allemploi  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/emploi/modalemploilayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/emploi/deleteemploilayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/departement/adddepartementlayout.html.twig" %}*/
/* */
/* {% if alldepartement is not null %}*/
/* */
/* 	{% for dep in alldepartement  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/departement/modaldepartementlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/departement/deletedepartementlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/filiere/addfilierelayout.html.twig" %}*/
/* */
/* {% if allfiliere is not null %}*/
/* */
/* 	{% for fil in allfiliere  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/filiere/modalfilierelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/filiere/deletefilierelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/discipline/adddisciplinelayout.html.twig" %}*/
/* */
/* {% if alldiscipline is not null %}*/
/* */
/* 	{% for dis in alldiscipline  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/discipline/deletedisciplinelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/matiere/addmatierelayout.html.twig" %}*/
/* */
/* {% if allmatiere is not null %}*/
/* */
/* 	{% for mat in allmatiere  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/matiere/deletematierelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/classe/addclasselayout.html.twig" %}*/
/* */
/* {% if allclasse is not null %}*/
/* */
/* 	{% for cls in allclasse  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/classe/modalclasselayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/classe/deleteclasselayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/groupe/addgroupelayout.html.twig" %}*/
/* */
/* {% if allgroupe is not null %}*/
/* */
/* 	{% for grp in allgroupe  %}*/
/* 				*/
/* 				{% include "PedagogiePedagogieBundle::admin/groupe/modalgroupelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/groupe/deletegroupelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/voeux/addvoeuxlayout.html.twig" %}*/
/* */
/* {% if allvoeux is not null %}*/
/* */
/* 	{% for veu in allvoeux  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/voeux/modalvoeuxlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/voeux/deletevoeuxlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/devoir/adddevoirlayout.html.twig" %}*/
/* */
/* {% if alldevoir is not null %}*/
/* */
/* 	{% for dev in alldevoir  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/devoir/modaldevoirlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/devoir/deletedevoirlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/enseignant/addenseignantlayout.html.twig" %}*/
/* */
/* {% if allenseignant is not null %}*/
/* */
/* 	{% for ens in allenseignant  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/enseignant/deleteenseignantlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/lieux/addlieuxlayout.html.twig" %}*/
/* */
/* {% if alllieux is not null %}*/
/* */
/* 	{% for lieux in alllieux  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/lieux/modallieuxlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/lieux/deletelieuxlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/salle/addsallelayout.html.twig" %}*/
/* */
/* {% if allsalle is not null %}*/
/* */
/* 	{% for salle in allsalle  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/salle/modalsallelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/salle/deletesallelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/*   */
/*   */
/*   {% endblock %}*/
/* */
/* */
/*     {% block submenu %}*/
/* 	*/
/*         <div class="row">*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink " onclick="openMenu(event, 'emploilayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-1">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-calendar w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Emploi du temps </h4>*/
/* 				  </div>*/
/* 				 </a>*/
/* 			</div>*/
/* 			*/
/* 		*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'departementlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-education w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Départements </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'filierelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="material-icons w3-xlarge">class</i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Filieres </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'classelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-list-alt w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Classes </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'groupelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="fa fa-group w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Groupes </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'enseignantlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-user w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Enseignants </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 			*/
/* 		<div class="row">*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'disciplinelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="material-icons w3-xlarge">library_books</i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Disciplines </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'matierelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="fa fa-list-alt w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Matieres </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'voeuxlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-star w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Voeux </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'devoirlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-book w3-xlarge"></i><i class="glyphicon glyphicon-text-background w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Devoirs </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'lieuxlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-book w3-xlarge"></i><i class="glyphicon glyphicon-text-background w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Lieux </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'sallelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-book w3-xlarge"></i><i class="glyphicon glyphicon-text-background w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Salles  </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 	{% endblock %}*/
/* 	*/
/* 	{% block bodycontent %}*/
/* 		*/
/* 		{% include "PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/classe/classelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/enseignant/enseignantlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/voeux/voeuxlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/devoir/devoirlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/lieux/lieuxlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/salle/sallelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/modif/modiflayout.html.twig" %}*/
/* 	*/
/* 	{% endblock %}*/
/*     */
/* */
/* */
/* {% block javascripts %}*/
/* */
/* 	{{ parent() }}*/
/* 	*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/pedagogie.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/emploihandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/departementhandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/filierehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/classehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/groupehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/enseignanthandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/disciplinehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/matierehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/lieuxhandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/sallehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/devoirhandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/voeuxhandle.js') }}"></script>*/
/* {% endblock %}*/
