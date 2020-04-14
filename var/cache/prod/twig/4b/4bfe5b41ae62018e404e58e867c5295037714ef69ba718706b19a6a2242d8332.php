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

/* admin/product/product.html.twig */
class __TwigTemplate_4987bb792ae5af0f2d0b0b529fae9eafafa66a595e7846543f26e1e63635bfe6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/product/product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajouter un produit | Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/product/product.html.twig", 5)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Listing des produits</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 d-flex justify-content-start\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au Dashboard de l'admin</a>
                </div>
                <div class=\"col-6 d-flex justify-content-end\">
                    <a class=\"text-decoration-none add-product\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
        echo "\"><i class=\"fas fa-plus mr-2\"></i>Nouveau produit</a>
                </div>
                <table class=\"table table-hover mt-3 text col-12\">
                        <thead class=\"thead-dark  title-listing\">
                            <tr>
                                <th class=\"text-center text-nowrap\">Image</th>
                                <th class=\"text-center text-nowrap\">Nom</th>
                                <th class=\"text-center text-nowrap\">Catégorie</th>
                                <th class=\"text-center text-nowrap\">Description</th>
                                <th class=\"text-center text-nowrap\">En ligne</th>
                                <th class=\"text-center text-nowrap\">Modifier</th>
                                <th class=\"text-center text-nowrap\">Supprimer</th>
                            </tr>
                        </thead>
                            
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                        
                        <tr>
                            <td class=\"text-center \"> <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 38))), "html", null, true);
            echo "\" alt=\"\" width=\"50\" height=\"50\"> </td>
                            <td class=\"text-center font-weight-bold\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td class=\"text-center \">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td class=\"text-center \">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["product"], "isPublished", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                    Oui
                                    ";
            } else {
                // line 46
                echo "                                    Non
                                    ";
            }
            // line 48
            echo "                            </td>
                            <td class=\"text-center\"><a class=\"btn-edit\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_update", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . "edit.svg")), "html", null, true);
            echo "\" width=\"30\" height=\"30\" alt=\"Modifier\"/></a></td>
                            <td class=\"text-center\">
                                <form action=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 53))), "html", null, true);
            echo "\">
                                    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-outline-danger btn-submit-form\">
                                </form>
                            </td>

                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </table>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/product/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 60,  154 => 53,  149 => 51,  142 => 49,  139 => 48,  135 => 46,  131 => 44,  129 => 43,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  108 => 36,  104 => 35,  86 => 20,  80 => 17,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/product/product.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\product\\product.html.twig");
    }
}
