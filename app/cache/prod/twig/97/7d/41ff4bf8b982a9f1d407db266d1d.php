<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_adresse_enseignant.html.twig */
class __TwigTemplate_977d41ff4bf8b982a9f1d407db266d1d extends Twig_Template
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
<legend><h2 id=\"h2title\">Param&eacutetrage de l'adresse personnel</h2></legend>

<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<p>
\tSaisir votre adresse :</br></br>
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ensAdresse"), 'widget');
        echo " </br></br>
\t<input type=\"submit\" class=\"btn btn-primary\" />
<p>
</br>
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
        return array (  30 => 8,  24 => 5,  19 => 2,);
    }
}
