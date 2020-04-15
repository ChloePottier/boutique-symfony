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

/* order/order.html.twig */
class __TwigTemplate_865af75abc009167179d2cf1badcec847e82189c7bdf68e24ad7d0c6a3552938 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/order.html.twig", 1);
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

        echo "Commande";
        
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

        echo "    
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row  mt-5 mb-5\">
            <div class=\"col-12\">
                <h1 class=\"\">Commande</h1>
            </div>
        </div>        
        <div class=\"row\">
            <div class=\"col-lg-6\">

                <h3>Adresse de facturation</h3>
                <p> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), "html", null, true);
        echo " </p>
                <p> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "adresse", [], "any", false, false, false, 18), "html", null, true);
        echo " </p>
                <p> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "ville", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "cp", [], "any", false, false, false, 19), "html", null, true);
        echo " </p>
            </div>
            <div class=\"col-lg-6\">

                <h3>Adresse de livraison</h3>
                <p> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), "html", null, true);
        echo " </p>
                <p> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), "html", null, true);
        echo " </p>
                <p> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "ville", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "cp", [], "any", false, false, false, 26), "html", null, true);
        echo " </p>
            </div>
        </div>
        <div class=\"row mt-5\">  
            <div class=\"col-12\">
                <h2 class=\"mb-3\">Récapitulatif de la commande</h2>
            </div>
            <div class=\"col-12\">
                <table class=\"table \">
                    <thead  class=\"thead-light  title-listing\">
                        <tr>
                            <th colspan=\"2\">Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "                        <tr>
                            <td><img src=\"";
            // line 46
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "image", [], "any", false, false, false, 46)), "html", null, true);
            echo "\" alt=\"items\" width=\"50\" height=\"50\"></td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 48), "prix", [], "any", false, false, false, 48), "html", null, true);
            echo "€</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 50), "prix", [], "any", false, false, false, 50) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 50)), "html", null, true);
            echo "€</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                    <tfoot>
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"font-weight-bold text-right\">Total :</td>
                            <td class=\"font-weight-bold \">
                            ";
        // line 59
        echo "                            ";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " €
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class=\"d-flex justify-content-between\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour à la boutique</a>
                    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_confirm");
        echo "\" class=\"btn btn-info \"><i class=\"far fa-credit-card\"></i> Paiement</a>
                </div> 
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
        return "order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 66,  203 => 65,  193 => 59,  186 => 53,  177 => 50,  173 => 49,  169 => 48,  165 => 47,  161 => 46,  158 => 45,  154 => 44,  131 => 26,  127 => 25,  121 => 24,  111 => 19,  107 => 18,  101 => 17,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande{% endblock %}

{% block content %}    
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row  mt-5 mb-5\">
            <div class=\"col-12\">
                <h1 class=\"\">Commande</h1>
            </div>
        </div>        
        <div class=\"row\">
            <div class=\"col-lg-6\">

                <h3>Adresse de facturation</h3>
                <p> {{user.nom}} {{user.prenom}} </p>
                <p> {{user.adresse}} </p>
                <p> {{user.ville}} {{user.cp}} </p>
            </div>
            <div class=\"col-lg-6\">

                <h3>Adresse de livraison</h3>
                <p> {{user.nom}} {{user.prenom}} </p>
                <p> {{user.adresse}} </p>
                <p> {{user.ville}} {{user.cp}} </p>
            </div>
        </div>
        <div class=\"row mt-5\">  
            <div class=\"col-12\">
                <h2 class=\"mb-3\">Récapitulatif de la commande</h2>
            </div>
            <div class=\"col-12\">
                <table class=\"table \">
                    <thead  class=\"thead-light  title-listing\">
                        <tr>
                            <th colspan=\"2\">Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in items %}
                        <tr>
                            <td><img src=\"{{ asset('uploads/') ~ item.product.image }}\" alt=\"items\" width=\"50\" height=\"50\"></td>
                            <td>{{ item.product.nom }}</td>
                            <td>{{ item.product.prix }}€</td>
                            <td>{{ item.quantity }}</td>
                            <td>{{ item.product.prix * item.quantity }}€</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"font-weight-bold text-right\">Total :</td>
                            <td class=\"font-weight-bold \">
                            {# résultat du total #}
                            {{ total }} €
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class=\"d-flex justify-content-between\">
                    <a class=\"text-decoration-none add-category\" href=\"{{path('index')}}\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour à la boutique</a>
                    <a href=\"{{ path('order_confirm')}}\" class=\"btn btn-info \"><i class=\"far fa-credit-card\"></i> Paiement</a>
                </div> 
            </div>
        </div>
    </div>
</div>


{% endblock %}", "order/order.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\order\\order.html.twig");
    }
}
