<?php

/* Sujet2DevSpeBundle:Sujet2View:etatdesvoeux.html.twig */
class __TwigTemplate_9f84d8ba50fc43e27eab8b62eb3dbaea extends Twig_Template
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
        echo " - Etat des voeux";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->env->loadTemplate("Sujet2DevSpeBundle:Sujet2View:MenuEnseignant.html.twig")->display($context);
        // line 11
        echo "\t<div class=\"span12\" id=\"span12interieur\">
\t<legend><h2 id=\"h2title\">Etat des voeux</h2></legend>
\t<br><p>
\tVous suivez les stages :<br><br>
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["voeux"]) ? $context["voeux"] : $this->getContext($context, "voeux")), "lots"));
        foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
            // line 16
            echo "    - Dans l'entreprise ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entRs"), "html", null, true);
            echo " aupr&egraves de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutCiv"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutNom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutPrenom"), "html", null, true);
            echo ".         </br></br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</p>
";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:etatdesvoeux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  52 => 16,  48 => 15,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
