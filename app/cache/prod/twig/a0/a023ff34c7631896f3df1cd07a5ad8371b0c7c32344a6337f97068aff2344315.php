<?php

/* @PedagogiePedagogie/Default/admin.html.twig */
class __TwigTemplate_8811977d647a96a4122b86504eb621c1b6dbf82a35e873b6785b9858d4aeb374 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
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

    // line 6
    public function block_modals($context, array $blocks = array())
    {
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
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : null))) {
            // line 13
            echo "
\t";
            // line 14
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
        if ( !(null === (isset($context["alldepartement"]) ? $context["alldepartement"] : null))) {
            // line 25
            echo "
\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
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
        if ( !(null === (isset($context["allfiliere"]) ? $context["allfiliere"] : null))) {
            // line 36
            echo "
\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : null));
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
        if ( !(null === (isset($context["alldiscipline"]) ? $context["alldiscipline"] : null))) {
            // line 47
            echo "
\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : null));
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
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : null))) {
            // line 60
            echo "
\t";
            // line 61
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
        if ( !(null === (isset($context["allclasse"]) ? $context["allclasse"] : null))) {
            // line 71
            echo "
\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allclasse"]) ? $context["allclasse"] : null));
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
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : null))) {
            // line 83
            echo "
\t";
            // line 84
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
        if ( !(null === (isset($context["allvoeux"]) ? $context["allvoeux"] : null))) {
            // line 96
            echo "
\t";
            // line 97
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
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 107
            echo "
\t";
            // line 108
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
        if ( !(null === (isset($context["allenseignant"]) ? $context["allenseignant"] : null))) {
            // line 119
            echo "
\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : null));
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
        if ( !(null === (isset($context["alllieux"]) ? $context["alllieux"] : null))) {
            // line 131
            echo "
\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : null));
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
        if ( !(null === (isset($context["allsalle"]) ? $context["allsalle"] : null))) {
            // line 142
            echo "
\t";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : null));
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
    }

    // line 154
    public function block_submenu($context, array $blocks = array())
    {
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
    }

    // line 298
    public function block_bodycontent($context, array $blocks = array())
    {
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
    }

    // line 316
    public function block_footer($context, array $blocks = array())
    {
        // line 317
        echo "\t
\t";
    }

    // line 321
    public function block_javascripts($context, array $blocks = array())
    {
        // line 322
        echo "
\t";
        // line 323
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/emploihandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/departementhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/filierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/classehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/groupehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/enseignanthandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/disciplinehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/matierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/lieuxhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/sallehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/devoirhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/voeuxhandle.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  974 => 337,  970 => 336,  966 => 335,  962 => 334,  958 => 333,  954 => 332,  950 => 331,  946 => 330,  942 => 329,  938 => 328,  934 => 327,  930 => 326,  926 => 325,  921 => 323,  918 => 322,  915 => 321,  910 => 317,  907 => 316,  902 => 313,  899 => 312,  896 => 311,  893 => 310,  890 => 309,  887 => 308,  884 => 307,  881 => 306,  878 => 305,  875 => 304,  872 => 303,  869 => 302,  866 => 301,  864 => 300,  861 => 299,  858 => 298,  713 => 155,  710 => 154,  704 => 149,  700 => 147,  686 => 146,  683 => 145,  680 => 144,  663 => 143,  660 => 142,  658 => 141,  655 => 140,  653 => 139,  650 => 138,  646 => 136,  632 => 135,  629 => 134,  626 => 133,  609 => 132,  606 => 131,  604 => 130,  601 => 129,  599 => 128,  595 => 126,  591 => 124,  577 => 123,  574 => 122,  571 => 121,  554 => 120,  551 => 119,  549 => 118,  546 => 117,  544 => 116,  540 => 114,  536 => 112,  522 => 111,  519 => 110,  516 => 109,  499 => 108,  496 => 107,  494 => 106,  491 => 105,  489 => 104,  486 => 103,  482 => 101,  468 => 100,  465 => 99,  462 => 98,  445 => 97,  442 => 96,  440 => 95,  437 => 94,  435 => 93,  431 => 91,  427 => 89,  413 => 88,  410 => 87,  408 => 86,  405 => 85,  388 => 84,  385 => 83,  383 => 82,  380 => 81,  378 => 80,  374 => 78,  370 => 76,  356 => 75,  353 => 74,  350 => 73,  333 => 72,  330 => 71,  328 => 70,  325 => 69,  323 => 68,  320 => 67,  316 => 65,  302 => 64,  299 => 63,  296 => 62,  279 => 61,  276 => 60,  274 => 59,  271 => 58,  269 => 57,  264 => 54,  260 => 52,  246 => 51,  243 => 50,  240 => 49,  223 => 48,  220 => 47,  218 => 46,  215 => 45,  213 => 44,  210 => 43,  206 => 41,  192 => 40,  189 => 39,  186 => 38,  169 => 37,  166 => 36,  164 => 35,  161 => 34,  159 => 33,  156 => 32,  152 => 30,  138 => 29,  135 => 28,  132 => 27,  115 => 26,  112 => 25,  110 => 24,  107 => 23,  105 => 22,  101 => 20,  97 => 18,  83 => 17,  80 => 16,  77 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  50 => 10,  48 => 9,  44 => 7,  41 => 6,  36 => 3,  33 => 2,  11 => 1,);
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
/* 	{% block footer %}*/
/* 	*/
/* 	{% endblock %}*/
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
