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
        // line 13
        echo " 
   <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   
</head>

<style>

body {
    margin: 0px;
    background: #555555;
\tmargin-bottom: 20px;
}

[class*=\"span\"] {
\t background-color: white;
\t margin-bottom: 0px;
\t margin-left: 5px;
\t border-radius: 5px 5px 5px 5px;
\t line-height: 18px;
}

.span12 {
   background-color: white;
   margin: 0px;
   padding: 0px;
}

#span12blue {
   background-color: rgb(0,69,117);
   padding: 7px;
}

#span12fond {
\tbox-shadow: 6px 6px 6px #222222;
\tborder:solid 10px white;
}

#span12intérieur {
\tbackground-color: rgb(202,196,255);
\tmargin: 0px;
\tmargin-bottom: 0px;
\tmargin-top: 20px;
}

.span6 {
\tbackground-color: rgb(0,69,117);
}

#span4image {
\tbackground-color: rgb(0,69,117);
}

#navbar {
\tmargin-bottom: 0px;
}

p {
\tmargin: 10px;
}

h1 {
\tmargin: 10px;
\tcolor: white;
}

.row-fluid {
\twidth: 85%;
}

.formconnect {
    text-align: center;
}

.well {
 background-color: rgb(202,196,255);
 margin : 0px;
}

</style>

<nav class=\"navbar navbar-inverse navbar-static-top\">
  <div class=\"navbar-inner\">
    <div class=\"container\">
      <ul class=\"nav\">
\t\t<li class=\"brand\">Appli voeux de stages</li>
        <li class=\"active\"> <a href=\"#\">Accueil</a> </li>
        <li> <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Connexion</a> </li>
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
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_univ.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"></div>
\t\t</div>\t



";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 119
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
   <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script> 
   <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>  
 ";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo " Gestion des stages - ";
    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        // line 117
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
        return array (  184 => 117,  181 => 116,  175 => 14,  169 => 11,  165 => 10,  161 => 9,  156 => 8,  148 => 119,  146 => 116,  138 => 111,  123 => 99,  35 => 14,  32 => 13,  30 => 8,  22 => 2,);
    }
}
