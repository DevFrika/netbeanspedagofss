<?php

/* ::layout_signinmodal.html.twig */
class __TwigTemplate_0032b10dfcdc6c9e4099214e0aaa7a6d2217508e1174fc1064addff3e2ebb703 extends Twig_Template
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
        $__internal_6c4b83022bd54026325683afeb37adc2c715d96f78ede29bc157d0b8259d1e78 = $this->env->getExtension("native_profiler");
        $__internal_6c4b83022bd54026325683afeb37adc2c715d96f78ede29bc157d0b8259d1e78->enter($__internal_6c4b83022bd54026325683afeb37adc2c715d96f78ede29bc157d0b8259d1e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout_signinmodal.html.twig"));

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
        
        $__internal_6c4b83022bd54026325683afeb37adc2c715d96f78ede29bc157d0b8259d1e78->leave($__internal_6c4b83022bd54026325683afeb37adc2c715d96f78ede29bc157d0b8259d1e78_prof);

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
        return array (  36 => 12,  34 => 11,  22 => 1,);
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
