<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_adresse_enseignant.html.twig */
class __TwigTemplate_3d783fed5a2860b6ead4bf1f521899e6 extends Twig_Template
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
        // line 6
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
        return array (  29 => 7,  25 => 6,  19 => 2,);
    }
}
