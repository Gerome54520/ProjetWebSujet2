<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase3.html.twig */
class __TwigTemplate_db9f1707a10e5b89a29ece0926aae790 extends Twig_Template
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

 <div class=\"well\">

<legend>Choix des quotas - Phase 3/5</legend> 


  <form method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " </br></br>
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:formulaire_phase3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 10,  28 => 9,  19 => 2,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
