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

/* listatelefonica.html */
class __TwigTemplate_397c8a0a91a23614997a59615690f3b43cf4221670e98e361d7667730fba1d26 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("share/layout.html", "listatelefonica.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1>Lista Telefônica</h1>
<table>
\t<thead>
\t\t<tr>
\t\t\t<th>Nome</th>
\t\t\t<th>Telefone</th>
\t\t\t<th>Ações</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 13
        if ((($context["telefones"] ?? null) == null)) {
            // line 14
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"3\">Não há telefones</td>
\t\t\t</tr>
\t\t";
        } else {
            // line 18
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["telefones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["telefone"]) {
                // line 19
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["telefone"], "getNome", [], "method", false, false, false, 20), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["telefone"], "getTelefone", [], "method", false, false, false, 21), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"visualizardetalhes/";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["telefone"], "getId", [], "method", false, false, false, 23), "html", null, true);
                echo "\">Detalhes</a> | 
\t\t\t\t\t\t<a href=\"apagartelefone/";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["telefone"], "getId", [], "method", false, false, false, 24), "html", null, true);
                echo "\">Apagar</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['telefone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t";
        }
        // line 29
        echo "\t</tbody>
</table>
<a href=\"inserirnovotelefone\">Novo Telefone</a>
";
    }

    public function getTemplateName()
    {
        return "listatelefonica.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  101 => 28,  91 => 24,  87 => 23,  82 => 21,  78 => 20,  75 => 19,  70 => 18,  64 => 14,  62 => 13,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"share/layout.html\" %}
{% block content %}
<h1>Lista Telefônica</h1>
<table>
\t<thead>
\t\t<tr>
\t\t\t<th>Nome</th>
\t\t\t<th>Telefone</th>
\t\t\t<th>Ações</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% if telefones == null %}
\t\t\t<tr>
\t\t\t\t<td colspan=\"3\">Não há telefones</td>
\t\t\t</tr>
\t\t{% else %}
\t\t\t{% for telefone in telefones %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ telefone.getNome() }}</td>
\t\t\t\t\t<td>{{ telefone.getTelefone() }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"visualizardetalhes/{{ telefone.getId() }}\">Detalhes</a> | 
\t\t\t\t\t\t<a href=\"apagartelefone/{{ telefone.getId() }}\">Apagar</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t{% endif %}
\t</tbody>
</table>
<a href=\"inserirnovotelefone\">Novo Telefone</a>
{% endblock %}
\t", "listatelefonica.html", "C:\\Users\\benhu\\OneDrive\\Área de Trabalho\\doctrine_slim\\views\\listatelefonica.html");
    }
}
