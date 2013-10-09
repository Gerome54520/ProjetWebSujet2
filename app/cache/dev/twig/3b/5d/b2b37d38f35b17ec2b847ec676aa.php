<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig */
class __TwigTemplate_3b5db2b37d38f35b17ec2b847ec676aa extends Twig_Template
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
<legend>Choix des paramètres pour la session - Phase 1/5</legend>

  <form class=\"form-horizontal well\">   
  <div class=\"progress progress-striped active\">
   <div class=\"bar\" style=\"width: 20%\"></div> </blockquote><label>\t\t20%</label>
\t
  </div>
 
   <div id=\"alerte\" class=\"alert alert-error\" style=\"display:none\"> <strong>La date de retour doit être postérieure à la date de départ !</strong> </div>
    <fieldset>
\tNom de la session :</br>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sesLibelle"), 'widget');
        echo " </br>
\t<label>Date de départ : </label>
    <input id=\"dateOuv\" type=\"text\" class=\"input-mini\" data-date-format=\"dd/mm/yy\">
    <label>Date de retour : </label>
    <input id=\"dateClo\" type=\"text\" class=\"input-mini\" data-date-format=\"dd/mm/yy\"></br></br>
\t
    </fieldset>
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Suivant\" />
  </form>

</body>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script>
\$(function (){
   function get_date(text) {
    var d_split = text.split('/');
    var d = new Date(0);
    return d.setFullYear(d_split[2], d_split[1], d_split[0])
   }
   \$('#dateOuv, #dateClo').datepicker().on('changeDate', function(e){
    if(get_date(\$('#dateOuv').val()) >= get_date(\$('#dateClo').val())) 
            \$('#alerte').show();
    else \$('#alerte').hide();
   });
});     

function timer(n) {
    \$(\".bar\").css(\"width\", n + \"%\");
    if(n < 100) {
        setTimeout(function() {
            timer(n + 10);
        }, 200);
    }
}
\$(function (){
    \$(\"#animer\").click(function() {
        timer(0);
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
        return array (  50 => 25,  46 => 24,  32 => 13,  19 => 2,);
    }
}
