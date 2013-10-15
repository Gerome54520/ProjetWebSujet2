<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase4.html.twig */
class __TwigTemplate_6e79e7663a4eeaff68a7ffd4c98fd183 extends Twig_Template
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

<form method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lots"), 'widget');
        echo " </br></br>
    <input type=\"submit\" class=\"btn btn-primary\" />
</form>
 
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:formulaire_phase4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  23 => 4,  50 => 19,  34 => 12,  28 => 9,  19 => 2,  163 => 57,  160 => 56,  154 => 19,  148 => 16,  144 => 15,  140 => 14,  136 => 13,  131 => 11,  127 => 10,  123 => 9,  118 => 8,  111 => 60,  109 => 59,  107 => 56,  99 => 51,  85 => 39,  80 => 38,  77 => 37,  71 => 36,  69 => 35,  66 => 34,  60 => 32,  54 => 30,  48 => 28,  46 => 18,  35 => 19,  32 => 18,  30 => 8,  22 => 2,  47 => 12,  42 => 9,  39 => 14,  36 => 7,  29 => 5,);
    }
}
