<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_adresse_enseignant.html.twig */
class __TwigTemplate_140ba331b49937d8736ce270dec89dc4 extends Twig_Template
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
        // line 1
        echo "﻿";
        // line 2
        echo "
<legend>Parametrage de l'adresse personnel</legend>

<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " </br></br>
\t
\t<input type=\"submit\" class=\"btn btn-primary\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:formulaire_adresse_enseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  26 => 5,  21 => 2,  28 => 9,  19 => 1,  45 => 12,  42 => 11,  39 => 17,  36 => 9,  29 => 5,);
    }
}
