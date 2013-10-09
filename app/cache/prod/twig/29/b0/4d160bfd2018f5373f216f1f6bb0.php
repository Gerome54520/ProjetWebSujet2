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
\t\t<nav class=\"navbar navbar-inverse\" id=\"navbar\">
\t\t  <div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t  <ul class=\"nav\">
\t\t\t\t<li class=\"brand\"><a class=\"dropdown-toogle\" data-toggle=\"dropdown\" href=\"";
<<<<<<< HEAD
        // line 7
=======
        // line 16
>>>>>>> de579f47cca4e8553f8852583bd7b16b0c1676ac
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuilgestionnaire");
        echo "\" >Gestionnaire</a></li>
\t\t\t\t<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Session <b class=\"caret\"></b> </a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"";
        // line 10
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
<<<<<<< HEAD
        return array (  32 => 10,  26 => 7,  19 => 2,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
=======
        return array (  41 => 19,  19 => 2,  42 => 9,  40 => 8,  35 => 16,  29 => 5,);
>>>>>>> de579f47cca4e8553f8852583bd7b16b0c1676ac
    }
}
