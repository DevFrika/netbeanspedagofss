<?php

/* @PedagogiePedagogie/admin/filiere/modalfilierelayout.html.twig */
class __TwigTemplate_fa727806f59fff1a4dbb91ec7a0e22dc86a491977badb198cbdb665012be4232 extends Twig_Template
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
        // line 1
        echo "<div class=\"fade modal text-center\" id=\"fil";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "filiere", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "description", array()), "html", null, true);
        echo "    </p>
\t\t\t\t\t\t<p> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "classes", array()), "count", array()), "html", null, true);
        echo "  classes </p>
\t\t\t\t\t\t<p> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "groupes", array()), "count", array()), "html", null, true);
        echo " groupes</p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/filiere/modalfilierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  37 => 10,  31 => 9,  19 => 1,);
    }
}
/* <div class="fade modal text-center" id="fil{{ fil.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ fil.filiere }} : {{ fil.description }}    </p>*/
/* 						<p> {{ fil.classes.count }}  classes </p>*/
/* 						<p> {{ fil.groupes.count }} groupes</p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
