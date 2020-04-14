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

/* index/details/detailsProduct.html.twig */
class __TwigTemplate_10af513ca0d581d8e24abcbf37f4481c05b1b03c2caa390fb21728de3be1b015 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/details/detailsProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container-fluid \">
    <div class=\"container\">
        <div class=\"row\">
        ";
        // line 11
        echo "            <div class=\"col-12 mt-5 mb-3\">
                ";
        // line 13
        echo "            </div>
        </div>
        <div class=\" row\">
            <div class=\"col-6\">
                ";
        // line 18
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 18))), "html", null, true);
        echo "\" class=\"image-page-produit\"  title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "\" alt=\"image ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-6\">
                <h2>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</h2>
                <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "prix", [], "any", false, false, false, 23), "html", null, true);
        echo " €</p>
                <a href=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_panier", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo " \" class=\"btn btn-info\">
                    <i class=\"fas fa-cart-plus mr-1\"></i></i> Ajouter
                </a>
            </div>
        </div>

    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "index/details/detailsProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  94 => 23,  90 => 22,  86 => 21,  75 => 18,  69 => 13,  66 => 11,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/details/detailsProduct.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\details\\detailsProduct.html.twig");
    }
}
