<?php

/* ::layout.html.twig */
class __TwigTemplate_0a1cd802f8bea75b62ef48cab6676e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<!DOCTYPE HTML>

<html>

<head>
 ";
        // line 8
        $this->displayBlock('style', $context, $blocks);
        // line 14
        echo " 
   <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

<nav class=\"navbar navbar-inverse navbar-static-top\">
  <div class=\"navbar-inner\">
    <div class=\"container\">
      <ul class=\"nav\">
\t\t<li class=\"brand\">Appli voeux de stages</li>
        <li class=\"active\"> <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuil");
        echo "\" >Accueil</a> </li>
\t
\t   <li><a id=\"lienconnect\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"  >
\t   ";
        // line 26
        if (twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 27
            echo "\t   Connexion 
\t   ";
        } else {
            // line 28
            echo " 
\t   Deconnexion
\t   </a></li>
\t   ";
        }
        // line 32
        echo "\t\t
      </ul>
    </div>
  </div>
</nav>
<body>
<br>

<div class=\"row-fluid\">
    <div class=\"span12 offset1\" id=\"span12fond\">
\t\t<div class=\"span12\" id=\"span12blue\">
\t\t\t<div class=\"span6\"><p><h1>Gestion des affectations des stages aux enseignants<br></h1></p></div>
\t\t\t<div class=\"span4 offset2\" id=\"span4image\"><img src=\" ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_univ.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"></div>
\t\t</div>\t



";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "</div>
</div>
</div>
</body>
</html>";
    }

    // line 8
    public function block_style($context, array $blocks = array())
    {
        echo "  
   <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
   <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
   <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script> 
   <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>  
 ";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo " Gestion des stages - ";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "  
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
        return array (  131 => 50,  128 => 49,  122 => 15,  116 => 12,  112 => 11,  108 => 10,  104 => 9,  99 => 8,  91 => 52,  89 => 49,  81 => 44,  67 => 32,  61 => 28,  55 => 26,  51 => 25,  35 => 15,  32 => 14,  30 => 8,  22 => 2,  65 => 24,  57 => 27,  52 => 17,  46 => 23,  43 => 11,  37 => 9,  34 => 8,  31 => 6,  28 => 5,);
    }
}
