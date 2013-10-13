<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_6a5d24df81c53972b70a342b8606cb5d extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,  145 => 53,  142 => 52,  136 => 19,  130 => 16,  126 => 15,  122 => 14,  118 => 13,  113 => 11,  109 => 10,  105 => 9,  100 => 8,  93 => 56,  91 => 55,  89 => 52,  81 => 47,  66 => 34,  61 => 32,  55 => 30,  51 => 29,  35 => 19,  32 => 9,  30 => 8,  22 => 2,  65 => 24,  57 => 31,  52 => 17,  46 => 27,  43 => 11,  37 => 9,  34 => 8,  31 => 6,  28 => 5,);
    }
}
