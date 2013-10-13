<?php

/* Sujet2DevSpeBundle:Sujet2View:voeux_enseignant.html.twig */
class __TwigTemplate_d2db6e5ae86a543caa1a05bd78a08014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Saisir un voeux";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig")->display($context);
        // line 11
        echo "\t<div class=\"span12\" id=\"span12interieur\">
    ";
        // line 12
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:formulaire_voeux_enseignant.html.twig")->display($context);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:voeux_enseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
