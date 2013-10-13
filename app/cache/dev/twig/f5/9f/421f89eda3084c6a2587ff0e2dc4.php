<?php

/* Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig */
class __TwigTemplate_f59f421f89eda3084c6a2587ff0e2dc4 extends Twig_Template
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

        
\t\t<nav class=\"navbar navbar-inverse\">
\t\t  <div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t  <ul class=\"nav\">
\t\t\t\t<li class=\"brand\" id=\"brandsousmenu\"><a class=\"dropdown-toogle\" data-toggle=\"dropdown\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuilenseignant");
        echo "\" >Enseignant</a></li>
\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Voeux <b class=\"caret\"></b> </a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_etatvoeuxenseignant");
        echo "\">Etat des voeux</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_voeuxenseignant");
        echo "\">Faire un voeux</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t<li> <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_profilenseignant");
        echo "\">Profil</a> </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t  </div>
\t\t</nav> 
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 14,  34 => 12,  28 => 9,  19 => 2,  140 => 52,  137 => 51,  131 => 17,  125 => 14,  121 => 13,  117 => 12,  113 => 11,  109 => 10,  105 => 9,  100 => 8,  93 => 55,  91 => 54,  89 => 51,  81 => 46,  66 => 33,  61 => 30,  57 => 29,  55 => 28,  51 => 27,  46 => 25,  32 => 16,  30 => 8,  22 => 2,  42 => 9,  40 => 8,  35 => 17,  29 => 5,);
    }
}
