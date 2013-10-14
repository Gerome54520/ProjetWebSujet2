<?php

/* Sujet2DevSpeBundle:Sujet2View:upload.html.twig */
class __TwigTemplate_93183f9945abd7fa9193b8186d4c4530 extends Twig_Template
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
<h1>Upload File</h1>

<form action=\"#\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
   Choisir le type de fichier :
   ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo " </br>
   Fichier : ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "</br>

    <input type=\"submit\" value=\"Upload Document\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "Sujet2DevSpeBundle:Sujet2View:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 14,  47 => 12,  42 => 9,  40 => 8,  35 => 7,  29 => 5,);
    }
}
