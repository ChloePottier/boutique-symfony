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
class __TwigTemplate_cb55ef21bdd02953bfaa9ab2017eb2b1f6a080adfd9d95085f66085fe58d5f5d extends Template
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
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fas fa-home\"></i> Voir la boutique <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\" ";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo " \">Dashboard</a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_cat");
        echo "\">Catégories <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_product");
        echo "\">Produits <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_user");
        echo "\">Clients <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"\">Commandes <span class=\"sr-only\">(current)</span></a>
            </li>
     
            <li class=\"nav-item \">
                ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                <a class=\"nav-link\" href=\"/logout\"><i class=\"fas fa-sign-out-alt\"></i> Se déconnecter</a>
                ";
        } else {
            // line 31
            echo "                <a class=\"nav-link\" href=\"/login\"><i class=\"fas fa-sign-in-alt\"></i> Se connecter</a>
                ";
        }
        // line 33
        echo "            </li>
        </ul>
    </div>
</nav>";
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
        return array (  94 => 33,  90 => 31,  86 => 29,  84 => 28,  74 => 21,  68 => 18,  62 => 15,  56 => 12,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/adminNavBar.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\includes\\adminNavBar.html.twig");
    }
}
