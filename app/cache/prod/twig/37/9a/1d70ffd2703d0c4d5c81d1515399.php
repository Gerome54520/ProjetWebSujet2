<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig */
class __TwigTemplate_379a1d70ffd2703d0c4d5c81d1515399 extends Twig_Template
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

 

  <form class=\"form-horizontal well\">   
\t\t<div class=\"progress progress-striped active\">
\t\t<div class=\"bar\" style=\"width: 20%\"></div> </blockquote><label>\t\t20%</label>\t
\t\t</div>
  </form>
  
  
   <div id=\"alerte\" class=\"alert alert-error\" style=\"display:none\"> <strong>La date de retour doit être postérieure à la date de départ !</strong> </div>   
\t
\t
   
  

<form method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
   <div>
        <label for=\"form_sesLibelle\">Nom de la session :</label>\t
\t\t\t<input type=\"text\" id=\"form_sesLibelle\" name=\"form[sesLibelle]\" />
\t\t\t
\t\t<label for=\"form_dateOuv\">Date Ouverture :</label>
\t\t\t
\t\t\t<input type=\"text\" id=\"form_dateOuv\" name=\"form[dateOuv]\" class=\"input-mini\" data-date-format=\"dd/mm/yy\"/>
\t\t\t
\t    <label for=\"form_dateClo\">Date Ouverture :</label>
\t\t\t
\t\t\t<input type=\"text\" id=\"form_dateClo\" name=\"form[dateClo]\" class=\"input-mini\" data-date-format=\"dd/mm/yy\"/>
\t<input type=\"submit\" class=\"btn btn-primary\" />
  </div>
</form>


</div>

<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" ></script> 
<script>

\$(function (){
   function get_date(text) {
    var d_split = text.split('/');
    var d = new Date(0);
    return d.setFullYear(d_split[2], d_split[1], d_split[0])
   }
   \$('#form_dateOuv, #form_dateClo').datepicker().on('changeDate', function(e){
    if(get_date(\$('#form_dateOuv').val()) >= get_date(\$('#form_dateClo').val()))
            \$('#alerte').show();
    else \$('#alerte').hide();
   });
});    

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
        return array (  67 => 42,  63 => 41,  41 => 22,  19 => 2,);
    }
}
