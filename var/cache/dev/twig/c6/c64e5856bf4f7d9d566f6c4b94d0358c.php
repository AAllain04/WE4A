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

/* partials/nav.html.twig */
class __TwigTemplate_80a4d3abec1b43a050c64bc73e8eadd1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\" aria-label=\"Main Navigation\">
    <div id=\"nav\" class=\"container-fluid\">
        <!-- Logo à gauche -->
        <a id=\"utbmlogo\" class=\"navbar-brand align-items-center m-0 mr-4 p-0 d-md-flex\">
            <img alt=\"UTBM Logo\" src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_blanc.png"), "html", null, true);
        yield "\">
        </a>

        <!-- Bouton pour ouvrir le drawer -->
        <button id=\"drawerToggle\" class=\"btn navbar-toggler d-lg-none\" type=\"button\" aria-controls=\"drawer-1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Contenu de la navigation -->
        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
            <ul class=\"navbar-nav me-auto\" id=\"navbar-items\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Profile</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Tableau de bord</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Mes cours</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Sites UTBM</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Stages/S.E.E</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "\">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Tiroir (drawer) -->
<div class=\"drawer drawer-left slide\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"drawer-1-title\" aria-hidden=\"true\" id=\"drawer-1\">
    <div class=\"drawer-content drawer-content-scrollable\" role=\"document\">
        <div class=\"drawer-header p-3 d-flex justify-content-between align-items-center\">
            <h4 class=\"drawer-title\" id=\"drawer-1-title\">Menu</h4>
            <button type=\"button\" class=\"btn-close\" id=\"drawerClose\" aria-label=\"Close\"></button>
        </div>
        <div class=\"drawer-body p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Profile</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Tableau de bord</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Mes cours</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Sites UTBM</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        yield "\">Stages/S.E.E</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "\">Admin</a></li>
            </ul>
        </div>
    </div>
</div>
<div id=\"drawer-backdrop\" class=\"modal-backdrop fade\"></div>

<script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nav.js"), "html", null, true);
        yield "\" defer async></script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/nav.html.twig";
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
        return array (  136 => 48,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\" aria-label=\"Main Navigation\">
    <div id=\"nav\" class=\"container-fluid\">
        <!-- Logo à gauche -->
        <a id=\"utbmlogo\" class=\"navbar-brand align-items-center m-0 mr-4 p-0 d-md-flex\">
            <img alt=\"UTBM Logo\" src=\"{{ asset('images/logo_blanc.png') }}\">
        </a>

        <!-- Bouton pour ouvrir le drawer -->
        <button id=\"drawerToggle\" class=\"btn navbar-toggler d-lg-none\" type=\"button\" aria-controls=\"drawer-1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Contenu de la navigation -->
        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
            <ul class=\"navbar-nav me-auto\" id=\"navbar-items\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('moodle') }}\">Profile</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('moodle') }}\">Tableau de bord</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('moodle') }}\">Mes cours</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('moodle') }}\">Sites UTBM</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('moodle') }}\">Stages/S.E.E</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('admin') }}\">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Tiroir (drawer) -->
<div class=\"drawer drawer-left slide\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"drawer-1-title\" aria-hidden=\"true\" id=\"drawer-1\">
    <div class=\"drawer-content drawer-content-scrollable\" role=\"document\">
        <div class=\"drawer-header p-3 d-flex justify-content-between align-items-center\">
            <h4 class=\"drawer-title\" id=\"drawer-1-title\">Menu</h4>
            <button type=\"button\" class=\"btn-close\" id=\"drawerClose\" aria-label=\"Close\"></button>
        </div>
        <div class=\"drawer-body p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"{{ path('moodle') }}\">Profile</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"{{ path('moodle') }}\">Tableau de bord</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"{{ path('moodle') }}\">Mes cours</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"{{ path('moodle') }}\">Sites UTBM</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"{{ path('moodle') }}\">Stages/S.E.E</a></li>
                <li class=\"list-group-item\"><a class=\"text-decoration-none text-body-secondary\" href=\"{{ path('admin') }}\">Admin</a></li>
            </ul>
        </div>
    </div>
</div>
<div id=\"drawer-backdrop\" class=\"modal-backdrop fade\"></div>

<script src=\"{{ asset('js/nav.js') }}\" defer async></script>", "partials/nav.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/we4a_bis/templates/partials/nav.html.twig");
    }
}
