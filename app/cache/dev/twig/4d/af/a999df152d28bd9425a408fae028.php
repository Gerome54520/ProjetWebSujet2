<?php

/* Sujet2DevSpeBundle:Sujet2View:profilenseignant.html.twig */
class __TwigTemplate_4dafa999df152d28bd9425a408fae028 extends Twig_Template
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
        echo "<div class=\"span12\" id=\"span12interieur\">
\t\t\t<legend><h2 id=\"h2title\">Profil</h2></legend>
\t\t\t<p>

\t\t\t\tNom : 
\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensNom"), "html", null, true);
        echo " <br>
\t\t\t\tPrénom : 
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensPrenom"), "html", null, true);
        echo " <br>
\t\t\t\tAdresse : 
\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensAdresse"), "html", null, true);
        echo " <br><br>

\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_adresseenseignant");
        echo "\" > Modifier l'adresse </a><br>
\t\t\t\t<a href=\"#\"> Modifier le mot de passe </a>
\t\t\t</p>
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
        return array (  64 => 20,  59 => 18,  54 => 16,  49 => 14,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
