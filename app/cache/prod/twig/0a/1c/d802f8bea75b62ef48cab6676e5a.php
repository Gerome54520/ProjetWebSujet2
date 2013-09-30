<?php

/* ::layout.html.twig */
class __TwigTemplate_0a1cd802f8bea75b62ef48cab6676e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  </head>
 
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Mon Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
          Lire le tutoriel »
        </a></p>
      </div>
 
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sdzStage_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sdzStage_ajouter");
        echo "\">Ajouter un article</a></li>
          </ul>
                    
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>The sky's the limit © 2012 and beyond.</p>
      </footer>
    </div>
 
  ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo " 
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "          ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        // line 49
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  118 => 49,  116 => 48,  113 => 47,  109 => 36,  106 => 35,  99 => 11,  96 => 10,  90 => 8,  84 => 52,  82 => 47,  70 => 37,  68 => 35,  60 => 30,  56 => 29,  38 => 13,  36 => 10,  31 => 8,  23 => 2,);
    }
}
