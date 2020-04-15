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
class __TwigTemplate_a42d55ec170dfa3797b084dbb948d7400db1736119c7ac05dda145b5f731fb33 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/detailsOrderClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/detailsOrderClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/order/detailsOrderClient.html.twig", 1);
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

        echo "Infos Clients | Admin | ";
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
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/order/detailsOrderClient.html.twig", 5)->display($context);
        
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
        echo "\t<div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Détail de la commande </h1>
                </div>
            </div>
            <div class=\"row\">
            <div class=\"col-6 d-flex justify-content-start\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_order");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au listing des commandes</a>
                </div>
                <div class=\"col-12 d-flex flex-column align-items-end font-weight-bold\">
                    <table class=\"table table-hover  mt-3 text\">
                        <thead class=\"thead-dark text-uppercase\">
                            <tr>
                                <th colspan=\"2\" class=\"pl-4\">Produit</th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-center\">Prix</th>
                                <th class=\"text-center\"> Total /produit</th>
                            </tr>
                        </thead>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 30
            echo "                            <tr>
                                <td class=\"text-center font-weight-bold\">  <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "productId", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" alt=\"\" width=\"50\" height=\"50\"></td>
                                <td class=\"text-center font-weight-bold\"> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "productId", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
            echo " </td>
                                <td class=\"text-center font-weight-bold\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td class=\"text-center \">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 34), "html", null, true);
            echo "€  </td>
                                <td class=\"text-center font-weight-bold\">";
            // line 35
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 35) * twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 35)), "html", null, true);
            echo "€</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        <tfoot>
                            <tr class=\"\">
                                <td colspan=\"4\" class=\"font-weight-bold text-right\">Total :</td>
                                <td class=\"font-weight-bold \">
                                ";
        // line 43
        echo "                                ";
        // line 44
        echo "                                </td>
                            </tr>
                        </tfoot>
                    </table>   
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  177 => 44,  175 => 43,  169 => 38,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  141 => 30,  137 => 29,  122 => 17,  111 => 8,  101 => 7,  90 => 5,  80 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Infos Clients | Admin | {{ parent() }}{% endblock %}
{% block header %}
    {% include \"includes/adminNavBar.html.twig\" %}
{% endblock %}
{% block content %}
\t<div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Détail de la commande </h1>
                </div>
            </div>
            <div class=\"row\">
            <div class=\"col-6 d-flex justify-content-start\">
                    <a class=\"text-decoration-none add-category\" href=\"{{path('liste_order')}}\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au listing des commandes</a>
                </div>
                <div class=\"col-12 d-flex flex-column align-items-end font-weight-bold\">
                    <table class=\"table table-hover  mt-3 text\">
                        <thead class=\"thead-dark text-uppercase\">
                            <tr>
                                <th colspan=\"2\" class=\"pl-4\">Produit</th>
                                <th class=\"text-center\">Quantité</th>
                                <th class=\"text-center\">Prix</th>
                                <th class=\"text-center\"> Total /produit</th>
                            </tr>
                        </thead>
                        {% for detail in details %}
                            <tr>
                                <td class=\"text-center font-weight-bold\">  <img src=\"{{asset('uploads/' ~ detail.productId.image)}}\" alt=\"\" width=\"50\" height=\"50\"></td>
                                <td class=\"text-center font-weight-bold\"> {{detail.productId.nom}} </td>
                                <td class=\"text-center font-weight-bold\">{{detail.quantity}}</td>
                                <td class=\"text-center \">{{detail.price}}€  </td>
                                <td class=\"text-center font-weight-bold\">{{ detail.price * detail.quantity }}€</td>
                            </tr>
                        {% endfor %}
                        <tfoot>
                            <tr class=\"\">
                                <td colspan=\"4\" class=\"font-weight-bold text-right\">Total :</td>
                                <td class=\"font-weight-bold \">
                                {# résultat du total #}
                                {# {{ total }} € #}
                                </td>
                            </tr>
                        </tfoot>
                    </table>   
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/order/detailsOrderClient.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\order\\detailsOrderClient.html.twig");
    }
}
