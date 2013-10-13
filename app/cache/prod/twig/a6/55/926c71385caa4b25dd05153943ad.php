<?php

/* Sujet2DevSpeBundle:Sujet2View:visualisersession.html.twig */
class __TwigTemplate_a655926c71385caa4b25dd05153943ad extends Twig_Template
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
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voeuxs"]) ? $context["voeuxs"] : $this->getContext($context, "voeuxs")));
        foreach ($context['_seq'] as $context["_key"] => $context["voeux"]) {
            // line 11
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["voeux"]) ? $context["voeux"] : $this->getContext($context, "voeux")), "enseignant"), "ensNom"), "html", null, true);
            echo " :           <br>
\t    ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["voeux"]) ? $context["voeux"] : $this->getContext($context, "voeux")), "lots"));
            foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
                // line 13
                echo "\t\t  Dans l'entreprise ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "entreprise"), "entRs"), "html", null, true);
                echo " auprès de ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutCiv"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutNom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lot"]) ? $context["lot"] : $this->getContext($context, "lot")), "TutPrenom"), "html", null, true);
                echo "         </br>
\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voeux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

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
        return array (  77 => 16,  58 => 13,  54 => 12,  49 => 11,  45 => 10,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
