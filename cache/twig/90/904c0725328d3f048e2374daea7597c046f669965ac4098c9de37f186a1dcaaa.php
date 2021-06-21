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

/* telefonegravado.html */
class __TwigTemplate_bece3fecfd20fa7299b8c4c34c399ef6ef8f3ba3c867f3b8b08111b310e1bfd8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "share/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("share/layout.html", "telefonegravado.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1>Telefone incluído com sucesso!</h1>
<a href=\"\\listatelefonica\">Voltar para a lista</a>
";
    }

    public function getTemplateName()
    {
        return "telefonegravado.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"share/layout.html\" %}
{% block content %}
<h1>Telefone incluído com sucesso!</h1>
<a href=\"\\listatelefonica\">Voltar para a lista</a>
{% endblock %}
\t", "telefonegravado.html", "C:\\Users\\benhu\\OneDrive\\Área de Trabalho\\doctrine_slim\\views\\telefonegravado.html");
    }
}
