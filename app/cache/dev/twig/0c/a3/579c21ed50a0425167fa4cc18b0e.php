<?php

/* Sujet2DevSpeBundle:Sujet2View:phase1.html.twig */
class __TwigTemplate_0ca3579c21ed50a0425167fa4cc18b0e extends Twig_Template
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
        echo " - Phase1";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig")->display($context);
        // line 11
        echo "\t<div class=\"span12\" id=\"span12intérieur\">
    ";
        // line 12
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:formulaire_phase1.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:phase1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
