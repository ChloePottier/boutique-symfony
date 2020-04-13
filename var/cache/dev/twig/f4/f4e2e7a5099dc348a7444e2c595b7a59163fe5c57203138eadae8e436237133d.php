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

/* includes/adminNavBar.html.twig */
class __TwigTemplate_f5ad9447614ba7d89cba7c853e95c88d604865a9eab41abc75ecec513971cad0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/adminNavBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/adminNavBar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light text-right\">
    <a class=\"navbar-brand logo\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">My Tshirt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" alt=\"Voir la boutique\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\" ";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo " \">Dashboard</a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_cat");
            echo "\">Catégories <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_product");
            echo "\">Produits <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_user");
            echo "\">Clients <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"\">Commandes <span class=\"sr-only\">(current)</span></a>
            </li>
            ";
        }
        // line 28
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\" \">Mon compte</a>
            </li>
            ";
        }
        // line 33
        echo "            <li class=\"nav-item active\">
                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "                <a class=\"nav-link\" href=\"/logout\">Se déconnecter</a>
                ";
        } else {
            // line 37
            echo "                <a class=\"nav-link\" href=\"/login\">Se connecter</a>
                ";
        }
        // line 39
        echo "            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/adminNavBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  111 => 37,  107 => 35,  105 => 34,  102 => 33,  96 => 29,  93 => 28,  84 => 22,  78 => 19,  72 => 16,  66 => 13,  63 => 12,  61 => 11,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light text-right\">
    <a class=\"navbar-brand logo\" href=\"{{ path('index') }}\">My Tshirt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('index') }}\" alt=\"Voir la boutique\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\" {{path('admin')}} \">Dashboard</a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('liste_cat') }}\">Catégories <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('liste_product') }}\">Produits <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('liste_user') }}\">Clients <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"\">Commandes <span class=\"sr-only\">(current)</span></a>
            </li>
            {% endif %}
            {% if is_granted('ROLE_USER') %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\" \">Mon compte</a>
            </li>
            {% endif %}
            <li class=\"nav-item active\">
                {% if app.user %}
                <a class=\"nav-link\" href=\"/logout\">Se déconnecter</a>
                {% else %}
                <a class=\"nav-link\" href=\"/login\">Se connecter</a>
                {% endif %}
            </li>
        </ul>
    </div>
</nav>", "includes/adminNavBar.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\includes\\adminNavBar.html.twig");
    }
}
