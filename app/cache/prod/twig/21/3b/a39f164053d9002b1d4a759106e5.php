<?php

/* Sujet2DevSpeBundle:Sujet2View:phase2.html.twig */
class __TwigTemplate_213ba39f164053d9002b1d4a759106e5 extends Twig_Template
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
        echo " - Phase2";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig")->display($context);
        // line 11
        echo "\t<div class=\"span12\" id=\"span12interieur\">
\t<legend><h2 id=\"h2title\">Choix des paramètres pour la session - Phase 2/5</h2></legend>
    ";
        // line 13
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:formulaire_phase2.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:phase2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
