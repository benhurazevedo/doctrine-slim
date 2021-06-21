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

/* apagartelefone.html */
class __TwigTemplate_f76138f92d4720510faa690c095cbf807ba6fda1877a95a80cfeb6823ec09546 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("share/layout.html", "apagartelefone.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1>Deseja apagar esse telefone?</h1>
<dl>
\t<dt>Id</dt>
\t<dd>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["telefone"] ?? null), "getId", [], "method", false, false, false, 6), "html", null, true);
        echo "</dd>
\t<dt>Nome</dt>
\t<dd>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["telefone"] ?? null), "getNome", [], "method", false, false, false, 8), "html", null, true);
        echo "</dd>
\t<dt>Telefone</dt>
\t<dd>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["telefone"] ?? null), "getTelefone", [], "method", false, false, false, 10), "html", null, true);
        echo "</dd>
</dl>
<form method=\"post\" action=\"\\apagartelefone\">
\t<a href=\"\\listatelefonica\"><button type=\"button\">Não</button></a>
\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["telefone"] ?? null), "getId", [], "method", false, false, false, 14), "html", null, true);
        echo "\">
\t<input type=\"submit\" value=\"Sim\">
</form>
";
    }

    public function getTemplateName()
    {
        return "apagartelefone.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  65 => 10,  60 => 8,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"share/layout.html\" %}
{% block content %}
<h1>Deseja apagar esse telefone?</h1>
<dl>
\t<dt>Id</dt>
\t<dd>{{ telefone.getId() }}</dd>
\t<dt>Nome</dt>
\t<dd>{{ telefone.getNome() }}</dd>
\t<dt>Telefone</dt>
\t<dd>{{ telefone.getTelefone() }}</dd>
</dl>
<form method=\"post\" action=\"\\apagartelefone\">
\t<a href=\"\\listatelefonica\"><button type=\"button\">Não</button></a>
\t<input type=\"hidden\" name=\"id\" value=\"{{ telefone.getId() }}\">
\t<input type=\"submit\" value=\"Sim\">
</form>
{% endblock %}
\t", "apagartelefone.html", "C:\\Users\\benhu\\OneDrive\\Área de Trabalho\\doctrine_slim\\views\\apagartelefone.html");
    }
}
