<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_53897a8e1dd7aef07aedef619b207683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"span12\" id=\"span12interieur\">
\t<legend color=\"dark\"><h2 id=\"h2title\">Connexion</h2></legend>
\t<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t<p>
\t\tIdentifiant :<br><br>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br><br>
\t\t
\t\tMot de passe :<br><br>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br><br>
\t\t
\t\tSe souvenir de moi :
\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /><br>
\t\t
\t\t<br><br>
\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /><br><br>
\t\t</p>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  49 => 14,  43 => 11,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
