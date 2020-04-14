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

/* admin/order/detailsOrderClient.html.twig */
class __TwigTemplate_fcfa245de59444c076ec91b39d168a8fad2cf5a8c8b3fa4735b6b7a2b66e8eaf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/order/detailsOrderClient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Infos Clients | Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/order/detailsOrderClient.html.twig", 5)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"container-fluid text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Informations Clients</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 d-flex flex-column align-items-end font-weight-bold\">
                    <p>N° de la commande</p>
                    <p>Nom</p>
                    <p>Prénom</p>

                </div>
                
                <div class=\"col-6 d-flex flex-column align-items-start\">
                
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "productId", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
        echo "
                        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "quantity", [], "any", false, false, false, 26), "html", null, true);
        echo "
                        ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "price", [], "any", false, false, false, 27), "html", null, true);
        echo "

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/order/detailsOrderClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  92 => 26,  88 => 25,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/order/detailsOrderClient.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\order\\detailsOrderClient.html.twig");
    }
}
