<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modifier.html.twig */
class __TwigTemplate_223926e3aa15eeba63af10351bf59cf84c68222ef4c927dee711f1bbfb36f0b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pagetitle' => [$this, 'block_pagetitle'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "modifier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagetitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "modification d'une annonce
";
    }

    // line 5
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<form action=\"\" method=\"post\">
\t\t<input type=\"text\" name=\"titre\" id=\"titre\" placeholder=\"Titre de l'annonce\" required value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "titre", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
\t\t<input type=\"text\" name=\"categorie\" id=\"catégorie\" placeholder=\"categorie\" required value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "categorie", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
\t\t<input type=\"mail\" name=\"mail\" id=\"mail\" placeholder=\"email pour vous joindre\" required value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "mail", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
\t\t<input type=\"float\" name=\"prix\" id=\"prix\" placeholder=\"prix\" required value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "prix", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
\t\t<textarea type=\"description\" name=\"description\" id=\"description\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "\"></textarea>
\t\t<input type=\"file\" name=\"photo01\" id=\"photo01\">
\t\t<input type=\"file\" name=\"photo02\" id=\"photo01\">
\t\t<input type=\"file\" name=\"photo03\" id=\"photo01\">
\t\t<input type=\"file\" name=\"photo04\" id=\"photo01\">
\t\t<input type=\"file\" name=\"photo05\" id=\"photo0\">
\t\t<input type=\"file\" name=\"photo06\" id=\"photo06\">


\t\t<button type=\"submit\">Modifier</button>
\t\t<button type=\"reset\">Annuler</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  66 => 7,  62 => 6,  56 => 5,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modifier.html.twig", "C:\\laragon\\www\\projet4\\dev\\templates\\modifier.html.twig");
    }
}
