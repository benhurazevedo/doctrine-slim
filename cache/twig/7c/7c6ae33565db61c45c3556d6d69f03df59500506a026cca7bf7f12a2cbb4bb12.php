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

/* inserirnovotelefone.html */
class __TwigTemplate_f2cda308b3f0c75f3ffcea6f53ba4b2cbba2ac126b7b0ad53873d15b27106070 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("share/layout.html", "inserirnovotelefone.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1>Inserir telefone</h1>
<form method=\"post\" action=\"\\inserirnovotelefone\">
\t<label for=\"nome\">Nome</label>
\t<input type=\"text\" name=\"nome\" id=\"nome\"><br>
\t<label for=\"telefone\">Telefone</label>
\t<input type=\"text\" name=\"telefone\" id=\"telefone\"><br>
\t<input type=\"reset\" value=\"limpar\">
\t<input type=\"submit\" value=\"enviar\">
</form>
<p><a href=\"\\listatelefonica\">Voltar</a></p>
";
    }

    public function getTemplateName()
    {
        return "inserirnovotelefone.html";
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
<h1>Inserir telefone</h1>
<form method=\"post\" action=\"\\inserirnovotelefone\">
\t<label for=\"nome\">Nome</label>
\t<input type=\"text\" name=\"nome\" id=\"nome\"><br>
\t<label for=\"telefone\">Telefone</label>
\t<input type=\"text\" name=\"telefone\" id=\"telefone\"><br>
\t<input type=\"reset\" value=\"limpar\">
\t<input type=\"submit\" value=\"enviar\">
</form>
<p><a href=\"\\listatelefonica\">Voltar</a></p>
{% endblock %}
\t", "inserirnovotelefone.html", "C:\\Users\\benhu\\OneDrive\\Área de Trabalho\\doctrine_slim\\views\\inserirnovotelefone.html");
    }
}
