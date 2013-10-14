<?php

/* Sujet2DevSpeBundle:Sujet2View:acceuilenseignant.html.twig */
class __TwigTemplate_c1222992229b5ac3487a750ccedee09b extends Twig_Template
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
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig")->display($context);
        // line 9
        echo "
<div class=\"span12\" id=\"span12interieur\">
\t\t\t<legend color=\"dark\"><h2 id=\"h2title\">Bienvenue</h2></legend>
\t\t\t<p><b>
\t\t\t Vous êtes à présent connecté en tant qu'enseignant.</p><br>
\t\t\t <p>
\t\t\t Vous pouvez réaliser plusieurs actions différentes à savoir :
\t\t\t </p>
\t\t\t <div class=\"span6\" id=\"spanfondblue\" >
\t\t\t\t<ul>
\t\t\t\t   <li>Visualiser l'état de vos voeux</li>
\t\t\t\t   <li>Saisir un voeux</li>
\t\t\t\t   <li>Modifier certains éléments de votre profil</li>
\t\t\t\t</ul>
\t\t\t\t<br>
\t\t\t </div>\t
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:acceuilenseignant.html.twig";
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
