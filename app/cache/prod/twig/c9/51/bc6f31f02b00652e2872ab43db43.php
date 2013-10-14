<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase2.html.twig */
class __TwigTemplate_c951bc6f31f02b00652e2872ab43db43 extends Twig_Template
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
<!--<h5>Choix des paramètres pour la session - Phase 2/5</h5>-->
<legend>Choix des paramètres pour la session - Phase 2/5</legend> 

 
   <form class=\"inline\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
     ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " </br></br>
      <input type=\"submit\" class=\"btn btn-primary\" />
   </form>
  
</div>

";
        // line 18
        echo "<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
 
";
        // line 21
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('div#sujet2_devspebundle_parametre_contraintes');
 
  // On ajoute un lien pour ajouter une nouvelle contrainte
  var \$lienAjout = \$('<a href=\"#\" id=\"ajout_contrainte\" class=\"btn\">Ajouter une contrainte</a>');
  \$container.append(\$lienAjout);
 
  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterContrainte(\$container);
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });
 
  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;
 
  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouveau parametre par exemple).
  if (index == 0) {
    ajouterContrainte(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression(\$(this));
    });
  }
 
  // La fonction qui ajoute un formulaire Categorie
  function ajouterContrainte(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Contrainte n°' + (index+1))
                                                        .replace(/__name__/g, index));
 
    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression(\$prototype);
 
    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);
 
    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }
 
  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression(\$prototype) {
    // Création du lien
    \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
 
    // Ajout du lien
    \$prototype.append(\$lienSuppression);
 
    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
</script>";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:formulaire_phase2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 18,  32 => 10,  28 => 9,  19 => 2,  45 => 21,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
