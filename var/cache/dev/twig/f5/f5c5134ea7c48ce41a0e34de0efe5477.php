<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/index.html.twig */
class __TwigTemplate_7c5119a4e93f8ccb0275c630a836249c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Gestion des utilisateurs et des cours ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "  <div class=\"container\">
    <h2>Gestion des utilisateurs et des cours</h2>
    
    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link active\" id=\"users-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"users\" aria-selected=\"true\">Utilisateurs</a>
      </li>
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link\" id=\"courses-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"courses\" aria-selected=\"false\">Cours</a>
      </li>
    </ul>

    <div class=\"tab-content\" id=\"myTabContent\">
      <!-- Onglet Utilisateurs -->
      <div class=\"tab-pane fade show active\" id=\"users\" role=\"tabpanel\" aria-labelledby=\"users-tab\">
        <h3>Liste des utilisateurs</h3>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Rôle</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            yield "              <tr>
                <td>nom</td>
                <td>email</td>
                <td>role</td>
                <td>
                  <a href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                  <a href=\"";
            // line 39
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"btn btn-danger btn-sm\">Supprimer</a>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "          </tbody>
        </table>
      </div>

      <!-- Onglet Cours -->
      <div class=\"tab-pane fade\" id=\"courses\" role=\"tabpanel\" aria-labelledby=\"courses-tab\">
        <h3>Liste des cours</h3>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Nom du cours</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            yield "              <tr>
                <td>Nom</td>
                <td>Description</td>
                <td>
                  <a href=\"";
            // line 64
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                  <a href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"btn btn-danger btn-sm\">Supprimer</a>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "          </tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  195 => 69,  185 => 65,  181 => 64,  175 => 60,  171 => 59,  153 => 43,  143 => 39,  139 => 38,  132 => 33,  128 => 32,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Gestion des utilisateurs et des cours {% endblock %}

{% block body %}
  <div class=\"container\">
    <h2>Gestion des utilisateurs et des cours</h2>
    
    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link active\" id=\"users-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"users\" aria-selected=\"true\">Utilisateurs</a>
      </li>
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link\" id=\"courses-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"courses\" aria-selected=\"false\">Cours</a>
      </li>
    </ul>

    <div class=\"tab-content\" id=\"myTabContent\">
      <!-- Onglet Utilisateurs -->
      <div class=\"tab-pane fade show active\" id=\"users\" role=\"tabpanel\" aria-labelledby=\"users-tab\">
        <h3>Liste des utilisateurs</h3>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Rôle</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            {% for i in 0..3 %}
              <tr>
                <td>nom</td>
                <td>email</td>
                <td>role</td>
                <td>
                  <a href=\"{{ path('admin') }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
                  <a href=\"{{ path('admin') }}\" class=\"btn btn-danger btn-sm\">Supprimer</a>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>

      <!-- Onglet Cours -->
      <div class=\"tab-pane fade\" id=\"courses\" role=\"tabpanel\" aria-labelledby=\"courses-tab\">
        <h3>Liste des cours</h3>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Nom du cours</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            {% for i in 0..3 %}
              <tr>
                <td>Nom</td>
                <td>Description</td>
                <td>
                  <a href=\"{{ path('admin') }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
                  <a href=\"{{ path('admin') }}\" class=\"btn btn-danger btn-sm\">Supprimer</a>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}", "admin/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/we4a_bis/templates/admin/index.html.twig");
    }
}
