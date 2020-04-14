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

/* admin/index.html.twig */
class __TwigTemplate_cd401fa41573fcba17c14a64114401d8b9732e44756d23e1549542d359812230 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/index.html.twig", 5)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-12 mt-5 mb-5\">
                <h1>Listing des catégories</h1>
            </div>
        </div>
        <div class=\"row d-flex\">
            <div class=\"col-3\">
                <div class=\"card text-white bg-info mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_cat");
        echo "\" class=\"font-size text-white text-decoration-none\">Catégories</a>
                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-info mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_product");
        echo "\" class=\"font-size text-white text-decoration-none\">Produits</a>

                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-info mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_user");
        echo "\" class=\"font-size text-white text-decoration-none\">Clients</a>

                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-info mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_order");
        echo "\" class=\"font-size text-white text-decoration-none\">Commandes</a>

                    </div>
                  </div>
            </div>
        </div>
        </div>
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  103 => 34,  92 => 26,  82 => 19,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\index.html.twig");
    }
}
