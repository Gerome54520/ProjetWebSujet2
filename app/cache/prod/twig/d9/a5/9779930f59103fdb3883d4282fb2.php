<?php

/* Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig */
class __TwigTemplate_d9a59779930f59103fdb3883d4282fb2 extends Twig_Template
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
        return array (  45 => 17,  39 => 14,  34 => 12,  28 => 9,  19 => 2,  69 => 22,  65 => 21,  60 => 19,  55 => 17,  50 => 15,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
