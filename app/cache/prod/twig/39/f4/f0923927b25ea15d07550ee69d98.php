<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig */
class __TwigTemplate_39f4f0923927b25ea15d07550ee69d98 extends Twig_Template
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
";
        // line 5
        echo " 
<h3>Choix des paramètres pour la session</h3>
 

<div class=\"well\">
  <form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
  
   Nom de la session : ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sesLibelle"), 'widget');
        echo " </br>
   Date Ouverture : ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOuv"), 'widget');
        echo "
   Date Fermeture : ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateClo"), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Suivant\" />
  </form>
</div>\t";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  34 => 12,  29 => 10,  22 => 5,  19 => 2,  112 => 47,  109 => 46,  107 => 45,  104 => 44,  100 => 33,  97 => 32,  90 => 11,  87 => 10,  81 => 8,  75 => 49,  73 => 44,  61 => 34,  59 => 32,  38 => 13,  36 => 10,  31 => 8,  23 => 2,);
    }
}
