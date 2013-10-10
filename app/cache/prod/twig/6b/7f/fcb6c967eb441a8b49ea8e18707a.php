<?php

/* Sujet2DevSpeBundle:Sujet2View:profilenseignant.html.twig */
class __TwigTemplate_6b7ffcb6c967eb441a8b49ea8e18707a extends Twig_Template
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
\t\t\t<ul>
\t\t\tNom :
            <li>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensNom"), "html", null, true);
        echo "</li>
\t\t\tPrénom :
\t\t\t<li>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensPrenom"), "html", null, true);
        echo "</li>
\t\t\tAdresse : 
\t\t\t<li>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensAdresse"), "html", null, true);
        echo "</li>
\t\t\t </ul>
<<<<<<< HEAD
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_adresseenseignant");
        echo "\" > Modifier l'adresse </a>
=======
\t\t\t<a href=\"#\" > Modifier l'adresse </a>
>>>>>>> 22e32ae7071b7448e2d74c5bc1567e7cad628a73
\t\t\t<a href=\"#\"> Modifier le mot de passe </a>
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
<<<<<<< HEAD
        return array (  65 => 20,  60 => 18,  55 => 16,  50 => 14,  45 => 11,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
=======
        return array (  60 => 18,  55 => 16,  50 => 14,  45 => 11,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
>>>>>>> 22e32ae7071b7448e2d74c5bc1567e7cad628a73
    }
}
