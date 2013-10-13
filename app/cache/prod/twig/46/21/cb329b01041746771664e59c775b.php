<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_voeux_enseignant.html.twig */
class __TwigTemplate_4621cb329b01041746771664e59c775b extends Twig_Template
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
<legend><h2 id=\"h2title\">Saisir un voeux</h2></legend>

<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " </br></br>

\t<input type=\"submit\" class=\"btn btn-primary\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:formulaire_voeux_enseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  24 => 5,  19 => 2,  47 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
