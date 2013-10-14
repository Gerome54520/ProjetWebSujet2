<?php

/* Sujet2DevSpeBundle:Sujet2View:formulaire_phase3.html.twig */
class __TwigTemplate_548d08114ca762f5a215146ca6bdbda3 extends Twig_Template
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
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fo"]) ? $context["fo"] : $this->getContext($context, "fo")), 'enctype');
        echo ">
  <ul>
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEnseignants"]) ? $context["listeEnseignants"] : $this->getContext($context, "listeEnseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 10
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensNom"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ensPrenom"), "html", null, true);
            echo " </li>  \t
          ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 'widget');
            echo " </br></br>
  ";
            // line 12
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 13
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
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
        return array (  54 => 14,  48 => 13,  46 => 12,  35 => 10,  31 => 9,  26 => 7,  19 => 2,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  29 => 5,);
    }
}
