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

/* panier/panier.html.twig */
class __TwigTemplate_2dd74e719dddf6657a40c89c69b337c5ef67fc0c49c94af0ba9ff3b0c9b9f6ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/panier.html.twig", 1);
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

        echo "Détails du panier | ";
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
        echo "\t<div class=\"container-fluid mb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Détails du panier</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 15
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 15, $this->source); })())), 0)) {
            // line 16
            echo "                    <table class=\"table\">
                        <thead class=\"thead-light  title-listing\">
                            <tr>
                                <th colspan=\"2\">Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Supprimer</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "                            <tr>
                                <td><img src=\"";
                // line 30
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "prix", [], "any", false, false, false, 32), "html", null, true);
                echo " €</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\" ";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo " \" class=\"btn btn-danger btn-sm\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "prix", [], "any", false, false, false, 39) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39)), "html", null, true);
                echo " €</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </tbody>
                        <tfoot>
                            <tr class=\"\">

                                <td colspan=\"5\" class=\"font-weight-bold text-right\">Total :</td>
                                <td class=\"font-weight-bold \">
                                    ";
            // line 49
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " €
                                </td>
                            </tr>
                            
                        </tfoot>
                    </table>
                    <div class=\"d-flex justify-content-between\">
                            <a class=\"text-decoration-none add-category\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour à la boutique</a>
                            <a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-info \">Valider mon panier</a>
                    </div>
                    
                    ";
        } else {
            // line 61
            echo "                    <h2 class=\"text-center mt-5\">Votre panier est vide !  </h2>                         
                    <div class=\"d-flex justify-content-center mt-3\">
                        <a class=\"btn-shopping btn btn-outline-info\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">Commencez votre shopping</a>
                    </div>                   
                    ";
        }
        // line 66
        echo "                </div>
            </div>      
        </div>     
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 66,  192 => 63,  188 => 61,  181 => 57,  177 => 56,  166 => 49,  158 => 42,  149 => 39,  142 => 35,  137 => 33,  133 => 32,  129 => 31,  123 => 30,  120 => 29,  116 => 28,  102 => 16,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du panier | {{ parent() }}{% endblock %}

{% block content %}
\t<div class=\"container-fluid mb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Détails du panier</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    {% if items | length > 0 %}
                    <table class=\"table\">
                        <thead class=\"thead-light  title-listing\">
                            <tr>
                                <th colspan=\"2\">Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Supprimer</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in items %}
                            <tr>
                                <td><img src=\"{{ asset('uploads/') ~ item.product.image }}\" alt=\"{{ item.product.nom }}\" width=\"50\" height=\"50\"></td>
                                <td>{{ item.product.nom }}</td>
                                <td>{{ item.product.prix }} €</td>
                                <td>{{ item.quantity }}</td>
                                <td>
                                    <a href=\" {{path('panier_remove', {'id' : item.product.id})}} \" class=\"btn btn-danger btn-sm\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </td>
                                <td>{{ item.product.prix * item.quantity }} €</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot>
                            <tr class=\"\">

                                <td colspan=\"5\" class=\"font-weight-bold text-right\">Total :</td>
                                <td class=\"font-weight-bold \">
                                    {# résultat du total #}
                                    {{ total}} €
                                </td>
                            </tr>
                            
                        </tfoot>
                    </table>
                    <div class=\"d-flex justify-content-between\">
                            <a class=\"text-decoration-none add-category\" href=\"{{path('index')}}\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour à la boutique</a>
                            <a href=\"{{ path('order')}}\" class=\"btn btn-info \">Valider mon panier</a>
                    </div>
                    
                    {% else %}
                    <h2 class=\"text-center mt-5\">Votre panier est vide !  </h2>                         
                    <div class=\"d-flex justify-content-center mt-3\">
                        <a class=\"btn-shopping btn btn-outline-info\" href=\"{{path('index')}}\">Commencez votre shopping</a>
                    </div>                   
                    {% endif %}
                </div>
            </div>      
        </div>     
    </div>
{% endblock %}", "panier/panier.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\panier\\panier.html.twig");
    }
}
