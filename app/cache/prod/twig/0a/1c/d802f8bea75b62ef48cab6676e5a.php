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
        // line 18
        echo " 
   <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

<nav class=\"navbar navbar-inverse navbar-static-top\">
  <div class=\"navbar-inner\">
    <div class=\"container\">
      <ul class=\"nav\">
\t\t<li class=\"brand\">Appli voeux de stages</li>
        <li class=\"active\"> <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuil");
        echo "\" >Accueil</a> </li>
\t
\t   <li><a id=\"lienconnect\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"  >
\t ";
        // line 30
        if (twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 31
            echo "\t   Connexion 
\t   ";
        } else {
            // line 32
            echo " 
\t   Deconnexion   
\t   ";
        }
        // line 34
        echo " 
\t\t</a></li>

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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_univ.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"></div>
\t\t</div>\t



";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "\t\t";
        // line 57
        echo "\t</div>
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
   <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
   
   <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script> 
   <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>  
   <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" ></script>  
   <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("less/datepicker.less"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/less\">
 ";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo " Gestion des stages - ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "\t\t\t\t\t\t
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
<<<<<<< HEAD
        return array (  146 => 54,  143 => 53,  137 => 19,  131 => 16,  127 => 15,  123 => 14,  119 => 13,  114 => 11,  110 => 10,  106 => 9,  101 => 8,  94 => 57,  92 => 56,  90 => 53,  82 => 48,  66 => 34,  61 => 32,  57 => 31,  55 => 30,  46 => 27,  32 => 18,  30 => 8,  22 => 2,  51 => 29,  47 => 12,  42 => 9,  40 => 8,  35 => 19,  29 => 5,);
=======
        return array (  146 => 54,  143 => 53,  137 => 19,  131 => 16,  127 => 15,  123 => 14,  119 => 13,  114 => 11,  110 => 10,  106 => 9,  101 => 8,  94 => 57,  92 => 56,  90 => 53,  82 => 48,  66 => 34,  61 => 32,  57 => 31,  55 => 30,  51 => 29,  46 => 27,  35 => 19,  32 => 18,  30 => 8,  22 => 2,);
>>>>>>> 39153aa81a69b5cfddb33c90bc1dc53cc81bf1c5
    }
}
