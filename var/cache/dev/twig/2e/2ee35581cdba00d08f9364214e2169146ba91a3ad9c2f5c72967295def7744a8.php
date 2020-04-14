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

/* index/client/detailsOrder.html.twig */
class __TwigTemplate_f54844248eac96aabbe0efd5598c123f4eb191c4c3a57ac76634cbf179d418c1 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/client/detailsOrder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/client/detailsOrder.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/client/detailsOrder.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Détail de la commande | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"container-fluid\">
        <div class=\"container\">
                <div class=\"row\">
                        <div class=\"col-12 mt-5 mb-5\">
                                <h1 class=\"text-center mt-4\">Détail de la commande</h1>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-12\">
                                <table class=\"table table-hover  mt-5 text\">
                                        <thead class=\"thead-dark text-uppercase\">
                                                <tr>
                                                <th colspan=\"2\" class=\"text-center\">Produit</th>
                                                <th class=\"text-center\">Quantité</th>
                                                <th class=\"text-center\">Prix</th>
                                                <th class=\"text-center\"> Total /produit</th>
                                                
                                                </tr>
                                        </thead>
                                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 27
            echo "                                        <tr>
                                                <td class=\"text-center font-weight-bold\">  <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "productId", [], "any", false, false, false, 28), "image", [], "any", false, false, false, 28))), "html", null, true);
            echo "\" alt=\"\" width=\"50\" height=\"50\"></td>
                                                <td class=\"text-center font-weight-bold\"> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "productId", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
            echo " </td>
                                                <td class=\"text-center font-weight-bold\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                                <td class=\"text-center font-weight-bold\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo "€  </td>
                                                <td class=\"text-center font-weight-bold\">";
            // line 32
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 32) * twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 32)), "html", null, true);
            echo "€</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                         <tfoot>
                                        <tr class=\"\">

                                                <td colspan=\"5\" class=\"font-weight-bold text-right\">Total :</td>
                                                <td class=\"font-weight-bold \">
                                                ";
        // line 41
        echo "                                                ";
        // line 42
        echo "                                                </td>
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
        return "index/client/detailsOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 42,  149 => 41,  142 => 35,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  89 => 7,  79 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %} Détail de la commande | {{ parent() }}{% endblock %}

{% block content %}
<div class=\"container-fluid\">
        <div class=\"container\">
                <div class=\"row\">
                        <div class=\"col-12 mt-5 mb-5\">
                                <h1 class=\"text-center mt-4\">Détail de la commande</h1>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-12\">
                                <table class=\"table table-hover  mt-5 text\">
                                        <thead class=\"thead-dark text-uppercase\">
                                                <tr>
                                                <th colspan=\"2\" class=\"text-center\">Produit</th>
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
                                                <td class=\"text-center font-weight-bold\">{{detail.price}}€  </td>
                                                <td class=\"text-center font-weight-bold\">{{ detail.price * detail.quantity }}€</td>
                                        </tr>
                                        {% endfor %}
                                         <tfoot>
                                        <tr class=\"\">

                                                <td colspan=\"5\" class=\"font-weight-bold text-right\">Total :</td>
                                                <td class=\"font-weight-bold \">
                                                {# résultat du total #}
                                                {# {{ total}} € #}
                                                </td>
                                        </tr>
                                        
                                        </tfoot>
                                </table>   
                        </div>
                </div>
        </div>              
</div>

{% endblock %}", "index/client/detailsOrder.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\detailsOrder.html.twig");
    }
}
