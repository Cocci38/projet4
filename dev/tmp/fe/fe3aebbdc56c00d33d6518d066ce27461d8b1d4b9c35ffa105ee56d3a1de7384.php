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

/* base.twig */
class __TwigTemplate_b9ba5adc3a8691e41055e9c1b155d8d01098ddbf02181502315e77830291fbe7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'pagetitle' => [$this, 'block_pagetitle'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'recherche' => [$this, 'block_recherche'],
            'navannonce' => [$this, 'block_navannonce'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--";
        $this->loadTemplate("base.twig", "base.twig", 1, "642794792")->display($context);
        echo "-->
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "\t\t<title>
\t\t\t";
        // line 12
        $this->displayBlock('pagetitle', $context, $blocks);
        // line 14
        echo "\t\t</title>
\t\t

\t</head>
\t<body>
\t\t";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "\t\t";
        $this->displayBlock('navbar', $context, $blocks);
        // line 21
        echo "\t\t";
        $this->displayBlock('recherche', $context, $blocks);
        // line 22
        echo "\t\t";
        $this->displayBlock('navannonce', $context, $blocks);
        // line 23
        echo "\t</body>
</html>

";
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t\t";
    }

    // line 12
    public function block_pagetitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t\t\t";
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_recherche($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_navannonce($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 22,  115 => 21,  109 => 20,  103 => 19,  99 => 13,  95 => 12,  90 => 9,  86 => 8,  79 => 23,  76 => 22,  73 => 21,  70 => 20,  68 => 19,  61 => 14,  59 => 12,  56 => 11,  54 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "C:\\laragon\\www\\projet4\\dev\\templates\\base.twig");
    }
}


/* base.twig */
class __TwigTemplate_b9ba5adc3a8691e41055e9c1b155d8d01098ddbf02181502315e77830291fbe7___642794792 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "header.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("header.twig", "base.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 1,  121 => 22,  115 => 21,  109 => 20,  103 => 19,  99 => 13,  95 => 12,  90 => 9,  86 => 8,  79 => 23,  76 => 22,  73 => 21,  70 => 20,  68 => 19,  61 => 14,  59 => 12,  56 => 11,  54 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "C:\\laragon\\www\\projet4\\dev\\templates\\base.twig");
    }
}
