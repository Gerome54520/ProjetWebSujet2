<?php

/* Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig */
class __TwigTemplate_29b04d160bfd2018f5373f216f1f6bb0 extends Twig_Template
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
<!-- barre Gestionnaire -->

<!--<div class=\"row-fluid\">
    <div class=\"span12 offset1\" id=\"span12fond\">
\t\t<div class=\"span12\" id=\"span12blue\">
\t\t\t<div class=\"span6\"><p><h1>Gestion des affectations des stages aux enseignants<br></h1></p></div>
\t\t\t<div class=\"span4 offset2\" id=\"span4image\"><img src=\"img/logo_univ.jpg\" class=\"img-circle\"></div>
\t\t</div>-->
\t
\t\t<nav class=\"navbar navbar-inverse\" id=\"navbar\">
\t\t  <div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t  <ul class=\"nav\">
\t\t\t\t<li class=\"brand\">Gestionnaire</li>
\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Session <b class=\"caret\"></b> </a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_phase1");
        echo "\">Créer</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"#\">Visualiser</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t<li> <a href=\"#\">Validation des voeux</a> </li>
\t\t\t\t<li> <a href=\"#\">Importer CSV</a> </li>
\t\t\t\t<li> <a href=\"#\">Profil</a> </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t  </div>
\t\t</nav>
\t\t";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 19,  19 => 2,  174 => 110,  171 => 109,  165 => 14,  159 => 11,  155 => 10,  151 => 9,  146 => 8,  138 => 112,  136 => 109,  116 => 92,  35 => 14,  32 => 13,  30 => 8,  22 => 2,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
