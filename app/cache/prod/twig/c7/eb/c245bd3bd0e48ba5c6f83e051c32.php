<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c7ebc245bd3bd0e48ba5c6f83e051c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 10
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
  ";
        // line 17
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo " 
";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  60 => 19,  57 => 17,  54 => 15,  45 => 12,  40 => 11,  35 => 10,  32 => 8,  29 => 7,  68 => 18,  62 => 24,  50 => 15,  44 => 12,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
