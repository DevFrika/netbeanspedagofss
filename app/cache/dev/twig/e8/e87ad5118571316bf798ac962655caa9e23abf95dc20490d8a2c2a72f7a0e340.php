<?php

/* layout_loginmodal.html.twig */
class __TwigTemplate_3df0b8601123b2482d06d766a6957329ebced9da72f398100e9f3d68bcf3b207 extends Twig_Template
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
        $__internal_a3a3de8186346be0adb806cdbfe1b41c6e7095af6b33c455c014a68eb6ac5d2f = $this->env->getExtension("native_profiler");
        $__internal_a3a3de8186346be0adb806cdbfe1b41c6e7095af6b33c455c014a68eb6ac5d2f->enter($__internal_a3a3de8186346be0adb806cdbfe1b41c6e7095af6b33c455c014a68eb6ac5d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout_loginmodal.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"connexion-modal\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\"> Connexion
              <br>
            </h4>
          </div>
          <div class=\"modal-body\">
            ";
        // line 11
        $this->loadTemplate("::layout_loginform.html.twig", "layout_loginmodal.html.twig", 11)->display($context);
        // line 12
        echo "            
          </div>
        </div>
      </div>
    </div>
\t
    ";
        
        $__internal_a3a3de8186346be0adb806cdbfe1b41c6e7095af6b33c455c014a68eb6ac5d2f->leave($__internal_a3a3de8186346be0adb806cdbfe1b41c6e7095af6b33c455c014a68eb6ac5d2f_prof);

    }

    public function getTemplateName()
    {
        return "layout_loginmodal.html.twig";
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
/* <div class="fade modal text-center" id="connexion-modal">*/
/*       <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*             <h4 class="modal-title" id="myModalLabel"> Connexion*/
/*               <br>*/
/*             </h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*             {% include "::layout_loginform.html.twig" %}*/
/*             */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* 	*/
/*     */