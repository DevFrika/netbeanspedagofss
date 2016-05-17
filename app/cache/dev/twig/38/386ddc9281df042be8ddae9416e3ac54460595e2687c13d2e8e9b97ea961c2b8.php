<?php

/* ::layout_loginmodal.html.twig */
class __TwigTemplate_deda901272138e362b77acacae6b3eda8d1c21236dcf3d6f3fc41a04349e0b10 extends Twig_Template
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
        $__internal_a13e50ace75fbd47da54722adfa81d66f5c20e036d214a06d0931ffe10e5ddf1 = $this->env->getExtension("native_profiler");
        $__internal_a13e50ace75fbd47da54722adfa81d66f5c20e036d214a06d0931ffe10e5ddf1->enter($__internal_a13e50ace75fbd47da54722adfa81d66f5c20e036d214a06d0931ffe10e5ddf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout_loginmodal.html.twig"));

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
        $this->loadTemplate("::layout_loginform.html.twig", "::layout_loginmodal.html.twig", 11)->display($context);
        // line 12
        echo "            
          </div>
        </div>
      </div>
    </div>
\t
    ";
        
        $__internal_a13e50ace75fbd47da54722adfa81d66f5c20e036d214a06d0931ffe10e5ddf1->leave($__internal_a13e50ace75fbd47da54722adfa81d66f5c20e036d214a06d0931ffe10e5ddf1_prof);

    }

    public function getTemplateName()
    {
        return "::layout_loginmodal.html.twig";
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
