<?php

/* Sujet2DevSpeBundle:Sujet2View:visualisersession.html.twig */
class __TwigTemplate_2d43681823d8d8f70de7a7e190698a12 extends Twig_Template
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
        echo " Profil ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        echo " 
";
        // line 8
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig")->display($context);
        // line 9
        echo "
<div class=\"span12\" id=\"span12interieur\">
\t<legend><h2 id=\"h2title\">Etat de la session</h2></legend>
\t<p>
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voeuxs"]) ? $context["voeuxs"] : $this->getContext($context, "voeuxs")));
        foreach ($context['_seq'] as $context["_key"] => $context["voeux"]) {
            // line 14
            echo "\t\t\t  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["voeux"]) ? $context["voeux"] : $this->getContext($context, "voeux")), "enseignant"), "ensNom"), "html", null, true);
            echo " :           <br><br>
\t\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["voeux"]) ? $context["voeux"] : $this->getContext($context, "voeux")), "lots"));
            foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
                // line 16
                echo "\t\t\t\t  </br>
\t\t\t\t  Entreprise : ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entRs"), "html", null, true);
                echo " <br>
\t\t\t\t  Adresse : ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entAdr"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entCp"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entVille"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entPays"), "html", null, true);
                echo "<br>
\t\t\t\t  T&eacutel&eacutephone : ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entTel"), "html", null, true);
                echo " <br>
\t\t\t\t  Tuteur : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutCiv"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutNom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutPrenom"), "html", null, true);
                echo " </br></br>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t<br><legend></legend>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voeux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</p>

";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:visualisersession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  94 => 22,  82 => 20,  78 => 19,  68 => 18,  64 => 17,  61 => 16,  57 => 15,  52 => 14,  48 => 13,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
