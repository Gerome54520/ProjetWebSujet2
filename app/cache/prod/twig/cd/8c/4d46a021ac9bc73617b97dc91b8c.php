<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase3.html.twig */
class __TwigTemplate_cd8c4d46a021ac9bc73617b97dc91b8c extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fo"]) ? $context["fo"] : $this->getContext($context, "fo")), 'enctype');
        echo ">
\t  <ul>
\t  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEnseignants"]) ? $context["listeEnseignants"] : $this->getContext($context, "listeEnseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 7
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensNom"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensPrenom"), "html", null, true);
            echo " </li>  \t
\t\t\t  ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "nbSuivi"), 'widget');
            echo " </br></br>
\t  ";
            // line 9
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 10
            echo "\t  <legend></legend>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>
\t<input type=\"submit\" class=\"btn btn-primary\" />
</form>

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
        return array (  52 => 12,  45 => 10,  43 => 9,  39 => 8,  32 => 7,  28 => 6,  23 => 4,  19 => 2,);
    }
}
