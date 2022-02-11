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

/* mail-add-update.html.twig */
class __TwigTemplate_b630eafa96caedcaae9c02fc1962da7afdb1ea8b99c653bb5f57a28d02cace06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<mjml>
\t<mj-head>
\t\t<mj-attributes>
\t\t\t<mj-all padding=\"0px\"></mj-all>
\t\t\t<mj-text font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding=\"0 25px\" font-size=\"13px\"></mj-text>
\t\t\t<mj-section background-color=\"#ffffff\"></mj-section>
\t\t\t<mj-class name=\"preheader\" color=\"#000000\" font-size=\"11px\"></mj-class>
\t\t</mj-attributes>
\t\t<mj-style inline=\"inline\">a { text-decoration: none!important; color: inherit!important; }</mj-style>
\t</mj-head>
\t<mj-body background-color=\"#bedae6\">
\t\t<mj-section>
\t\t\t<mj-column width=\"100%\">
\t\t\t\t<mj-image src=\"http://go.mailjet.com/tplimg/mtrq/b/ox8s/mg1q9.png\" alt=\"header image\" padding=\"0px\"></mj-image>
\t\t\t</mj-column>
\t\t</mj-section>
\t\t<mj-section padding-bottom=\"20px\" padding-top=\"10px\">
\t\t\t<mj-column>
\t\t\t\t<mj-text align=\"center\" padding=\"10px 25px\" font-size=\"20px\" color=\"#512d0b\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "titre", [], "any", false, false, false, 21), "html", null, true);
        echo "!</strong>
\t\t\t\t</mj-text>
\t\t\t\t<mj-text align=\"center\" font-size=\"18px\" font-family=\"Arial\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "<br/>
\t\t\t\t\tThen why not share it with your friends?</mj-text>
\t\t\t\t<mj-text align=\"center\" color=\"#489BDA\" font-size=\"25px\" font-family=\"Arial, sans-serif\" font-weight=\"bold\" line-height=\"35px\" padding-top=\"20px\">
\t\t\t\t\t<br/>
\t\t\t\t\t<span style=\"font-size:18px\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "categorie", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
\t\t\t\t</mj-text>
\t\t\t\t<mj-button background-color=\"#8bb420\" color=\"#FFFFFF\" href=\"https://mjml.io\" font-family=\"Arial, sans-serif\" padding=\"20px 0 0 0\" font-weight=\"bold\" font-size=\"16px\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "prix", [], "any", false, false, false, 29), "html", null, true);
        echo "</mj-button>
\t\t\t\t<mj-text align=\"center\" color=\"#000000\" font-size=\"14px\" font-family=\"Arial, sans-serif\" padding-top=\"40px\">Best,
\t\t\t\t\t<br/>
\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "mail", [], "any", false, false, false, 32), "html", null, true);
        echo "
\t\t\t\t\t<mj-link href=\"http://localhost/projet4/dev/?id=";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "&etat=confirmation\">confirmer la creation</mj-link>
\t\t\t\t\t<mj-link href=\"http://localhost/projet4/dev/?id=";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "&etat=modification\">modifier l'annonce</mj-link>
\t\t\t\t\t<p></p>
\t\t\t\t</mj-text>
\t\t\t</mj-column>
\t\t</mj-section>
\t</mj-body>
</mjml>

";
    }

    public function getTemplateName()
    {
        return "mail-add-update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  86 => 33,  82 => 32,  76 => 29,  71 => 27,  64 => 23,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail-add-update.html.twig", "C:\\laragon\\www\\projet4\\dev\\templates\\mail-add-update.html.twig");
    }
}
