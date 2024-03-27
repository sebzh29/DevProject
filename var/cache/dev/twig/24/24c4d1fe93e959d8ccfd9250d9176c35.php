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

/* account/_menu.html.twig */
class __TwigTemplate_68a0aa00d15024a3ca346bcba478462d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/_menu.html.twig"));

        // line 1
        echo "<ul class=\"flex-column bg-light-blue\">
    <li class=\"nav-item\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\" class=\"nav-link\">Mes commandes</a>
    <li class=\"nav-item\">
        <a href=\"#\" class=\"nav-link\">Mes adresses</a>
    </li>
    <li class=\"nav-item\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_modify_pwd");
        echo "\" class=\"nav-link\">Modifier mon mot de passe</a>
    </li>
    <li class=\"nav-item\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"nav-link\">Me déconnecter</a>
    </li>
</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "account/_menu.html.twig";
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
        return array (  61 => 11,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"flex-column bg-light-blue\">
    <li class=\"nav-item\">
        <a href=\"{{ path('app_account') }}\" class=\"nav-link\">Mes commandes</a>
    <li class=\"nav-item\">
        <a href=\"#\" class=\"nav-link\">Mes adresses</a>
    </li>
    <li class=\"nav-item\">
        <a href=\"{{ path('app_account_modify_pwd') }}\" class=\"nav-link\">Modifier mon mot de passe</a>
    </li>
    <li class=\"nav-item\">
        <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">Me déconnecter</a>
    </li>
</ul>", "account/_menu.html.twig", "C:\\laragon\\www\\DevProject\\templates\\account\\_menu.html.twig");
    }
}
