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
class __TwigTemplate_5c3854fc4bcc5f3fd2330747e511600539022855857d58b103aa10b29944de2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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

        echo "Accueil | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center mt-0\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"/uploads/test.jpg\" class=\"d-block w-100\" alt=\"...\" >
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"/uploads/test2.jpg\" class=\"d-block w-100\" alt=\"...\" >
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"/uploads/test3.jpg\" class=\"d-block w-100\" alt=\"...\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 34, $this->source); })()));
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
            echo "\" class=\"card-img-top\" width=\"256\" height=\"208\" title=\"";
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>                               
                            ";
            // line 46
            echo "                            ";
            // line 47
            echo "                                <div  class=\"mb-2 text-muted text-bold\">...</div>

                            <a href=\"\" class=\"btn btn-outline-dark p-2\">Lire la suite...</a>
                            ";
            // line 51
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  166 => 55,  157 => 51,  152 => 47,  150 => 46,  145 => 44,  141 => 42,  131 => 39,  128 => 38,  124 => 35,  119 => 34,  89 => 5,  79 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil | {{ parent() }}{% endblock %}
{% block content %}
\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center mt-0\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"/uploads/test.jpg\" class=\"d-block w-100\" alt=\"...\" >
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"/uploads/test2.jpg\" class=\"d-block w-100\" alt=\"...\" >
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"/uploads/test3.jpg\" class=\"d-block w-100\" alt=\"...\">
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
            {# boucle for afin d'afficher les articles #}
             {% for product in products %}
                <div class=\"col-12 col-sm-6 col-lg-3  text-center my-5\">
                    <div class=\"card\">
                    {# gestion de l'url : dossier uploads/table article col picture #}
                        <div class=\"image-carte\">
                            <img src=\"{{ asset('uploads/' ~ product.image) }}\" class=\"card-img-top\" width=\"256\" height=\"208\" title=\"{{ product.nom }}\" alt=\"image {{ product.nom  }}\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ product.nom}}</h5>
                            {# date de publication que l'on met au format jj/mm/aa #}
                            <p class=\"card-text card-decription text-muted mb-0\">{{product.description }}</p>                               
                            {# <h6 class=\"card-subtitle mb-2 text-muted text-right\"></h6> #}
                            {# on retourne le chemin canonique absolu avec path de l'article et on ajoute l'id de l'article #}
                                <div  class=\"mb-2 text-muted text-bold\">...</div>

                            <a href=\"\" class=\"btn btn-outline-dark p-2\">Lire la suite...</a>
                            {# <a href=\"{{ path('article_show', {'id': article.id}) }}\" class=\"btn btn-outline-dark p-2\">Lire la suite...</a> #}
                        </div>
                    </div>
                </div>
            {% endfor %}
            </div>

        </div>
    </div>
{% endblock %}
", "index/index.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\index.html.twig");
    }
}
