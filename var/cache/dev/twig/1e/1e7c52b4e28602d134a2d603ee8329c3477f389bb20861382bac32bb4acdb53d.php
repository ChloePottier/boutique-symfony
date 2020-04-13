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

/* admin/category/category.html.twig */
class __TwigTemplate_c6ff0b28cff0943daddb10235f8386978ba6d9022098e5127685625d6d9ece96 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/category.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/category.html.twig", 2);
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

        echo "Admin | Listing des catégories | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/category/category.html.twig", 6)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Listing des catégories</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 d-flex justify-content-start\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au Dashboard de l'admin</a>
                </div>
                <div class=\"col-6 d-flex justify-content-end\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_category");
        echo "\"><i class=\"fas fa-plus mr-2\"></i>Nouvelle catégorie</a>
                </div>
                <table class=\"table table-hover mt-3 text col-12\">
                        <thead class=\"thead-dark  title-listing\">
                            <tr>
                                <th class=\"text-center\">Nom</th>
                                <th class=\"text-center\">Modifier</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr>
                        </thead>
                            
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 34
            echo "                        
                        <tr>
                            
                            <td class=\"text-center font-weight-bold\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td class=\"text-center\"><a class=\"btn-edit\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_category", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . "edit.svg")), "html", null, true);
            echo "\" width=\"30\" height=\"30\" alt=\"Modifier\"/></a></td>
                            <td class=\"text-center\">
                            <form action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cat", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 42))), "html", null, true);
            echo "\">
                                <input type=\"submit\" value=\"Supprimer\"  class=\"btn btn-outline-danger btn-submit-form\">
                            </form></td>

                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return "admin/category/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 48,  168 => 42,  163 => 40,  156 => 38,  152 => 37,  147 => 34,  143 => 33,  129 => 22,  123 => 19,  111 => 9,  101 => 8,  90 => 6,  80 => 5,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
 {% extends 'base.html.twig' %}

{% block title %}Admin | Listing des catégories | {{ parent() }}{% endblock %}
{% block header %}
    {% include \"includes/adminNavBar.html.twig\" %}
{% endblock %}
{% block content %}

\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Listing des catégories</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 d-flex justify-content-start\">
                    <a class=\"text-decoration-none add-category\" href=\"{{path('admin')}}\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au Dashboard de l'admin</a>
                </div>
                <div class=\"col-6 d-flex justify-content-end\">
                    <a class=\"text-decoration-none add-category\" href=\"{{path('add_category')}}\"><i class=\"fas fa-plus mr-2\"></i>Nouvelle catégorie</a>
                </div>
                <table class=\"table table-hover mt-3 text col-12\">
                        <thead class=\"thead-dark  title-listing\">
                            <tr>
                                <th class=\"text-center\">Nom</th>
                                <th class=\"text-center\">Modifier</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr>
                        </thead>
                            
                        {% for cat in categories %}
                        
                        <tr>
                            
                            <td class=\"text-center font-weight-bold\">{{ cat.nom }}</td>
                            <td class=\"text-center\"><a class=\"btn-edit\" href=\"{{ path('update_category', {'id' : cat.id}) }}\"><img src=\"{{asset('images/' ~ 'edit.svg')}}\" width=\"30\" height=\"30\" alt=\"Modifier\"/></a></td>
                            <td class=\"text-center\">
                            <form action=\"{{path('delete_cat', {'id' : cat.id})}}\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ cat.id)}}\">
                                <input type=\"submit\" value=\"Supprimer\"  class=\"btn btn-outline-danger btn-submit-form\">
                            </form></td>

                        </tr>
                        {% endfor %}
                    </table>
            </div>
            
        </div>
    </div>


{% endblock %}
", "admin/category/category.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\category\\category.html.twig");
    }
}
