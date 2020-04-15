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

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/product/product.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
                                <th class=\"text-center text-nowrap\">Publié</th>
                                <th class=\"text-center text-nowrap\">Modifier</th>
                                <th class=\"text-center text-nowrap\">Supprimer</th>
                            </tr>
                        </thead>
                            
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 35, $this->source); })()));
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
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 41), 0, 40) . " ..."), "html", null, true);
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
            echo "\"><i class=\"fas fa-edit\"></i></a></td>
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
                                    <input type=\"submit\" value=\"X\" class=\"btn btn-danger btn-submit-form font-weight-bold\">
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
        return array (  207 => 60,  194 => 53,  189 => 51,  184 => 49,  181 => 48,  177 => 46,  173 => 44,  171 => 43,  166 => 41,  162 => 40,  158 => 39,  154 => 38,  150 => 36,  146 => 35,  128 => 20,  122 => 17,  111 => 8,  101 => 7,  90 => 5,  80 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un produit | Admin | {{ parent() }}{% endblock %}
{% block header %}
    {% include \"includes/adminNavBar.html.twig\" %}
{% endblock %}
{% block content %}
\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Listing des produits</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 d-flex justify-content-start\">
                    <a class=\"text-decoration-none add-category\" href=\"{{path('admin')}}\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au Dashboard de l'admin</a>
                </div>
                <div class=\"col-6 d-flex justify-content-end\">
                    <a class=\"text-decoration-none add-product\" href=\"{{path('add_product')}}\"><i class=\"fas fa-plus mr-2\"></i>Nouveau produit</a>
                </div>
                <table class=\"table table-hover mt-3 text col-12\">
                        <thead class=\"thead-dark  title-listing\">
                            <tr>
                                <th class=\"text-center text-nowrap\">Image</th>
                                <th class=\"text-center text-nowrap\">Nom</th>
                                <th class=\"text-center text-nowrap\">Catégorie</th>
                                <th class=\"text-center text-nowrap\">Description</th>
                                <th class=\"text-center text-nowrap\">Publié</th>
                                <th class=\"text-center text-nowrap\">Modifier</th>
                                <th class=\"text-center text-nowrap\">Supprimer</th>
                            </tr>
                        </thead>
                            
                        {% for product in products %}
                        
                        <tr>
                            <td class=\"text-center \"> <img src=\"{{asset('uploads/' ~ product.image)}}\" alt=\"\" width=\"50\" height=\"50\"> </td>
                            <td class=\"text-center font-weight-bold\">{{ product.nom}}</td>
                            <td class=\"text-center \">{{ product.category.nom }}</td>
                            <td class=\"text-center \">{{ product.description |slice(0,40) ~ ' ...'}}</td>
                            <td class=\"text-center\"> 
                                {% if product.isPublished %}
                                    Oui
                                    {% else %}
                                    Non
                                    {% endif %}
                            </td>
                            <td class=\"text-center\"><a class=\"btn-edit\" href=\"{{ path('product_update', {'id' : product.id}) }}\"><i class=\"fas fa-edit\"></i></a></td>
                            <td class=\"text-center\">
                                <form action=\"{{path('delete_product', {'id' : product.id})}}\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ product.id)}}\">
                                    <input type=\"submit\" value=\"X\" class=\"btn btn-danger btn-submit-form font-weight-bold\">
                                </form>
                            </td>

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
