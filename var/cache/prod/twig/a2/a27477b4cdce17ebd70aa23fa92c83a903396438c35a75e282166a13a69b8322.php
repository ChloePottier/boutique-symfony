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

/* index/index.html.twig */
class __TwigTemplate_c12c4c2144a3fae025c356dda09d5b981b784986b623e176f87e12c6cc307da3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center mt-0\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"/images/tshirt-1.jpg\" class=\"d-block w-100\" alt=\"Tshirt\" >
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"/images/tshirt-2.jpg\" class=\"d-block w-100\" alt=\"Tshirt\" >
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"/images/tshirt-3.jpg\" class=\"d-block w-100\" alt=\"Tshirt\">
                            </div>
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
            ";
        // line 34
        echo "             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "                <div class=\"col-12 col-sm-6 col-lg-3  text-center my-5\">
                    <div class=\"card\">
                    ";
            // line 38
            echo "                        <div class=\"image-carte\">
                            <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid\" width=\"256\" height=\"208\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "\" alt=\"image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
                            ";
            // line 44
            echo "                            <p class=\"card-text card-decription text-muted mb-0\">";
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 44), 0, 100) . "..."), "html", null, true);
            echo "</p>                               
                            ";
            // line 46
            echo "                            ";
            // line 47
            echo "                                ";
            // line 48
            echo "
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-outline-info p-2\">Lire la suite...</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  127 => 49,  124 => 48,  122 => 47,  120 => 46,  115 => 44,  111 => 42,  101 => 39,  98 => 38,  94 => 35,  89 => 34,  59 => 5,  55 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/index.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\index.html.twig");
    }
}
