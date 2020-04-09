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

/* admin/index.html.twig */
class __TwigTemplate_94c02bdf8f57bb270a51d219d1d792c0267a6e68eaf090429e3f94f72fe05bac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Admin | ";
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
        echo "\t <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-12 mt-5 mb-3\">
                <h1>Listing des catégories</h1>
            </div>
        </div>
        <div class=\"row d-flex\">
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_cat");
        echo "\" class=\"font-size text-white text-decoration-none\">Catégories</a>
                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_product");
        echo "\" class=\"font-size text-white text-decoration-none\">Produits</a>

                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_user");
        echo "\" class=\"font-size text-white text-decoration-none\">Clients</a>

                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"\" class=\"font-size text-white text-decoration-none\">Commandes</a>

                    </div>
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
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  112 => 23,  102 => 16,  89 => 5,  79 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin | {{ parent() }}{% endblock %}
{% block content %}
\t <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-12 mt-5 mb-3\">
                <h1>Listing des catégories</h1>
            </div>
        </div>
        <div class=\"row d-flex\">
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                            <a href=\"{{path('liste_cat')}}\" class=\"font-size text-white text-decoration-none\">Catégories</a>
                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"{{path('liste_product')}}\" class=\"font-size text-white text-decoration-none\">Produits</a>

                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"{{path('liste_user')}}\" class=\"font-size text-white text-decoration-none\">Clients</a>

                    </div>
                  </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 18rem; height: 150px;\">
                    <div class=\"card-body d-flex justify-content-center align-items-center\">
                        <a href=\"\" class=\"font-size text-white text-decoration-none\">Commandes</a>

                    </div>
                  </div>
            </div>
        </div>
        </div>
        
    </div>
{% endblock %}
", "admin/index.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\index.html.twig");
    }
}
