<?php

/* Sujet2WebBundle::layout.html.twig */
class __TwigTemplate_41367354ff6ac95fd2699186c585be84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
 
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo " 
  </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "SdzBlog";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Sujet2WebBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  49 => 11,  43 => 7,  37 => 13,  35 => 11,  28 => 7,  21 => 2,  39 => 8,  36 => 7,  29 => 5,);
    }
}
