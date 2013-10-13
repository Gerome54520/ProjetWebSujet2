<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig */
class __TwigTemplate_39f4f0923927b25ea15d07550ee69d98 extends Twig_Template
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
        // line 2
        echo "
 <div class=\"well\">

<legend>Choix des paramètres pour la session - Phase 1/5</legend> 

  <form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " </br></br>
    <input type=\"submit\" class=\"btn btn-primary\" />

  <form class=\"form-horizontal well\">   
  <div class=\"progress progress-striped active\">
   <div class=\"bar\" style=\"width: 20%\"></div> </blockquote><label>\t\t20%</label>\t
  </div>
   <div id=\"alerte\" class=\"alert alert-error\" style=\"display:none\"> <strong>La date de retour doit être postérieure à la date de départ !</strong> </div>   
\t<form method=\"post\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " </br></br>
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>

    <input type=\"submit\" class=\"btn btn-primary\" value=\"Suivant\" />

  </form>
</div>

<script>
\$(\"form input.date\").datepicker({
    dateFormat: 'dd/MM/yyyy', 
    dateFormat: 'ddMMyy', 
    firstDay:1
}).attr(\"readonly\",\"readonly\"); 
</script>
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  30 => 8,  26 => 7,  34 => 12,  28 => 9,  19 => 2,  45 => 17,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
