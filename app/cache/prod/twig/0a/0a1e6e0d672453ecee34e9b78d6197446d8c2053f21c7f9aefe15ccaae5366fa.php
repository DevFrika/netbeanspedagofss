<?php

/* ::layout_signinmodal.html.twig */
class __TwigTemplate_7374478f86b4d461d7ba77bf34208f7945ef2c0d33ac16e9857f8e3bc2d0c059 extends Twig_Template
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
        echo "<div class=\"fade modal text-center\" id=\"inscription-modal\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\"> Inscription
              <br>
            </h4>
          </div>
          <div class=\"modal-body\">
            ";
        // line 11
        $this->loadTemplate("::layout_signinform.html.twig", "::layout_signinmodal.html.twig", 11)->display($context);
        // line 12
        echo "          </div>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "::layout_signinmodal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <div class="fade modal text-center" id="inscription-modal">*/
/*       <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*             <h4 class="modal-title" id="myModalLabel"> Inscription*/
/*               <br>*/
/*             </h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*             {% include "::layout_signinform.html.twig" %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
