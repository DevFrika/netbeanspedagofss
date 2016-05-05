<?php

/* layout_signinmodal.html.twig */
class __TwigTemplate_c60786af204193c66d1b38e8b549d7acfa0a7022a5b5dc972ec56926d14a51a9 extends Twig_Template
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
        $__internal_6bf9c7d165bf78e6f7558dbbeb5a1af4fc50da337c6a5733b94cef2dddbb805a = $this->env->getExtension("native_profiler");
        $__internal_6bf9c7d165bf78e6f7558dbbeb5a1af4fc50da337c6a5733b94cef2dddbb805a->enter($__internal_6bf9c7d165bf78e6f7558dbbeb5a1af4fc50da337c6a5733b94cef2dddbb805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout_signinmodal.html.twig"));

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
        $this->loadTemplate("::layout_signinform.html.twig", "layout_signinmodal.html.twig", 11)->display($context);
        // line 12
        echo "          </div>
        </div>
      </div>
    </div>";
        
        $__internal_6bf9c7d165bf78e6f7558dbbeb5a1af4fc50da337c6a5733b94cef2dddbb805a->leave($__internal_6bf9c7d165bf78e6f7558dbbeb5a1af4fc50da337c6a5733b94cef2dddbb805a_prof);

    }

    public function getTemplateName()
    {
        return "layout_signinmodal.html.twig";
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
