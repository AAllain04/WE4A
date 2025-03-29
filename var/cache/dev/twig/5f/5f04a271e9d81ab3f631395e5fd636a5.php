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

/* moodle/index.html.twig */
class __TwigTemplate_1141e82d4785530c010d701ee68ad570 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moodle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moodle/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "moodle/index.html.twig", 1);
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

        yield " Moodle ";
        
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
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <h2 class=\"mb-3\">Mes cours</h2>
                <h3 class=\"text-muted mb-3\">Vue d'ensemble des cours</h3>
                <hr>
            </div>
        </div>

        <div class=\"row mb-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"input-group\">
                    <label for=\"search\" aria-hidden=\"true\"></label>
                    <input id=\"search\" type=\"text\" class=\"form-control\" placeholder=\"🔍 Rechercher un cours\">
                    <select id=\"sort\" class=\"form-select\" aria-label=\"Trier les cours\">
                        <option selected>Trier par</option>
                        <option value=\"alphabetique\">Alphabétique</option>
                        <option value=\"recent\">Plus récent</option>
                        <option value=\"ancien\">Plus ancien</option>
                    </select>
                </div>
            </div>
        </div>

        <div id=\"courses-container\" class=\"row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4\">
            ";
        // line 31
        $context["courses"] = [["id" => 1, "title" => "Informatique", "description" => "Cours de programmation avancée", "image" => "images/back1.png"], ["id" => 2, "title" => "Mathématiques", "description" => "Algèbre linéaire et calcul", "image" => "images/back2.png"], ["id" => 3, "title" => "Design", "description" => "Principes de design graphique", "image" => "images/back3.png"], ["id" => 4, "title" => "Marketing", "description" => "Stratégies de communication", "image" => "images/back2.png"], ["id" => 5, "title" => "Langues", "description" => "Anglais professionnel", "image" => "images/back3.png"], ["id" => 6, "title" => "Gestion", "description" => "Management et leadership", "image" => "images/back1.png"]];
        // line 39
        yield "
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 41
            yield "                <div class=\"col\" data-course-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                    <div class=\"card h-100 shadow-sm\">
                        <img src=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 43)), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                        <div class=\"card-body\">
                            <p class=\"card-title h5\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
                            <p class=\"card-text text-muted\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 46), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
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

        // line 56
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "  <!-- Pour garder le script de Bootstrap -->
    <script src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moodle.js"), "html", null, true);
        yield "\" defer async></script>
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
        return "moodle/index.html.twig";
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
        return array (  196 => 57,  191 => 56,  178 => 55,  165 => 51,  154 => 46,  150 => 45,  143 => 43,  137 => 41,  133 => 40,  130 => 39,  128 => 31,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Moodle {% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <h2 class=\"mb-3\">Mes cours</h2>
                <h3 class=\"text-muted mb-3\">Vue d'ensemble des cours</h3>
                <hr>
            </div>
        </div>

        <div class=\"row mb-4\">
            <div class=\"col-12 col-md-6\">
                <div class=\"input-group\">
                    <label for=\"search\" aria-hidden=\"true\"></label>
                    <input id=\"search\" type=\"text\" class=\"form-control\" placeholder=\"🔍 Rechercher un cours\">
                    <select id=\"sort\" class=\"form-select\" aria-label=\"Trier les cours\">
                        <option selected>Trier par</option>
                        <option value=\"alphabetique\">Alphabétique</option>
                        <option value=\"recent\">Plus récent</option>
                        <option value=\"ancien\">Plus ancien</option>
                    </select>
                </div>
            </div>
        </div>

        <div id=\"courses-container\" class=\"row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4\">
            {% set courses = [
                {'id': 1, 'title': 'Informatique', 'description': 'Cours de programmation avancée', 'image': 'images/back1.png'},
                {'id': 2, 'title': 'Mathématiques', 'description': 'Algèbre linéaire et calcul', 'image': 'images/back2.png'},
                {'id': 3, 'title': 'Design', 'description': 'Principes de design graphique', 'image': 'images/back3.png'},
                {'id': 4, 'title': 'Marketing', 'description': 'Stratégies de communication', 'image': 'images/back2.png'},
                {'id': 5, 'title': 'Langues', 'description': 'Anglais professionnel', 'image': 'images/back3.png'},
                {'id': 6, 'title': 'Gestion', 'description': 'Management et leadership', 'image': 'images/back1.png'}
            ] %}

            {% for course in courses %}
                <div class=\"col\" data-course-title=\"{{ course.title }}\">
                    <div class=\"card h-100 shadow-sm\">
                        <img src=\"{{ asset(course.image) }}\" class=\"card-img-top\" alt=\"{{ course.title }}\">
                        <div class=\"card-body\">
                            <p class=\"card-title h5\">{{ course.title }}</p>
                            <p class=\"card-text text-muted\">{{ course.description }}</p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block scripts %}
    {{ parent() }}  <!-- Pour garder le script de Bootstrap -->
    <script src=\"{{ asset('js/moodle.js') }}\" defer async></script>
{% endblock %}", "moodle/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/we4a_bis/templates/moodle/index.html.twig");
    }
}
