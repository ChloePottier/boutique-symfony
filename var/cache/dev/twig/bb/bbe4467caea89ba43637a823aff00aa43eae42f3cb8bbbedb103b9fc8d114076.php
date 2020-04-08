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
class __TwigTemplate_5f04653d8501690110386e68583ae5f6d8317412e88cb457567a62e0be73b692 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product/product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit | Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Listing des produits</h1>
                </div>
            </div>

            <div class=\"input-formP col-12 mb-2\">
            <a class=\"text-decoration-none\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
        echo "\"><i class=\"fas fa-plus mr-2\"></i>Nouveau produit</a>
            <table class=\"table table-hover mt-5 text\">
                    <thead class=\"thead-dark text-uppercase\">
                        <tr>
                            <th class=\"text-center\">Image</th>
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Catégorie</th>
                            <th class=\"text-center\">Description</th>
                            <th class=\"text-center\">En ligne</th>
                            <th class=\"text-center\">Modifier</th>
                            <th class=\"text-center\">Supprimer</th>
                        </tr>
                    </thead>
                        
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "                    
                    <tr>
                        <td class=\"text-center font-weight-bold\"> <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" alt=\"\" width=\"50\" height=\"50\"> </td>
                        <td class=\"text-center font-weight-bold\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td class=\"text-center font-weight-bold\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td class=\"text-center font-weight-bold\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td class=\"text-center font-weight-bold\">
                            ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["product"], "isPublished", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                Oui
                                ";
            } else {
                // line 40
                echo "                                Non
                                ";
            }
            // line 42
            echo "                        </td>
                        <td class=\"text-center\"><a class=\"both input-style color-blue\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_update", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Update</a></td>
                        <td class=\"text-center\"><form action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 46))), "html", null, true);
            echo "\">
                            <input type=\"submit\" value=\"Supprimer\" class=\"input-style both input-style-color\">
                        </form></td>

                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  176 => 52,  164 => 46,  159 => 44,  155 => 43,  152 => 42,  148 => 40,  144 => 38,  142 => 37,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 30,  117 => 29,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un produit | Admin | {{ parent() }}{% endblock %}

{% block content %}
\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Listing des produits</h1>
                </div>
            </div>

            <div class=\"input-formP col-12 mb-2\">
            <a class=\"text-decoration-none\" href=\"{{path('add_product')}}\"><i class=\"fas fa-plus mr-2\"></i>Nouveau produit</a>
            <table class=\"table table-hover mt-5 text\">
                    <thead class=\"thead-dark text-uppercase\">
                        <tr>
                            <th class=\"text-center\">Image</th>
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Catégorie</th>
                            <th class=\"text-center\">Description</th>
                            <th class=\"text-center\">En ligne</th>
                            <th class=\"text-center\">Modifier</th>
                            <th class=\"text-center\">Supprimer</th>
                        </tr>
                    </thead>
                        
                    {% for product in products %}
                    
                    <tr>
                        <td class=\"text-center font-weight-bold\"> <img src=\"{{asset('uploads/' ~ product.image)}}\" alt=\"\" width=\"50\" height=\"50\"> </td>
                        <td class=\"text-center font-weight-bold\">{{ product.nom }}</td>
                        <td class=\"text-center font-weight-bold\">{{ product.category.nom }}</td>
                        <td class=\"text-center font-weight-bold\">{{ product.description }}</td>
                        <td class=\"text-center font-weight-bold\">
                            {% if product.isPublished %}
                                Oui
                                {% else %}
                                Non
                                {% endif %}
                        </td>
                        <td class=\"text-center\"><a class=\"both input-style color-blue\" href=\"{{ path('product_update', {'id' : product.id}) }}\">Update</a></td>
                        <td class=\"text-center\"><form action=\"{{path('delete_product', {'id' : product.id})}}\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ product.id)}}\">
                            <input type=\"submit\" value=\"Supprimer\" class=\"input-style both input-style-color\">
                        </form></td>

                    </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/product/product.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\product\\product.html.twig");
    }
}
