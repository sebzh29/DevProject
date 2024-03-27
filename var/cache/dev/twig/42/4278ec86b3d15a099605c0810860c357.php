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

/* base.html.twig */
class __TwigTemplate_05c4784e54957d6978be56c66839a175 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "

<!doctype html>
<html lang=\"en\" data-bs-theme=\"auto\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>La Boutique du Dev</title>
    <meta name=\"description\" content=\"La boutique spécialisée dans la fabrication Made In France\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/feather-icons\"></script>
</head>
<body>

<header data-bs-theme=\"dark\">
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">La Boutique du Dev</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                </ul>
                <div class=\"speed-menu\">
                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\"><i data-feather=\"user\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "firstname", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i data-feather=\"user\"></i></a>
                    ";
        }
        // line 50
        echo "
                    <a href=\"\"><i data-feather=\"shopping-cart\"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class=\"container\">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 61
            echo "            <div class=\"flash-";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 63
                echo "                    <div class=\"alert mt-4 alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                        ";
                // line 64
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </div>


    ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
    <!-- FOOTER -->
    <footer class=\"container\">
        <p>&copy; 2017–2024 La Boutique du Dev<a href=\"#\">CGV</a> &middot; <a href=\"#\">CGU</a></p>
    </footer>
</main>

<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/global.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  204 => 72,  190 => 81,  186 => 80,  177 => 73,  175 => 72,  170 => 69,  163 => 67,  154 => 64,  149 => 63,  145 => 62,  140 => 61,  136 => 60,  124 => 50,  118 => 48,  110 => 46,  108 => 45,  92 => 32,  82 => 25,  71 => 17,  67 => 16,  61 => 13,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!doctype html>
<html lang=\"en\" data-bs-theme=\"auto\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>La Boutique du Dev</title>
    <meta name=\"description\" content=\"La boutique spécialisée dans la fabrication Made In France\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">

    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('/assets/css/carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/assets/css/custom.css') }}\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/feather-icons\"></script>
</head>
<body>

<header data-bs-theme=\"dark\">
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">La Boutique du Dev</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_home') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                </ul>
                <div class=\"speed-menu\">
                    {% if app.user%}
                        <a href=\"{{ path('app_account') }}\"><i data-feather=\"user\"></i> {{ app.user.firstname }}</a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\"><i data-feather=\"user\"></i></a>
                    {% endif %}

                    <a href=\"\"><i data-feather=\"shopping-cart\"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class=\"container\">
        {% for label, messages in app.flashes %}
            <div class=\"flash-{{ label }}\">
                {% for message in messages %}
                    <div class=\"alert mt-4 alert-{{ label }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
        {% endfor %}
    </div>


    {%  block body %}{% endblock %}

    <!-- FOOTER -->
    <footer class=\"container\">
        <p>&copy; 2017–2024 La Boutique du Dev<a href=\"#\">CGV</a> &middot; <a href=\"#\">CGU</a></p>
    </footer>
</main>

<script src=\"{{ asset('/assets/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('/assets/js/global.js') }}\"></script>
</body>
</html>
", "base.html.twig", "C:\\laragon\\www\\DevProject\\templates\\base.html.twig");
    }
}
