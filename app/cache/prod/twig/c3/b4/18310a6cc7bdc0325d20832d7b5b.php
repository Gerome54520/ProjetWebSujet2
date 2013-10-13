<?php

/* Sujet2DevSpeBundle:Sujet2View:acceuil.html.twig */
class __TwigTemplate_c3b418310a6cc7bdc0325d20832d7b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Acceuil ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        echo " 


";
        // line 11
        echo "\t\t\t<legend color=\"dark\"><h2 id=\"h2title\">Bienvenue</h2></legend>
\t\t\t<p><b>
\t\t\t Bienvenue sur l'application de saisie et d'attribution des stages.</p><br>
\t\t\t <p style=\"text-indent:2em\">
\t\t\t Cette application à pour but d'attribuer, de façon équitable, les stages aux enseignants qui ont la fonction de parrain auprès d'étudiant en DUT informatique.
\t\t\t </p><br>
\t\t\t <p><u>Procédure :</u></p><br>
\t\t\t <p style=\"text-indent:2em\">
\t\t\t Après vous être authentifié, à l'aide de l'onglet connexion, vous pourrez en tant qu'enseignant saisir vos voeux de visite d'étudiants. Attention cependant, un calcul de point est appliqué à vos voeux. Si votre total de points est trop faible vous pouvez vous voir attribuer des voeux que vous ne souhaitiez pas.
\t\t\t Une fois tout vos voeux saisis, un gestionnaire consulte vos choix et prend la décision final d'attribution.
\t\t\t</b></p>
\t\t\t<br>
\t\t\t

";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  35 => 7,  29 => 5,);
    }
}
