<?php

/* ::layout.html.twig */
class __TwigTemplate_896418a375e0963f02bc551c6f99d721 extends Twig_Template
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
\t\t
     ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuilgestionnaire");
            echo "\">Accueil</a></li>
     ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 31
            echo "\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuilenseignant");
            echo "\">Accueil</a></li>
\t ";
        } else {
            // line 33
            echo "\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sujet2devspe_acceuil");
            echo "\">Acceuil</a></li>
\t ";
        }
        // line 35
        echo "
\t ";
        // line 36
        if (twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 37
            echo "\t  <li><a id=\"lienconnect\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" > Connexion</a></li> 
\t   ";
        } else {
            // line 38
            echo " 
\t   <li><a id=\"lienconnect\" href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" > Deconnexion</a></li>  
\t   ";
        }
        // line 40
        echo " 
\t\t
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
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_univ.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"></div>
\t\t</div>\t



";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "\t\t";
        // line 62
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

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
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
        return array (  165 => 59,  162 => 58,  156 => 19,  150 => 16,  146 => 15,  142 => 14,  138 => 13,  133 => 11,  129 => 10,  125 => 9,  120 => 8,  113 => 62,  111 => 61,  109 => 58,  101 => 53,  86 => 40,  81 => 39,  78 => 38,  72 => 37,  70 => 36,  67 => 35,  61 => 33,  55 => 31,  49 => 29,  47 => 28,  35 => 19,  32 => 18,  30 => 8,  22 => 2,);
    }
}
