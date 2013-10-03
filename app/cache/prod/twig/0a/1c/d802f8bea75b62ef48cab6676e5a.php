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
      </div>
 
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
              <a href='#' >Accueil</a>
\t\t\t  <a href='#' >Contact</a>
\t\t\t  <a href='#' >Plan du site</a>
          </ul>
                    
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>The sky's the limit © 2012 and beyond.</p>
      </footer>
    </div>
 
  ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
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

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "          ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        // line 46
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  109 => 46,  107 => 45,  104 => 44,  100 => 33,  97 => 32,  90 => 11,  87 => 10,  81 => 8,  75 => 49,  73 => 44,  61 => 34,  59 => 32,  38 => 13,  36 => 10,  31 => 8,  23 => 2,);
    }
}
