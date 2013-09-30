<?php

/* Sujet2WebBundle:Stage:formulaire.html.twig */
class __TwigTemplate_fcb22d9346b2b1522f1f4b34b4eb4c52 extends Twig_Template
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
 
<h3>Formulaire d'inscription</h3>
 

<div class=\"well\">
    <form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
         ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "Sujet2WebBundle:Stage:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 8,  19 => 2,  38 => 10,  36 => 9,  31 => 9,  28 => 5,);
    }
}
