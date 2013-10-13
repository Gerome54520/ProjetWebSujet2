<?php

/* Sujet2DevSpeBundle:Sujet2View:phase5.html.twig */
class __TwigTemplate_527b752127306008f09512299df5f311 extends Twig_Template
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
        echo "\t<div class=\"span12\" id=\"span12intérieur\">
\t <legend> Recapitulatif </legend>
\t      <h3> Session </h3>
\t\t  id de la session : ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["idsession"]) ? $context["idsession"] : $this->getContext($context, "idsession")), "html", null, true);
        echo "
          Nom de la session : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "sesLibelle"), "html", null, true);
        echo " </br>
\t\t  Date d'ouverture : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateOuv"), "html", null, true);
        echo "</br>
\t\t  Date de fermeture : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateClo"), "html", null, true);
        echo "</br>
\t\t  
\t\t  <h3> Parametre </h3>
\t\t  Kilometre maximun : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")), "distMax"), "html", null, true);
        echo "</br>
\t\t  Tolerance : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")), "tolerance"), "html", null, true);
        echo "</br>
\t\t  
\t\t  <h3>Liste des contraintes associé a la session </h3>
\t\t      ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contraintes"]) ? $context["contraintes"] : $this->getContext($context, "contraintes")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrainte"]) {
            // line 25
            echo "\t\t\t     Contraite : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "pts"), "html", null, true);
            echo "
\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrainte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contraintes"]) ? $context["contraintes"] : $this->getContext($context, "contraintes")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrainte"]) {
            // line 28
            echo "\t\t\t\t    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 29
            echo "\t\t\t\t\t    ";
            if (($this->getAttribute($this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "typePts"), "id") == 1)) {
                // line 30
                echo "\t\t\t\t\t\t        <h4> Contrainte de suivi n° ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t             Nombre de points : ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "pts"), "html", null, true);
                echo "
\t\t\t\t\t\t             
\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrainte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t    ";
        // line 35
        $context["i"] = 0;
        // line 36
        echo "\t\t\t\t\t
\t\t\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contraintes"]) ? $context["contraintes"] : $this->getContext($context, "contraintes")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrainte"]) {
            // line 38
            echo "\t\t\t\t    { set i = i + 1 %}
\t\t\t\t        ";
            // line 39
            if (($this->getAttribute($this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "typePts"), "id") == 2)) {
                // line 40
                echo "\t\t\t\t\t            <h4> Contraite de temps n° ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t             Nombre de points : ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contrainte"]) ? $context["contrainte"] : $this->getContext($context, "contrainte")), "pts"), "html", null, true);
                echo "
\t\t\t\t\t    ";
            }
            // line 43
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrainte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t<h3> Liste des lots associe à la session </h3>
\t\t\t\t ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lots"]) ? $context["lots"] : $this->getContext($context, "lots")));
        foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
            // line 46
            echo "\t\t\t\t     Entreprise : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entRs"), "html", null, true);
            echo "</br>
 \t\t\t\t\t Tuteur : ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "tutNom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "tutPrenom"), "html", null, true);
            echo "</br>
\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t 
<form method=\"link\" action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("sujet2_devspeannullersession");
        echo "\"> 
        <input type=\"submit\" value=\"Annuler\">
</form>

<form method=\"link\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("sujet2_devspevalidersession");
        echo "\"> 
        <input type=\"submit\" value=\"Valider\">
</form>
 
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
        return array (  180 => 54,  173 => 50,  170 => 49,  160 => 47,  155 => 46,  151 => 45,  142 => 43,  137 => 41,  132 => 40,  130 => 39,  127 => 38,  123 => 37,  120 => 36,  118 => 35,  110 => 34,  104 => 31,  99 => 30,  96 => 29,  93 => 28,  88 => 27,  79 => 25,  75 => 24,  69 => 21,  65 => 20,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
