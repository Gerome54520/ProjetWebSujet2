<?php

/* Sujet2DevSpeBundle:Sujet2View:acceuilgestionnaire.html.twig */
class __TwigTemplate_0c4b75376d207a01fe8bfa1c374551e7 extends Twig_Template
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
        // line 8
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig")->display($context);
        // line 9
        echo "
<div class=\"span12\" id=\"span12intérieur\">
\t\t\t<legend color=\"dark\"><h2 id=\"h2title\">Bienvenue</h2></legend>
\t\t\t<p><b>
\t\t\t Vous êtes à présent connecté en tant que gestionnaire.</p><br>
\t\t\t <p>
\t\t\t Vous pouvez réaliser plusieurs actions différentes à savoir :
\t\t\t </p>
\t\t\t <div class=\"span6\" id=\"spanfondblue\">
\t\t\t\t<ul>
\t\t\t\t   <li>Créer et visualiser une session</li>
\t\t\t\t   <li>Valider des voeux</li>
\t\t\t\t   <li>Importer certaines tables en CSV</li>
\t\t\t\t   <li>Modifier certains éléments de votre profil</li>
\t\t\t\t</ul>
\t\t\t\t<br>
\t\t\t </div>
\t\t


\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:acceuilgestionnaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
