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
                <div class=\"col-12\">
                    <table class=\"table table-hover  mt-5 text\">
                    <thead class=\"thead-dark text-uppercase\">
                        <tr>
                            <th class=\"text-center\">Produit</th>
                            <th class=\"text-center\">Quantité</th>
                            <th class=\"text-center\">Prix</th>
                            
                        </tr>
                    </thead>
                        
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 29
            echo "                    
                    <tr>
                        <td class=\"text-center font-weight-bold\"> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "productId", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            echo " </td>
                        <td class=\"text-center font-weight-bold\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td class=\"text-center font-weight-bold\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 33), "html", null, true);
            echo "    </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </table>   
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "productId", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 40), "html", null, true);
            echo " <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "index/client/detailsOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  153 => 40,  149 => 39,  144 => 38,  140 => 37,  137 => 36,  128 => 33,  124 => 32,  120 => 31,  116 => 29,  112 => 28,  89 => 7,  79 => 6,  59 => 4,  36 => 2,);
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
                <div class=\"col-12\">
                    <table class=\"table table-hover  mt-5 text\">
                    <thead class=\"thead-dark text-uppercase\">
                        <tr>
                            <th class=\"text-center\">Produit</th>
                            <th class=\"text-center\">Quantité</th>
                            <th class=\"text-center\">Prix</th>
                            
                        </tr>
                    </thead>
                        
                    {% for detail in details %}
                    
                    <tr>
                        <td class=\"text-center font-weight-bold\"> {{detail.productId.nom}} </td>
                        <td class=\"text-center font-weight-bold\">{{detail.quantity}}</td>
                        <td class=\"text-center font-weight-bold\">{{detail.price}}    </td>
                    </tr>
                    {% endfor %}
                </table>   
                {% for detail in details %}
                        {{detail.productId.nom}}
                        {{detail.quantity}}
                        {{detail.price}} <br />
                {% endfor %}
                </div>
            </div>
        </div>              
</div>

{% endblock %}", "index/client/detailsOrder.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\detailsOrder.html.twig");
    }
}
