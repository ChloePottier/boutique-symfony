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
class __TwigTemplate_da8df99888290b45986d62924a480857e27b7404bf1ad0741359e3803e4acd92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    
    <body>
        <header>
        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "        </header>
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "My Tshirt - La boutique de vos T-shirts, Sweat, Femme, Homme";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
            <script defer src=\"https://use.fontawesome.com/releases/v5.7.1/js/all.js\" integrity=\"sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7\" crossorigin=\"anonymous\"></script>            <link href=\"https://fonts.googleapis.com/css2?family=Leckerli+One&family=Pacifico&display=swap\" rel=\"stylesheet\"> 
            <link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\"> 
            <link href=\"https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap\" rel=\"stylesheet\"> 
\t\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light text-right\">
            <a class=\"navbar-brand logo\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">My Tshirt</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fas fa-home\"></i> Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\" ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo " \"><i class=\"color fas fa-shopping-cart\"></i> Mon panier</a>
                    </li>
                    ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\" ";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo " \"><i class=\"fas fa-cogs\"></i> Administration</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\" ";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\"><i class=\"fas fa-user-cog\"></i> Mon compte</a>
                    </li>
                    ";
        }
        // line 38
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 39
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\" ";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\"><i class=\"fas fa-user-cog\"></i> Mon compte</a>
                    </li>
                    
                    ";
        }
        // line 44
        echo "                    <li class=\"nav-item \">
                        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                        <a class=\"nav-link\" href=\"/logout\"><i class=\"fas fa-sign-out-alt\"></i> Se déconnecter</a>
                        ";
        } else {
            // line 48
            echo "                        <a class=\"nav-link\" href=\"/login\"><i class=\"fas fa-sign-in-alt\"></i> Se connecter</a>
                        ";
        }
        // line 50
        echo "                    </li>
                </ul>
            </div>
        </nav>
        ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "            <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  186 => 58,  182 => 57,  178 => 56,  170 => 50,  166 => 48,  162 => 46,  160 => 45,  157 => 44,  150 => 40,  147 => 39,  144 => 38,  138 => 35,  132 => 32,  129 => 31,  127 => 30,  122 => 28,  116 => 25,  106 => 18,  103 => 17,  99 => 16,  93 => 12,  87 => 8,  83 => 7,  76 => 6,  70 => 63,  67 => 58,  65 => 56,  62 => 55,  60 => 16,  55 => 13,  53 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\base.html.twig");
    }
}
