<?php

/* Sujet2DevSpeBundle:Sujet2View:profilenseignant.html.twig */
class __TwigTemplate_4d3dc5f8fb7a2dd2a84280401495ce13 extends Twig_Template
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
        echo " Profil ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        echo " 
";
        // line 8
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig")->display($context);
        // line 9
        echo "<div id=\"alerte\" class=\"alert alert-error\" style=\"display:none\"> <strong>Les deux mots de passe doivent être identiques !</strong> </div>
";
        // line 11
        echo "\t\t\t<legend color=\"dark\"><h2 id=\"h2title\">Profil</h2></legend>
\t\t\tNom :</br>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ensNom"), 'widget');
        echo " </br>
\t\t\tPrénom :</br>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ensPrenom"), 'widget');
        echo " </br>
\t\t\tAdresse :</br>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ensAdresse"), 'widget');
        echo " </br>
\t\t\tMot de passe :</br>
\t\t\t<input id=\"mdp1\" type=\"text\"></br>
\t\t\tConfirmer mot de passe : </br>
\t\t\t<input id=\"mdp2\" type=\"text\"></br>
\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\" />
\t\t\t ";
        // line 25
        echo "\t\t\t 
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:profilenseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  56 => 14,  52 => 13,  48 => 12,  45 => 11,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
