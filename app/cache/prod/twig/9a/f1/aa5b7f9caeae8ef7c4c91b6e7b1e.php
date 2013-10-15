<?php

/* Sujet2DevSpeBundle:Sujet2View:profilenseignant.html.twig */
class __TwigTemplate_9af1aa5b7f9caeae8ef7c4c91b6e7b1e extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig")->display($context);
        } else {
            // line 11
            $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig")->display($context);
        }
        // line 13
        echo "
<div class=\"span12\" id=\"span12interieur\">
\t\t\t<legend><h2 id=\"h2title\">Profil</h2></legend>
\t\t\t<p>
\t\t\t\tNom : 
\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensNom"), "html", null, true);
        echo " <br>
\t\t\t\tPrénom : 
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensPrenom"), "html", null, true);
        echo " <br>\t\t\t\t             \t
\t\t\t\t";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t Adresse : 
\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensAdresse"), "html", null, true);
            echo " <br><br>
\t\t\t\t<a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("sujet2devspe_adresseenseignant");
            echo "\" > Modifier l'adresse </a><br>
                ";
        }
        // line 27
        echo "\t\t\t\t<br>
\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\"> Modifier le mot de passe </a>
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
        return array (  84 => 28,  81 => 27,  76 => 25,  72 => 24,  69 => 23,  66 => 22,  64 => 21,  60 => 20,  55 => 18,  48 => 13,  45 => 11,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
