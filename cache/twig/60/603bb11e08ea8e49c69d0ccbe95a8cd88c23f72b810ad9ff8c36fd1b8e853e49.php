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

/* share/layout.html */
class __TwigTemplate_d87fc9e661e6099bea0ba8c45afd10c80174909969962e2ecb3eda66d7ff0b87 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"pt-br\">

\t<head>
\t  <meta charset=\"utf-8\">
\t  <title>Lista telefônica</title>
\t  <meta name=\"description\" content=\"\">
\t  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t  ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "\t</head>

\t<body>
\t";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 18
        echo "\t</body>
</html>";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t  ";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t";
    }

    // line 16
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t";
    }

    public function getTemplateName()
    {
        return "share/layout.html";
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 10,  67 => 9,  62 => 18,  59 => 16,  57 => 14,  52 => 11,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"pt-br\">

\t<head>
\t  <meta charset=\"utf-8\">
\t  <title>Lista telefônica</title>
\t  <meta name=\"description\" content=\"\">
\t  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t  {% block head %}
\t  {% endblock %}
\t</head>

\t<body>
\t{% block content %}
\t{% endblock %}
\t{% block footer %}
\t{% endblock %}
\t</body>
</html>", "share/layout.html", "C:\\Users\\benhu\\OneDrive\\Área de Trabalho\\doctrine_slim\\views\\share\\layout.html");
    }
}
