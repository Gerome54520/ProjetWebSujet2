<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig */
class __TwigTemplate_c0d25a6680e958d2392ae75c8a320607 extends Twig_Template
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
<div id=\"alerte\" class=\"alert alert-error\" style=\"display:none\"> <strong>La date de retour doit être postérieure à la date de départ !</strong> </div>   
 
<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
   <div>
\t\t<label for=\"form_sesLibelle\">Nom de la session :</label> 
\t\t<input type=\"text\" id=\"form_sesLibelle\" name=\"form[sesLibelle]\" /><br><br>
\t   
\t\t<label for=\"form_dateOuv\">Date Ouverture :</label>\t   
\t\t<input type=\"text\" id=\"form_dateOuv\" name=\"form[dateOuv]\" class=\"input-mini\" data-date-format=\"dd/mm/yy\"/><br><br>
\t   
\t\t<label for=\"form_dateClo\">Date Ouverture :</label>
\t\t<input type=\"text\" id=\"form_dateClo\" name=\"form[dateClo]\" class=\"input-mini\" data-date-format=\"dd/mm/yy\"/><br>
\t\t
\t\t<br><br>
\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</form>


<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
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

</script>";
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
        return array (  48 => 23,  44 => 22,  24 => 5,  19 => 2,);
    }
}
