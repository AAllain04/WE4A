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

/* admin/catalogue.html.twig */
class __TwigTemplate_421b842a6804419277deb8e0ac11cd7c extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalogue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/catalogue.html.twig", 1);
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

        yield " Catalogue ";
        
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
        yield "  <div class=\"page\">
  <div class=\"contenu\">
    <h2>Catalogue des utilisateurs et des UE</h2>

    <!-- Onglets pour Utilisateurs et UE -->
    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link active\" id=\"users-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"users\" aria-selected=\"true\">Utilisateurs</a>
      </li>
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link\" id=\"ue-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"ue\" aria-selected=\"false\">UE</a>
      </li>
    </ul>
    <div class=\"clear\"></div>

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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            yield "              <tr>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td class=\"editmodif\">
                  <button class=\"btn btn-success btn-sm edit-user\" data-id=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\">Modifier</button>
                  <button class=\"btn btn-danger btn-sm delete-user\" data-id=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\">Supprimer</button>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "          </tbody>
        </table>
      </div>

      <!-- Onglet UE -->
      <div class=\"tab-pane fade\" id=\"ue\" role=\"tabpanel\" aria-labelledby=\"ue-tab\">
        <h3>Liste des Unités d'Enseignement</h3>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Nom de l'UE</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ues"]) || array_key_exists("ues", $context) ? $context["ues"] : (function () { throw new RuntimeError('Variable "ues" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 63
            yield "              <tr>
                <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ue"], "name", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ue"], "description", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                <td class=\"editmodif\">
                  <button class=\"btn btn-success btn-sm edit-user\" data-id=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 67), "html", null, true);
            yield "\">Modifier</button>
                  <button class=\"btn btn-danger btn-sm delete-ue\" data-id=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\">Supprimer</button>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal de confirmation de suppression -->
  <div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"confirmModalLabel\">Confirmation</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          Êtes-vous sûr de vouloir supprimer cet élément ?
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDelete\">Supprimer</button>
        </div>
      </div>
    </div>
  </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 100
        yield "  ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        yield "\"></script>
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
        return "admin/catalogue.html.twig";
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
        return array (  269 => 102,  263 => 100,  250 => 99,  214 => 72,  204 => 68,  200 => 67,  195 => 65,  191 => 64,  188 => 63,  184 => 62,  166 => 46,  156 => 42,  152 => 41,  147 => 39,  143 => 38,  139 => 37,  136 => 36,  132 => 35,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Catalogue {% endblock %}

{% block body %}
  <div class=\"page\">
  <div class=\"contenu\">
    <h2>Catalogue des utilisateurs et des UE</h2>

    <!-- Onglets pour Utilisateurs et UE -->
    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link active\" id=\"users-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"users\" aria-selected=\"true\">Utilisateurs</a>
      </li>
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link\" id=\"ue-tab\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"ue\" aria-selected=\"false\">UE</a>
      </li>
    </ul>
    <div class=\"clear\"></div>

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
            {% for user in users %}
              <tr>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.role }}</td>
                <td class=\"editmodif\">
                  <button class=\"btn btn-success btn-sm edit-user\" data-id=\"{{ user.id }}\">Modifier</button>
                  <button class=\"btn btn-danger btn-sm delete-user\" data-id=\"{{ user.id }}\">Supprimer</button>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>

      <!-- Onglet UE -->
      <div class=\"tab-pane fade\" id=\"ue\" role=\"tabpanel\" aria-labelledby=\"ue-tab\">
        <h3>Liste des Unités d'Enseignement</h3>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Nom de l'UE</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            {% for ue in ues %}
              <tr>
                <td>{{ ue.name }}</td>
                <td>{{ ue.description }}</td>
                <td class=\"editmodif\">
                  <button class=\"btn btn-success btn-sm edit-user\" data-id=\"{{ ue.id }}\">Modifier</button>
                  <button class=\"btn btn-danger btn-sm delete-ue\" data-id=\"{{ ue.id }}\">Supprimer</button>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal de confirmation de suppression -->
  <div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"confirmModalLabel\">Confirmation</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
          Êtes-vous sûr de vouloir supprimer cet élément ?
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDelete\">Supprimer</button>
        </div>
      </div>
    </div>
  </div>
  </div>
{% endblock %}

{% block scripts %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"{{ asset('js/admin.js') }}\"></script>
{% endblock %}", "admin/catalogue.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/we4a_bis/templates/admin/catalogue.html.twig");
    }
}
