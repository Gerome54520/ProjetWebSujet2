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

\t
\t\t<nav class=\"navbar navbar-inverse\" id=\"navbar\">
\t\t  <div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t  <ul class=\"nav\">
\t\t\t\t<li class=\"brand\"><a class=\"dropdown-toogle\" data-toggle=\"dropdown\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuilgestionnaire");
        echo "\" >Gestionnaire</a></li>
\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Session <b class=\"caret\"></b> </a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_phase1");
        echo "\">Créer</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_visualisersession");
        echo "\">Visualiser</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t<li> <a href=\"#\">Validation des voeux</a> </li>
\t\t\t\t<li> <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sujet2devpspe_uploadcsv");
        echo "\">Importer CSV</a> </li>
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
        return array (  39 => 14,  34 => 12,  28 => 9,  19 => 2,  146 => 54,  143 => 53,  137 => 19,  131 => 16,  127 => 15,  123 => 14,  119 => 13,  114 => 11,  110 => 10,  106 => 9,  101 => 8,  94 => 57,  92 => 56,  90 => 53,  82 => 48,  66 => 34,  61 => 32,  57 => 31,  55 => 30,  46 => 18,  32 => 18,  30 => 8,  22 => 2,  51 => 29,  47 => 12,  42 => 9,  40 => 8,  35 => 19,  29 => 5,);
    }
}
