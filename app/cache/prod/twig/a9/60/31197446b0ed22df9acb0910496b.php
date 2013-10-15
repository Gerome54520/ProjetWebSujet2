<?php

/* Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig */
class __TwigTemplate_a96031197446b0ed22df9acb0910496b extends Twig_Template
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
\t\t<nav class=\"navbar navbar-inverse\" id=\"navsousmenu\">
\t\t  <div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t  <ul class=\"nav\">
\t\t\t\t<li class=\"brand\" id=\"brandsousmenu\"><a class=\"dropdown-toogle\" data-toggle=\"dropdown\" href=\"";
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
\t\t\t\t<li> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_profilgestionnaire");
        echo "\">Profil</a> </li>
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
        return array (  50 => 19,  34 => 12,  28 => 9,  19 => 2,  163 => 57,  160 => 56,  154 => 19,  148 => 16,  144 => 15,  140 => 14,  136 => 13,  131 => 11,  127 => 10,  123 => 9,  118 => 8,  111 => 60,  109 => 59,  107 => 56,  99 => 51,  85 => 39,  80 => 38,  77 => 37,  71 => 36,  69 => 35,  66 => 34,  60 => 32,  54 => 30,  48 => 28,  46 => 18,  35 => 19,  32 => 18,  30 => 8,  22 => 2,  47 => 12,  42 => 9,  39 => 14,  36 => 7,  29 => 5,);
    }
}
