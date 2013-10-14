<?php

/* Sujet2DevSpeBundle:Sujet2View:phase5.html.twig */
class __TwigTemplate_43d21ed5f88d5fa4cf360fb0f5e5bd18 extends Twig_Template
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
        echo " - Phase5";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuGestionnaire.html.twig")->display($context);
        // line 11
        echo "\t<div class=\"span12\" id=\"span12interieur\">
\t <legend><h2 id=\"h2title\">Recapitulatif - Phase 5/5</h2></legend>
\t      
\t\t\t <h2 id=\"h2subtitle\"> Session </h2>
\t\t\t\t<p>
\t\t\t\t  Nom de la session : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "sesLibelle"), "html", null, true);
        echo " </br>
\t\t\t\t  Date d'ouverture : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateOuv"), "html", null, true);
        echo "</br>
\t\t\t\t  Date de fermeture : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateClo"), "html", null, true);
        echo "</br>
\t\t\t\t</p>  
\t\t\t 
\t\t\t  <h2 id=\"h2subtitle\"> Parametre </h2>
\t\t\t\t<p>
\t\t\t\t  Kilometre maximun : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")), "distMax"), "html", null, true);
        echo "</br>
\t\t\t\t  Tolerance : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")), "tolerance"), "html", null, true);
        echo "</br>
\t\t\t\t</p>
\t\t\t  
\t\t\t  <h2 id=\"h2subtitle\">Liste des contraintes associé a la session </h2>
\t\t\t\t<p>
\t\t\t\t  ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contraintes"]) ? $context["contraintes"] : $this->getContext($context, "contraintes")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrainte"]) {
            // line 30
            echo "\t\t\t\t\t Contraite : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "pts"), "html", null, true);
            echo "
\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrainte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contraintes"]) ? $context["contraintes"] : $this->getContext($context, "contraintes")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrainte"]) {
            // line 33
            echo "\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 34
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "typePts"), "id") == 1)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t\t<h4> Contrainte de suivi n° ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t Nombre de points : ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "pts"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrainte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t";
        // line 40
        $context["i"] = 0;
        // line 41
        echo "\t\t\t\t\t\t
\t\t\t\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contraintes"]) ? $context["contraintes"] : $this->getContext($context, "contraintes")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrainte"]) {
            // line 43
            echo "\t\t\t\t\t\t{ set i = i + 1 %}
\t\t\t\t\t\t\t";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "typePts"), "id") == 2)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<h4> Contraite de temps n° ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t Nombre de points : ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "pts"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrainte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t<h2 id=\"h2subtitle\"> Liste des lots associe à la session </h2>
\t\t\t\t\t<p>
\t\t\t\t\t ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lots"]) ? $context["lots"] : $this->getContext($context, "lots")));
        foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
            // line 54
            echo "\t\t\t\t\t\t Entreprise : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entRs"), "html", null, true);
            echo "</br>
\t\t\t\t\t\t Tuteur : ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "tutNom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "tutPrenom"), "html", null, true);
            echo "</br>
\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t</p>
\t 
\t\t\t\t\t\t<form method=\"link\" action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("sujet2_devspeannullersession");
        echo "\"> 
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Annuler\">
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<form method=\"link\" action=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("sujet2_devspevalidersession");
        echo "\"> 
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Valider\">
\t\t\t\t\t\t</form>
\t\t   
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:phase5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  179 => 59,  175 => 57,  165 => 55,  160 => 54,  156 => 53,  150 => 49,  144 => 48,  139 => 46,  134 => 45,  132 => 44,  129 => 43,  125 => 42,  122 => 41,  120 => 40,  112 => 39,  106 => 36,  101 => 35,  98 => 34,  95 => 33,  90 => 32,  81 => 30,  77 => 29,  69 => 24,  65 => 23,  57 => 18,  53 => 17,  49 => 16,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
