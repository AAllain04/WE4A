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

/* home/index.html.twig */
class __TwigTemplate_4f3eb85d93514e1436bbf47376f044e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 2
        yield from $this->loadTemplate("partials/header.html.twig", "home/index.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<body>
    <div class=\"d-flex justify-content-center align-items-center vh-100\">
        <div class=\"form-signin w-100 mx-auto\" style=\"max-width: 400px;\">
            <h1 class=\"h3 mb-3 fw-normal text-center\">Please connect</h1>

            ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "

                <div class=\"form-floating position-relative\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12), 'row', ["label" => "Email address"]);
        yield "
                </div>

                <div class=\"form-floating position-relative mt-3\">
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "password", [], "any", false, false, false, 16), 'row', ["label" => "Password"]);
        yield "
                    <button type=\"button\" class=\"btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 border-0\"
                            aria-label=\"Toggle password visibility\"
                            onclick=\"
                                const passwordInput = document.getElementById('";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "');
                                this.innerHTML = passwordInput.type === 'password' ?
                                    '<i class=\\'bi bi-eye\\'></i>' :
                                    '<i class=\\'bi bi-eye-slash\\'></i>';
                                passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';\">
                        <i class=\"bi bi-eye-slash\"></i>
                    </button>
                </div>

                <div class=\"form-check text-start my-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"remember-me\" id=\"flexCheckDefault\">
                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Remember me</label>
                </div>

                <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">Sign in</button>
            ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        yield "

            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["error"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
            <p class=\"mt-5 mb-3 text-body-secondary text-center\">&copy; 2025</p>
        </div>
    </div>

    <script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        yield "\" defer async></script>

";
        // line 47
        yield from $this->loadTemplate("partials/footer.html.twig", "home/index.html.twig", 47)->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  126 => 47,  121 => 45,  114 => 40,  105 => 38,  101 => 37,  96 => 35,  78 => 20,  71 => 16,  64 => 12,  58 => 9,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/home/index.html.twig #}
{% include 'partials/header.html.twig' %}

<body>
    <div class=\"d-flex justify-content-center align-items-center vh-100\">
        <div class=\"form-signin w-100 mx-auto\" style=\"max-width: 400px;\">
            <h1 class=\"h3 mb-3 fw-normal text-center\">Please connect</h1>

            {{ form_start(form) }}

                <div class=\"form-floating position-relative\">
                    {{ form_row(form.username, {'label': 'Email address'}) }}
                </div>

                <div class=\"form-floating position-relative mt-3\">
                    {{ form_row(form.password, {'label': 'Password'}) }}
                    <button type=\"button\" class=\"btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 border-0\"
                            aria-label=\"Toggle password visibility\"
                            onclick=\"
                                const passwordInput = document.getElementById('{{ form.password.vars.id }}');
                                this.innerHTML = passwordInput.type === 'password' ?
                                    '<i class=\\'bi bi-eye\\'></i>' :
                                    '<i class=\\'bi bi-eye-slash\\'></i>';
                                passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';\">
                        <i class=\"bi bi-eye-slash\"></i>
                    </button>
                </div>

                <div class=\"form-check text-start my-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"remember-me\" id=\"flexCheckDefault\">
                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Remember me</label>
                </div>

                <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">Sign in</button>
            {{ form_end(form) }}

            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">{{ message }}</div>
            {% endfor %}

            <p class=\"mt-5 mb-3 text-body-secondary text-center\">&copy; 2025</p>
        </div>
    </div>

    <script src=\"{{ asset('js/index.js') }}\" defer async></script>

{% include 'partials/footer.html.twig' %}", "home/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/we4a_bis/templates/home/index.html.twig");
    }
}
